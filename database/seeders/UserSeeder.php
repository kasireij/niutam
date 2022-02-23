<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'John Kasirei', 'email' => 'jkasirei@niuskypacific.com.pg', 'password' => Hash::make('password'),'created_at' => Carbon::now(),],
            ['name' => 'Ian Hanspeter', 'email' => 'ihanspeter@niuskypacific.com.pg', 'password' => Hash::make('password'),'created_at' => Carbon::now(),],
        ]);
    }
}
