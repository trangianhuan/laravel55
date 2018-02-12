<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        // $this->call(UsersTableSeeder::class);
        for ($i=0; $i <10 ; $i++) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'dob' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ]);
        }
    }
}
