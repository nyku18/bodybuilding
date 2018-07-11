<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
      $this->call('Roles');
=======
        $this->call(UsersTableSeeder::class);
>>>>>>> 2a97a117391e70c65b1a46516c25f6c909e9e2f7
    }
}
