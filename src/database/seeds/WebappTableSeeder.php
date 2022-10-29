<?php

use Illuminate\Database\Seeder;

class WebappTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 学習時間・内容テーブル
        factory(App\study_time::class, 25)->create();
        // $param_times = [
        //     [
        //         'study_date' => '2021-12-01',
        //         'study_hour' => 5,
        //         'languages_id' => 2,
        //         'contents_id' => 1,
        //     ],
            
        // ];
        // DB::table('study_times')->insert($param_times);

        // 設問テーブル （写真）
        $param_languages = [
            [
                'language_name' => 'JavaScript',
                'language_color' => '#0042E5',
            ],
            [
                'language_name' => 'css',
                'language_color' => '#0070B9',
            ],
            [
                'language_name' => 'PHP',
                'language_color' => '#00BDDB',
            ],
            [
                'language_name' => 'HTML',
                'language_color' => '#B29DEF',
            ],
            [
                'language_name' => 'Laravel',
                'language_color' => '#6C43E5',
            ],
            [
                'language_name' => 'SQL',
                'language_color' => '#B29DEF',
            ],
            [
                'language_name' => 'SHELL',
                'language_color' => '#4609E8',
            ],
            [
                'language_name' => '情報システム基礎知識（その他）',
                'language_color' => '#2D00BA',
            ],
        ];
        DB::table('study_languages')->insert($param_languages);

        // 選択肢テーブル
        $param_contents = [
            [
                'contents_name' => 'ドットインストール',
                'contents_color' => '#0042E5',
            ],
            [
                'contents_name' => 'N予備校',
                'contents_color' => '#0070B9',
            ],
            [
                'contents_name' => 'POSSE課題',
                'contents_color' => '#00BDDB',
            ],
        ];
        DB::table('study_contents')->insert($param_contents);
    }
}
