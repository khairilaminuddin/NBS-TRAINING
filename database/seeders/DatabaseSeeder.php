<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Models\Student;
use App\Models\User;
use Illuminate\Container\Attributes\DB;
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
        //User::truncate();

        //User::factory()->create([
           // 'name' => 'Test User',
           // 'email' => 'test@example.com',
        //]);
        //Student::factory(10)->create();

        //$this->call([
        //    StaffSeeder::class,
        //]);

        $this->call([
            StudentSeeder::class,
            UserSeeder::class,
        ]);
    }
}
