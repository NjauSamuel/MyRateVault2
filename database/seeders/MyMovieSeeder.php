<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MyMovie;

class MyMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MyMovie::create([
            'user_id' => 1,
            'title' => 'Avatar The Way of Water',
            'year' => 2022,
            'description' => 'Set more than a decade after the events of the first film, learn the story of the Sully family (Jake, Neytiri, and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive, and the tragedies they endure.',
            'rating' => 7.3,
            'ranking' => 10,
            'review' => 'I liked the water.',
            'img_url' => 'https://image.tmdb.org/t/p/w500/t6HIqrRAclMCA60NsSmeqe9RmNV.jpg',
        ]);

        MyMovie::create([
            'user_id' => 1,
            'title' => 'Phone Booth',
            'year' => 2002,
            'description' => 'Publicist Stuart Shepard finds himself trapped in a phone booth, pinned down by an extortionist\'s sniper rifle. Unable to leave or receive outside help, Stuart\'s negotiation with the caller leads to a jaw-dropping climax.',
            'rating' => 7.3,
            'ranking' => 10,
            'review' => 'My favourite character was the caller.',
            'img_url' => 'https://image.tmdb.org/t/p/w500/tjrX2oWRCM3Tvarz38zlZM7Uc10.jpg',
        ]);
    }
}
