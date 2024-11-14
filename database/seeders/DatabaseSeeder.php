<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@lfp.com',
            'password' => Hash::make('password'),
        ]);

        DB::Table('roles')->insert([
            'name' => 'Admin', 
            'role_id' => 1,
        ]);

        DB::Table('roles')->insert([
            'name' => 'User', 
            'role_id' => 2,
        ]);

        DB::Table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 1,
        ]);
    }
}
