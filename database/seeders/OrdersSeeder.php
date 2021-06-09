<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [];
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            $data[] = [
                'name' => $faker->name(),
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'comment' => $faker->realTextBetween('20', '200'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        return $data;
    }
}
