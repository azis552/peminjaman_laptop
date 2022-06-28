<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        

    	foreach (range(1,200) as $index) {
            DB::table('students')->insert([
                'Nik' => Str::random(16),
                'Nama' => $faker->email,
                'tgl' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'T_lahir' => "Kediri",
                'id_laptop' => Str::random(14)
            ]);
        }
    }
}
