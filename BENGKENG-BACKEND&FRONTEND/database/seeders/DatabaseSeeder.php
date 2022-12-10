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
                'havebengkel' => true,
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
                'havebengkel' => true,
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
                'havebengkel' => true,
            ]
        );
        User::create(
            [
                'email' => 'user4@gmail.com',
                'name' => 'Abang safrudin',
                'password' => bcrypt('abcde'),
                'phonenumber' => '6285705613369',
                'birth' => 'Silahkan isi tanggal lahir anda',
                'image' => 'user.svg',
                'havebengkel' => true,
            ]
        );
        User::create(
            [
                'email' => 'user5@gmail.com',
                'name' => 'Abang Udin',
                'password' => bcrypt('abcde'),
                'phonenumber' => '6285705613369',
                'birth' => 'Silahkan isi tanggal lahir anda',
                'image' => 'user.svg',
                'havebengkel' => true,
            ]
        );
        User::create(
            [
                'email' => 'user6@gmail.com',
                'name' => 'Abang Badarudin',
                'password' => bcrypt('abcde'),
                'phonenumber' => '6285705613369',
                'birth' => 'Silahkan isi tanggal lahir anda',
                'image' => 'user.svg',
                'havebengkel' => true,
            ]
        );
        User::create(
            [
                'email' => 'user7@gmail.com',
                'name' => 'Abang Aminudin',
                'password' => bcrypt('abcde'),
                'phonenumber' => '6285705613369',
                'birth' => 'Silahkan isi tanggal lahir anda',
                'image' => 'user.svg',
                'havebengkel' => true,
            ]
        );
        User::create(
            [
                'email' => 'user8@gmail.com',
                'name' => 'Abang Syakirudin',
                'password' => bcrypt('abcde'),
                'phonenumber' => '6285705613369',
                'birth' => 'Silahkan isi tanggal lahir anda',
                'image' => 'user.svg',
                'havebengkel' => true,
            ]
        );
        User::create(
            [
                'email' => 'user9@gmail.com',
                'name' => 'Abang Minudin',
                'password' => bcrypt('abcde'),
                'phonenumber' => '6285705613369',
                'birth' => 'Silahkan isi tanggal lahir anda',
                'image' => 'user.svg',
                'havebengkel' => true,
            ]
        );
        User::create(
            [
                'email' => 'user10@gmail.com',
                'name' => 'Abang solihin',
                'password' => bcrypt('abcde'),
                'phonenumber' => '6285705613369',
                'birth' => 'Silahkan isi tanggal lahir anda',
                'image' => 'user.svg',
                'havebengkel' => true,
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
                'layananjasa' => 'jasa yang kami sediakan beragam, mulai dari gati oli, ganti ban, tambal ban, dan lain-lain',
                'phonenumber' => '6281998616849',
                'jenisbengkel_id' => 1,
                'status_id' => 1,
                'maps' => '1979279797942,9139791773197',
                'image' => 'gambar bengkel.jpg',
                'views' => 0,
                'total_rating' => 0,
            ],
        );
        Bengkel::create(
            [
                'user_id' => '2',
                'namabengkel' => 'BengkelKu',
                'deskripsi' => 'ini adalah bengkelku, bengkel yang melayani anda dengan sepenuh hati jiwa dan raga',
                'alamat' => 'jalan tiada ujung, komplek tanpa nama, kelurahan sukatidur, kota hantu',
                'layananjasa' => 'jasa yang kami sediakan beragam, mulai dari gati oli, ganti ban, tambal ban, dan lain-lain',
                'phonenumber' => '6281998616849',
                'jenisbengkel_id' => 1,
                'status_id' => 1,
                'maps' => '1979279797942,9139791773197',
                'image' => 'gambar bengkel.jpg',
                'views' => 0,
                'total_rating' => 0,
            ],
        );
        Bengkel::create(
            [
                'user_id' => '3',
                'namabengkel' => 'Bengkel Inya',
                'deskripsi' => 'ini adalah bengkel Inya, bengkel yang melayani anda dengan sepenuh hati jiwa dan raga',
                'alamat' => 'jalan tiada ujung, komplek tanpa nama, kelurahan sukatidur, kota hantu',
                'layananjasa' => 'jasa yang kami sediakan beragam, mulai dari gati oli, ganti ban, tambal ban, dan lain-lain',
                'phonenumber' => '6281998616849',
                'jenisbengkel_id' => 2,
                'status_id' => 1,
                'maps' => '1979279797942,9139791773197',
                'image' => 'gambar bengkel.jpg',
                'views' => 0,
                'total_rating' => 0,
            ],
        );
        Bengkel::create(
            [
                'user_id' => '4',
                'namabengkel' => 'Bengkel Ulun',
                'deskripsi' => 'ini adalah bengkel Ulun, bengkel yang melayani anda dengan sepenuh hati jiwa dan raga',
                'alamat' => 'jalan tiada ujung, komplek tanpa nama, kelurahan sukatidur, kota hantu',
                'layananjasa' => 'jasa yang kami sediakan beragam, mulai dari gati oli, ganti ban, dll',
                'phonenumber' => '6281998616849',
                'jenisbengkel_id' => 1,
                'status_id' => 1,
                'maps' => '1979279797942,9139791773197',
                'image' => 'gambar bengkel.jpg',
                'views' => 0,
                'total_rating' => 0,
            ],
        );
        Bengkel::create(
            [
                'user_id' => '5',
                'namabengkel' => 'Bengkel Bersama',
                'deskripsi' => 'ini adalah bengkel bersama, bengkel yang melayani anda dengan sepenuh hati jiwa dan raga',
                'alamat' => 'jalan tiada ujung, komplek tanpa nama, kelurahan sukatidur, kota hantu',
                'layananjasa' => 'jasa yang kami sediakan beragam, mulai dari gati oli, ganti ban, dll',
                'phonenumber' => '6281998616849',
                'jenisbengkel_id' => 1,
                'status_id' => 1,
                'maps' => '1979279797942,9139791773197',
                'image' => 'gambar bengkel.jpg',
                'views' => 0,
                'total_rating' => 0,
            ],
        );
        Bengkel::create(
            [
                'user_id' => '6',
                'namabengkel' => 'Bengkel Gue',
                'deskripsi' => 'ini adalah bengkel Gue, bengkel yang melayani anda dengan sepenuh hati jiwa dan raga',
                'alamat' => 'jalan tiada ujung, komplek tanpa nama, kelurahan sukatidur, kota hantu',
                'layananjasa' => 'jasa yang kami sediakan beragam, mulai dari gati oli, ganti ban, tambal ban, dan lain-lain',
                'phonenumber' => '6281998616849',
                'jenisbengkel_id' => 1,
                'status_id' => 1,
                'maps' => '1979279797942,9139791773197',
                'image' => 'gambar bengkel.jpg',
                'views' => 0,
                'total_rating' => 0,
            ],
        );
        Bengkel::create(
            [
                'user_id' => '7',
                'namabengkel' => 'Bengkel Siapa',
                'deskripsi' => 'ini adalah bengkel Siapa, bengkel yang melayani anda dengan sepenuh hati jiwa dan raga',
                'alamat' => 'jalan tiada ujung, komplek tanpa nama, kelurahan sukatidur, kota hantu',
                'layananjasa' => 'jasa yang kami sediakan beragam, mulai dari gati oli, ganti ban, tambal ban, dan lain-lain',
                'phonenumber' => '6281998616849',
                'jenisbengkel_id' => 2,
                'status_id' => 1,
                'maps' => '1979279797942,9139791773197',
                'image' => 'gambar bengkel.jpg',
                'views' => 0,
                'total_rating' => 0,
            ],
        );
        Bengkel::create(
            [
                'user_id' => '8',
                'namabengkel' => 'Bengkel Nda',
                'deskripsi' => 'ini adalah bengkel Nda, bengkel yang melayani anda dengan sepenuh hati jiwa dan raga',
                'alamat' => 'jalan tiada ujung, komplek tanpa nama, kelurahan sukatidur, kota hantu',
                'layananjasa' => 'jasa yang kami sediakan beragam, mulai dari gati oli, ganti ban, tambal ban, dan lain-lain',
                'phonenumber' => '6281998616849',
                'jenisbengkel_id' => 2,
                'status_id' => 1,
                'maps' => '1979279797942,9139791773197',
                'image' => 'gambar bengkel.jpg',
                'views' => 0,
                'total_rating' => 0,
            ],
        );
        Bengkel::create(
            [
                'user_id' => '9',
                'namabengkel' => 'Bengkel Jaya',
                'deskripsi' => 'ini adalah bengkel Jaya, bengkel yang melayani anda dengan sepenuh hati jiwa dan raga',
                'alamat' => 'jalan tiada ujung, komplek tanpa nama, kelurahan sukatidur, kota hantu',
                'layananjasa' => 'jasa yang kami sediakan beragam, mulai dari gati oli, ganti ban, tambal ban, dan lain-lain',
                'phonenumber' => '6281998616849',
                'jenisbengkel_id' => 1,
                'status_id' => 1,
                'maps' => '1979279797942,9139791773197',
                'image' => 'gambar bengkel.jpg',
                'views' => 0,
                'total_rating' => 0,
            ],
        );
        Bengkel::create(
            [
                'user_id' => '10',
                'namabengkel' => 'Bengkel Perkasa',
                'deskripsi' => 'ini adalah bengkel Perkasa, bengkel yang melayani anda dengan sepenuh hati jiwa dan raga',
                'alamat' => 'jalan tiada ujung, komplek tanpa nama, kelurahan sukatidur, kota hantu',
                'layananjasa' => 'jasa yang kami sediakan beragam, mulai dari gati oli, ganti ban, tambal ban, dan lain-lain',
                'phonenumber' => '6281998616849',
                'jenisbengkel_id' => 2,
                'status_id' => 1,
                'maps' => '1979279797942,9139791773197',
                'image' => 'gambar bengkel.jpg',
                'views' => 0,
                'total_rating' => 0,
            ],
        );
    }
}
