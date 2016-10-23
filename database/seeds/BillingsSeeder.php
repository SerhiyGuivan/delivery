<?php

use Illuminate\Database\Seeder;

class BillingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('billings')->delete();

        DB::table('billings')->insert([
            'id' => 1,
            'title'=>'Стандартний план',
            'name'=>'default',
            'default' => 30,
            'express' => 20,
            'heavy' => 20,
        ], [
            'id' => 2,
            'title'=>'VIP план',
            'name'=>'vip',
            'default' => 20,
            'express' => 15,
            'heavy' => 15,
        ]);
    }
}
