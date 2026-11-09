<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(['email' => 'admin@example.com'], [
            'name' => 'POS Administrator',
            'username' => 'admin',
            'full_name' => 'POS Administrator',
            'password' => 'password',
        ]);

        Customer::updateOrCreate(['email' => 'customer@example.com'], [
            'full_name' => 'Sample Customer',
            'phone' => '09171234567',
        ]);
    }
}
