<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\RecommendationService;

class RecommendationController extends Controller
{
    // protected $recommendationService;

    // public function __construct(RecommendationService $recommendationService)
    // {
    //     $this->recommendationService = $recommendationService;
    // }

    // public function recommendHotels($userId)
    // {
    //     // return $userId;
    //     // Get recommended hotel IDs based on cosine similarity
    //     $recommendedHotelIds = $this->recommendationService->getHotelRecommendations($userId);

    //     // Fetch hotel details based on recommended hotel IDs
    //     $recommendedHotels = Hotel::whereIn('id', $recommendedHotelIds)->get();

    //     // Return JSON response with recommended hotels
    //     return response()->json($recommendedHotels);
    // }


    protected $recommendationService;

    public function __construct(RecommendationService $recommendationService)
    {
        $this->recommendationService = $recommendationService;
    }

    public function index()
    {
        return view('recommendations.index');
    }

    // public function recommendHotel()
    // {
    //     // Get the similarity method from query parameters (default to 'cosine')
    //     // $method = $request->query('method', 'cosine');

    //     // Get the recommended hotel ID with the highest weighted score
    //     $recommendedHotelId = $this->recommendationService->getHotelRecommendation('pearson');

    //     // Fetch hotel details based on recommended hotel ID
    //     $recommendedHotel = Hotel::find($recommendedHotelId);


    //     // Return JSON response with the recommended hotel details
    //     return response()->json($recommendedHotel);
    // }

    public function processRecommendation(Request $request)
    {
        $request->validate([
            'method' => 'required|in:cosine,pearson',
        ]);

        $method = $request->input('method');
        $recommendedHotelIds = $this->recommendationService->getHotelRecommendations($method);

        $recommendedHotels = Hotel::whereIn('id', $recommendedHotelIds)->get();

        // dd($recommendedHotels);
        // return view('recommendations.index', compact('recommendedHotels', 'method'));
        return view('recommendations.index', compact('recommendedHotels'));

    }
}
