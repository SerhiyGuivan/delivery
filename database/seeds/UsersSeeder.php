<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            'id'=> 1,
            'name'=> 'admin',
            'email'=> 'serhiy.guivan@gmail.com',
            'password'=> bcrypt('123321123')
        ]);
    }
}
