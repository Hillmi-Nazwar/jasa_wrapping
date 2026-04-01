<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    
    public function run(): void
    {
    \App\Models\User::create([
    'name' => 'Admin Hillmi',
    'email' => 'admin_jasa@gmail.com',
    'password' => \Illuminate\Support\Facades\Hash::make('admin123'),
    'is_admin' => 1,
]);

    \App\Models\User::create([
    'name' => 'Customer Test',
    'email' => 'user@gmail.com',
    'password' => \Illuminate\Support\Facades\Hash::make('user123'),
    'is_admin' => 0,
]);
    }


}
