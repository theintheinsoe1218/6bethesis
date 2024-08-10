<?php

namespace App\Services;

use App\Models\User;
use App\Models\Rating;

class SimilarityMatrixService
{
    public function getSimilarityMatrix($method = 'cosine')
    {
        // Fetch ratings for all users
        $allRatings = Rating::with('user')->get()->groupBy('user_id');

        // Initialize the similarity matrix
        $similarityMatrix = [];

        // Calculate similarities between each pair of users
        foreach ($allRatings as $userId1 => $ratings1) {
            $user1 = User::find($userId1); // Fetch user name for user_id 1
            $similarityMatrix[$userId1]['user_name'] = $user1->name; // Include user name
            
            foreach ($allRatings as $userId2 => $ratings2) {
                if ($userId1 == $userId2) {
                    $similarityMatrix[$userId1][$userId2] = 1.0;
                } else {
                    $userRatings1 = $ratings1->pluck('rating', 'hotel_id')->toArray();
                    $userRatings2 = $ratings2->pluck('rating', 'hotel_id')->toArray();
                    $similarity = $method === 'pearson'
                        ? $this->calculatePearsonCorrelation($userRatings1, $userRatings2)
                        : $this->calculateCosineSimilarity($userRatings1, $userRatings2);
                    $similarityMatrix[$userId1][$userId2] = $similarity;
                }
            }
        }

        return $similarityMatrix;
    }

    private function calculateCosineSimilarity($ratings1, $ratings2)
    {
        $commonHotels = array_intersect_key($ratings1, $ratings2);

        if (empty($commonHotels)) {
            return 0;
        }

        $dotProduct = 0;
        $magnitude1 = 0;
        $magnitude2 = 0;

        foreach ($commonHotels as $hotelId => $rating) {
            $dotProduct += $ratings1[$hotelId] * $ratings2[$hotelId];
            $magnitude1 += pow($ratings1[$hotelId], 2);
            $magnitude2 += pow($ratings2[$hotelId], 2);
        }

        $magnitude1 = sqrt($magnitude1);
        $magnitude2 = sqrt($magnitude2);

        if ($magnitude1 == 0 || $magnitude2 == 0) {
            return 0;
        }

        return $dotProduct / ($magnitude1 * $magnitude2);
    }

    private function calculatePearsonCorrelation($ratings1, $ratings2)
    {
        $commonHotels = array_intersect_key($ratings1, $ratings2);

        if (empty($commonHotels)) {
            return 0;
        }

        $mean1 = array_sum($ratings1) / count($ratings1);
        $mean2 = array_sum($ratings2) / count($ratings2);

        $covariance = 0;
        $variance1 = 0;
        $variance2 = 0;

        foreach ($commonHotels as $hotelId => $rating) {
            $covariance += ($ratings1[$hotelId] - $mean1) * ($ratings2[$hotelId] - $mean2);
            $variance1 += pow($ratings1[$hotelId] - $mean1, 2);
            $variance2 += pow($ratings2[$hotelId] - $mean2, 2);
        }

        if ($variance1 == 0 || $variance2 == 0) {
            return 0;
        }

        return $covariance / sqrt($variance1 * $variance2);
    }
}
