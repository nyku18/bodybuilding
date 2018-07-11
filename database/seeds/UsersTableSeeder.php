<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker::create();
		for ($i = 1; $i <= 10; $i++) 
		{
			DB::table('users')->insert(['name' => $faker->name, 'email' => $faker->email, 'password' => bcrypt('secret'),]);	
		}
    }
}
