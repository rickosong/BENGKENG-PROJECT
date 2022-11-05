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
                'name' => 'Akulah Sipengguna',
                'password' => bcrypt('pass321'),
                'phonenumber' => '628198616849',
                'birth' => 'Silahkan isi tanggal lahir anda',
                'image' => 'user.svg',
                'havebengkel' => false,
            ]
        );

        User::create(
            [
                'email' => 'user2@gmail.com',
                'name' => 'Abang Zoya',
                'password' => bcrypt('user2'),
                'phonenumber' => '6287779737901',
                'birth' => 'Silahkan isi tanggal lahir anda',
                'image' => 'user.svg',
                'havebengkel' => false,
            ]
        );

        User::create(
            [
                'email' => 'user3@gmail.com',
                'name' => 'Abang Irfan',
                'password' => bcrypt('user3'),
                'phonenumber' => '6285705613369',
                'birth' => 'Silahkan isi tanggal lahir anda',
                'image' => 'user.svg',
                'havebengkel' => false,
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

        Bengkel::create(
            [
                'user_id' => '1',
                'namabengkel' => 'Bengkel Kita',
                'deskripsi' => 'ini adalah bengkel kita, bengkel yang melayani anda dengan sepenuh hati jiwa dan raga',
                'alamat' => 'jalan tiada ujung, komplek tanpa nama, kelurahan sukatidur, kota hantu',
                'phonenumber' => '6281998616849',
                'jenisbengkel_id' => 1,
                'status_id' => 1,
                'maps' => '1979279797942,9139791773197',
                'image' => 'gambar bengkel.jpg',
                'views' => 0,
                'total_likes' => 0,
                'total_dislikes' => 0,
            ],
        );
    }
}
