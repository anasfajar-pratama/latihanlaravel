<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'id' => 1, // hapus baris ini jika id auto-increment
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => null,
            'password' => Hash::make('1234567'),
            'role' => 'admin',
            'remember_token' => null,
            'created_at' => Carbon::parse('2025-10-04 01:33:38'),
            'updated_at' => Carbon::parse('2025-10-04 01:33:38'),
        ]);

        $this->call([
            KelasSeeder::class,
            LandingSeeder::class,
            MasterAlamatSeeder::class,
        ]);
    }
}
