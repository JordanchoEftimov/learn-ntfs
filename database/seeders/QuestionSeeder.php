<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quiz = Quiz::query()->find(1);
        $quiz->questions()->createMany(
            collect([
                [
                    'question' => 'What is Cryptocurrency?'
                ],
                [
                    'question' => 'What does Cryptocurrency use?'
                ],
                [
                    'question' => 'The blockchain technology can be viewed publicly?'
                ],
                [
                    'question' => 'The blockchain technology can be changed by a single entity?'
                ],
            ])
        );

        $quiz = Quiz::query()->find(2);
        $quiz->questions()->createMany(
            collect([
                [
                    'question' => 'What is NFT?'
                ],
                [
                    'question' => 'What does NFT stand for?'
                ],
                [
                    'question' => 'NFTs are transferred from one owner to another using?'
                ],
                [
                    'question' => 'NFTs are \'one-of-a-kind\' items?'
                ],
            ])
        );


        $quiz = Quiz::query()->find(3);
        $quiz->questions()->createMany(
            collect([
                [
                    'question' => 'NTFs are digital representations of real words things?'
                ],
                [
                    'question' => 'Is each token unique?'
                ],
                [
                    'question' => 'Which cryptocurrency is used by NFT marketplaces?'
                ],
                [
                    'question' => 'NFT tokens take a physical certificate of ownership and make it?'
                ],
            ])
        );


        $quiz = Quiz::query()->find(4);
        $quiz->questions()->createMany(
            collect([
                [
                    'question' => 'What is Step 1 of making NFT?'
                ],
                [
                    'question' => 'What is Step 3 of making NFT?'
                ],
                [
                    'question' => 'What is Step 2 of making NFT?'
                ],
                [
                    'question' => 'What is the most common blockchain platform for NFTs?'
                ],
            ])
        );

    }
}
