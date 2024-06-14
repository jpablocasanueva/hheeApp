<?php

namespace Database\Seeders;

use App\Models\User;
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
        $this->call(RoleSeeder::class);
        User::factory()->create([
            'name' => 'Jose Pablo Casanueva',
            'email' => 'jpcasanuevab@outlook.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');
        User::factory()->create([
            'name' => 'Bruce Wayne',
            'email' => 'batman@outlook.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Imputador');
    }
}
