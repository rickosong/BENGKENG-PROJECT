<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\AllBengkel;
use App\Models\AllRating;
use App\Models\Bengkel;
use App\Models\Review;
use App\Models\Status;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Dummy User
        User::create(
            [
                'email' => 'user1@gmail.com',
                'password' => bcrypt('pass321'),
                'phonenumber' => '081932432218',
                'birth' => '04/04/2004',
                'image' => 'user.svg',
            ]
        );

        // Status Bengkel
        Status::create(
            [
                'statusbengkel' => 'Aktif',
            ],
        );

        Status::create(
            [
                'statusbengkel' => 'Tidak Aktif',
            ]
        );

        // Jenis Rating
        AllRating::create(
            [
                'rating' => 'Bagus'
            ]
        );

        AllRating::create(
            [
                'rating' => 'Jelek'
            ]
        );

        // Jenis Bengkel
        AllBengkel::create(
            [
                'jenis_bengkel' => 'Bengkel Motor'
            ]
        );

        AllBengkel::create(
            [
                'jenis_bengkel' => 'Bengkel Mobil'
            ]
        );
    }
}
