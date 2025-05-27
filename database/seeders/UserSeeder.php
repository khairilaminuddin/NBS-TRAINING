<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'khairil aminuddin',
                'email' => 'khairil@gmail.com'
            ]
        ];

        foreach ($user as $user) {
            User::factory()->create($user);
        }
    }
}
