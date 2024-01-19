<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Eriza Alfansyah Sukatma',
            'username' => 'erizaas',
            'email' => 'eriza.alfansyah@gmail.com',
            'password' => Hash::make('eriza123'),
            'role' => 'admin',
        ]);
    }
}
