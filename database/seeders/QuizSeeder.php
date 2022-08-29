<?php

namespace Database\Seeders;

use App\Models\Lecture;
use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecture = Lecture::query()->find(1);
        $lecture->quiz()->create([
            'title' => 'What is Crypto Quiz'
        ]);

        $lecture = Lecture::query()->find(2);
        $lecture->quiz()->create([
            'title' => 'What is NFT Quiz'
        ]);

        $lecture = Lecture::query()->find(3);
        $lecture->quiz()->create([
            'title' => 'NFT Basics Quiz'
        ]);

        $lecture = Lecture::query()->find(4);
        $lecture->quiz()->create([
            'title' => 'How to make and NFT Quiz'
        ]);
    }
}
