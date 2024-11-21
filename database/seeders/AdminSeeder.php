<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->upsert([
            'firstName'     =>  'Admin',
            'lastName'      =>  'Account',
            'username'      =>  'bcAdmin',
            'email'         =>  'bc_admin@gmail.com',
            'password'      =>  Hash::make('admin123'),
            'dept_id'       =>  2,
            'employee_id'   =>  '123',
            'role'          =>  'admin',
        ], ['username']);
    }
}
