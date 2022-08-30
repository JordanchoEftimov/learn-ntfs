<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = Question::query()->find(1);
        $question->answers()->createMany(
            collect([
                [
                    'answer' => 'Blockchain technology',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Digital currency',
                    'is_correct' => true
                ],
                [
                    'answer' => 'File in the cloud',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Transaction',
                    'is_correct' => false
                ],
            ])
        );

        $question = Question::query()->find(2);
        $question->answers()->createMany(
            collect([
                [
                    'answer' => 'Blockchain technology',
                    'is_correct' => true
                ],
                [
                    'answer' => 'Web 2.0',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Artificial Intelligence',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Audio technology',
                    'is_correct' => false
                ],
            ])
        );

        $question = Question::query()->find(3);
        $question->answers()->createMany(
            collect([
                [
                    'answer' => 'Yes',
                    'is_correct' => true
                ],
                [
                    'answer' => 'No',
                    'is_correct' => false
                ],
            ])
        );

        $question = Question::query()->find(4);
        $question->answers()->createMany(
            collect([
                [
                    'answer' => 'Yes',
                    'is_correct' => false
                ],
                [
                    'answer' => 'No',
                    'is_correct' => true
                ],
            ])
        );

        $question = Question::query()->find(5);
        $question->answers()->createMany(
            collect([
                [
                    'answer' => 'Digital asset that is verifiable on blockchain technology',
                    'is_correct' => true
                ],
                [
                    'answer' => 'Digital asset that is verifiable on artificial intelligence',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Cryptocurrency asset',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Transaction',
                    'is_correct' => false
                ],
            ])
        );

        $question = Question::query()->find(6);
        $question->answers()->createMany(
            collect([
                [
                    'answer' => 'Non-fungible technology',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Non-fundable token',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Non-findable token',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Non-fungible token',
                    'is_correct' => true
                ],
            ])
        );

        $question = Question::query()->find(7);
        $question->answers()->createMany(
            collect([
                [
                    'answer' => 'USB',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Blockchain technology',
                    'is_correct' => true
                ],
                [
                    'answer' => 'CD',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Artificial intelligence',
                    'is_correct' => false
                ],
            ])
        );

        $question = Question::query()->find(8);
        $question->answers()->createMany(
            collect([
                [
                    'answer' => 'Yes',
                    'is_correct' => true
                ],
                [
                    'answer' => 'No',
                    'is_correct' => false
                ],
            ])
        );

        $question = Question::query()->find(9);
        $question->answers()->createMany(
            collect([
                [
                    'answer' => 'Yes',
                    'is_correct' => true
                ],
                [
                    'answer' => 'No',
                    'is_correct' => false
                ],
            ])
        );

        $question = Question::query()->find(10);
        $question->answers()->createMany(
            collect([
                [
                    'answer' => 'Yes',
                    'is_correct' => true
                ],
                [
                    'answer' => 'No',
                    'is_correct' => false
                ],
            ])
        );

        $question = Question::query()->find(11);
        $question->answers()->createMany(
            collect([
                [
                    'answer' => 'Mostly bitcoin',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Mostly Etherium',
                    'is_correct' => true
                ],
                [
                    'answer' => 'Mostly Solana',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Mostly Polkadot',
                    'is_correct' => false
                ],
            ])
        );

        $question = Question::query()->find(12);
        $question->answers()->createMany(
            collect([
                [
                    'answer' => 'open source and digital',
                    'is_correct' => false
                ],
                [
                    'answer' => 'open source and secured',
                    'is_correct' => false
                ],
                [
                    'answer' => 'digital and secured',
                    'is_correct' => true
                ],
                [
                    'answer' => 'digital and not secured',
                    'is_correct' => false
                ],
            ])
        );

        $question = Question::query()->find(13);
        $question->answers()->createMany(
            collect([
                [
                    'answer' => 'Decide What to Create',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Outline Business Goals',
                    'is_correct' => true
                ],
                [
                    'answer' => 'Choose a Artificial Intelligence Platform',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Choose a Blockchain Platform',
                    'is_correct' => false
                ],
            ])
        );

        $question = Question::query()->find(14);
        $question->answers()->createMany(
            collect([
                [
                    'answer' => 'Decide What to Create',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Outline Business Goals',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Choose a Artificial Intelligence Platform',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Choose a Blockchain Platform',
                    'is_correct' => true
                ],
            ])
        );

        $question = Question::query()->find(15);
        $question->answers()->createMany(
            collect([
                [
                    'answer' => 'Decide What to Create',
                    'is_correct' => true
                ],
                [
                    'answer' => 'Outline Business Goals',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Choose a Artificial Intelligence Platform',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Choose a Blockchain Platform',
                    'is_correct' => false
                ],
            ])
        );

        $question = Question::query()->find(16);
        $question->answers()->createMany(
            collect([
                [
                    'answer' => 'Bitcoin',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Blockchain',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Solana',
                    'is_correct' => false
                ],
                [
                    'answer' => 'Etherium',
                    'is_correct' => true
                ],
            ])
        );
    }
}
