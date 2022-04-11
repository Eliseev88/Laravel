<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [];
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            $data[] = [
                'category_id' => rand(1, 6),
                'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
                'content' => $faker->text($maxNbChars = 200),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        return $data;
    }
}
