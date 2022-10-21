<?php

use Illuminate\Database\Seeder;

class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 大問テーブル
        $param_big = [
            [
                'name' => '東京',
                'order' => 1,
            ],
            [
                'name' => '広島',
                'order' => 2,
            ],
        ];
        DB::table('big_questions')->insert($param_big);

        // 設問テーブル （写真）
        $param_questions = [
            [
                'big_question_id' => 1,
                'image' => 'takanawa.png',
                'image_name' => '高輪',
                'order' => 1,
            ],
            [
                'big_question_id' => 1,
                'image' => 'kameido.png',
                'image_name' => '亀戸',
                'order' => 2,
            ],
            [
                'big_question_id' => 2,
                'image' => 'mukainada.png',
                'image_name' => '向洋',
                'order' => 1,
            ],
        ];
        DB::table('questions')->insert($param_questions);

        // 選択肢テーブル
        $param_choices = [
            [
                'question_id' => 1,
                'selection_id' => 0,
                'name' => 'たかなわ',
                'valid' => 1,
            ],
            [
                'question_id' => 1,
                'selection_id' => 1,
                'name' => 'たかわ',
                'valid' => 0,
            ],
            [
                'question_id' => 1,
                'selection_id' => 2,
                'name' => 'こうわ',
                'valid' => 0,
            ],
            [
                'question_id' => 2,
                'selection_id' => 0,
                'name' => 'かめと',
                'valid' => 0,
            ],
            [
                'question_id' => 2,
                'selection_id' => 1,
                'name' => 'かめど',
                'valid' => 0,
            ],
            [
                'question_id' => 2,
                'selection_id' => 2,
                'name' => 'かめいど',
                'valid' => 1,
            ],
            [
                'question_id' => 3,
                'selection_id' => 0,
                'name' => 'むこうひら',
                'valid' => 0,
            ],
            [
                'question_id' => 3,
                'selection_id' => 1,
                'name' => 'むきひら',
                'valid' => 0,
            ],
            [
                'question_id' => 3,
                'selection_id' => 2,
                'name' => 'むかいなだ',
                'valid' => 1,
            ],
        ];
        DB::table('choices')->insert($param_choices);
    }
}
