<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use App\Models\City;
use App\Models\Project;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        City::factory(30)->create();
        Company::factory(30)->create();
        User::factory(30)->create();
        Project::factory(30)->create();
        
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
