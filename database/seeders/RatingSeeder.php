<?php

namespace Database\Seeders;

use App\Models\Rating;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Rating::truncate();

        $ratings = [
            ['user_id' => 1, 'hotel_id' => 1, 'rating' => 5],
            ['user_id' => 1, 'hotel_id' => 2, 'rating' => 3],
            ['user_id' => 2, 'hotel_id' => 1, 'rating' => 4],
            ['user_id' => 2, 'hotel_id' => 3, 'rating' => 2],
            ['user_id' => 3, 'hotel_id' => 2, 'rating' => 5],
            ['user_id' => 3, 'hotel_id' => 3, 'rating' => 3],
            ['user_id' => 4, 'hotel_id' => 4, 'rating' => 4],
            ['user_id' => 4, 'hotel_id' => 5, 'rating' => 2],
            ['user_id' => 5, 'hotel_id' => 4, 'rating' => 5],
            ['user_id' => 5, 'hotel_id' => 5, 'rating' => 3],
        ];
        foreach ($ratings as $rating) {
            Rating::create($rating);
        }
    }
}
