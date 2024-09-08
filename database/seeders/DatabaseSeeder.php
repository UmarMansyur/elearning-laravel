<?php

namespace Database\Seeders;

use App\Models\Roles;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::create([
            'username' => 'admin',
            'password' => app('hash')->make('admin'),
            'type' => 'teacher',
            'email' => 'umar.ovie@gmail.com',
            'thumbnail' => 'https://via.placeholder.com/150'
        ]);

        Teacher::create([
            'user_id' => $user->id,
            'nuptk' => 'admin',
            'name' => 'Administrator',
            'address' => 'Jl. Admin',
            'gender' => 'm',
            'dob' => '2000-01-01',
            'pob' => 'Pamekasan'
        ]);

        Roles::create([
            'name' => 'Administrator',
        ]);

        User::factory(100)->create();
    }
}
