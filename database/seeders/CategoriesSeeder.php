<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    public function getData(): array
    {
        return [
            ['category_name' => 'Sport'],
            ['category_name' => 'Politics'],
            ['category_name' => 'Economy'],
            ['category_name' => 'Finance'],
            ['category_name' => 'Weather'],
            ['category_name' => 'Other'],
        ];
    }
}
