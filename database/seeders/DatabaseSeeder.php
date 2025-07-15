<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\BlogPost;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    protected static ?string $password;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Bilal',
            'last_name' => 'van Loon',
            'email' => 'bilalvanloon@gmail.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ]);

        BlogPost::factory(10)->create();
    }
}
