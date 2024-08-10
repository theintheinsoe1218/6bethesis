<?php

namespace App\Services;

use App\Models\User;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class RecommendationService
{
    protected $similarityMatrixService;

    public function __construct(SimilarityMatrixService $similarityMatrixService)
    {
        $this->similarityMatrixService = $similarityMatrixService;
    }

    public function getHotelRecommendations($method = 'cosine')
    {
        $userId = Auth::id();
        $userRatings = $this->getUserRatings($userId);
        $similarityMatrix = $this->similarityMatrixService->getSimilarityMatrix($method);
        // dd($similarityMatrix);
        $similarities = $similarityMatrix[$userId] ?? [];

        // Get recommendations based on top similarities
        $recommendations = [];
        foreach ($similarities as $otherUserId => $similarity) {
            if ($otherUserId != $userId) {
                $otherUserRatings = Rating::where('user_id', $otherUserId)->pluck('rating', 'hotel_id')->toArray();
                foreach ($otherUserRatings as $hotelId => $rating) {
                    if (!isset($userRatings[$hotelId])) {
                        if (!isset($recommendations[$hotelId])) {
                            $recommendations[$hotelId] = 0;
                        }
                        $recommendations[$hotelId] += $similarity * $rating;
                    }
                }
            }
        }

        arsort($recommendations);

        return array_keys($recommendations);
    }

    private function getUserRatings($userId)
    {
        return Rating::where('user_id', $userId)->pluck('rating', 'hotel_id')->toArray();
    }

}
