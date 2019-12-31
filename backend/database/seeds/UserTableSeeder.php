<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'pin' => Hash::make('1234'),
            'name' => 'Albert van Kiel'
        ]);

        DB::table('users')->insert([
            'pin' => Hash::make('5678'),
            'name' => 'Elias Aldarwish'
        ]);

        DB::table('users')->insert([
            'pin' => Hash::make('8765'),
            'name' => 'Nicolas Krause'
        ]);

        DB::table('users')->insert([
            'pin' => Hash::make('4321'),
            'name' => 'Hannah Northcutt'
        ]);
    }
}
