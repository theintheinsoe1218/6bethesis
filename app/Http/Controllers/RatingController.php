<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('rate', compact('hotels'));
    }


    public function store(Request $request)
    {
        dd($request);
        $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Rating::updateOrCreate(
            ['user_id' => Auth::id(), 'hotel_id' => $request->hotel_id],
            ['rating' => $request->rating]
        );

        return redirect()->back()->with('success', 'Rating submitted successfully!');
    }
}
