<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Writer;
use App\Models\Subject;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // --- RESET DATA ---
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Post::truncate();
        Category::truncate();
        Subject::truncate();
        Writer::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // --- CATEGORIES ---
        $categories = [
            ['name' => 'Data Science'],
            ['name' => 'Network Security'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        // Ambil kategori pertama & kedua untuk relasi
        $dataScience = Category::where('name', 'Data Science')->first();
        $networkSecurity = Category::where('name', 'Network Security')->first();

        // --- WRITERS ---
        $writers = [
            ['name' => 'Alice Johnson', 'title' => 'Spesialis Data Science', 'gender' => 'Female'],
            ['name' => 'Bob Smith', 'title' => 'Spesialis Network Security', 'gender' => 'Male'],
            ['name' => 'John Doe', 'title' => 'Spesialis Data Science', 'gender' => 'Male'],
            ['name' => 'Alexander Mike', 'title' => 'Spesialis Network Security', 'gender' => 'Male'],
            ['name' => 'Grace Theodore', 'title' => 'Spesialis Data Science', 'gender' => 'Female'],
        ];

        foreach ($writers as $writer) {
            Writer::create($writer);
        }

        // Ambil writer untuk relasi
        $writer1 = Writer::where('name', 'Alice Johnson')->first();
        $writer2 = Writer::where('name', 'Bob Smith')->first();
        $writer3 = Writer::where('name', 'John Doe')->first();
        $writer4 = Writer::where('name', 'Alexander Mike')->first();
        $writer5 = Writer::where('name', 'Grace Theodore')->first();

        // --- SUBJECTS ---
        $subjects = [
            ['name' => 'Machine Learning', 'category_id' => $dataScience->id],
            ['name' => 'Deep Learning', 'category_id' => $dataScience->id],
            ['name' => 'Natural Language Processing', 'category_id' => $dataScience->id],
            ['name' => 'Software Security', 'category_id' => $networkSecurity->id],
            ['name' => 'Network Administration', 'category_id' => $networkSecurity->id],
            ['name' => 'Popular Network Technology', 'category_id' => $networkSecurity->id],
        ];

        foreach ($subjects as $subject) {
            Subject::create($subject);
        }

        // --- POSTS ---
        $posts = [
            [
                'title' => 'Machine Learning',
                'short_description' => "Pengenalan mengenai Machine Learning dan cara kerjanya.",
                'content' => "
                    Teknologi machine learning (ML) adalah mesin yang dikembangkan untuk bisa belajar secara otomatis tanpa arahan dari penggunanya. Pembelajaran mesin dikembangkan berdasarkan disiplin ilmu seperti statistik, matematika, dan data mining sehingga mesin dapat menganalisis data tanpa perlu diprogram ulang secara eksplisit. 
                    
                    ML memiliki kemampuan untuk memperoleh data yang ada dengan perintah sendiri, mempelajari pola, dan membuat prediksi. Tugas yang dapat dilakukan oleh ML sangat beragam, tergantung pada jenis data dan tujuannya.
                ",
                'writer_id' => $writer1->id,
                'category_id' => $dataScience->id,
                'posted_at' => $faker->dateTimeThisYear(),
            ],

            [
                'title' => 'Deep Learning',
                'short_description' => 'Memahami konsep dan aplikasi deep learning.',
                'content' => 'Deep learning adalah cabang dari machine learning yang menggunakan jaringan saraf tiruan dengan banyak lapisan (deep neural networks). Teknologi ini banyak digunakan dalam pengenalan gambar, suara, dan bahasa alami.
                
                Dengan deep learning, komputer dapat mempelajari fitur kompleks dari data dan menghasilkan prediksi yang lebih akurat dibanding metode tradisional.',
                'writer_id' => $writer1->id,
                'category_id' => $dataScience->id,
                'posted_at' => $faker->dateTimeThisYear(),
            ],
            [
                'title' => 'Network Security',
                'short_description' => 'Memahami konsep keamanan jaringan.',
                'content' => 'Network security adalah praktik melindungi jaringan komputer dari ancaman, akses tidak sah, dan gangguan. Langkah-langkahnya meliputi firewall, enkripsi data, dan monitoring aktivitas jaringan.

                Tujuan utama network security adalah menjaga kerahasiaan, integritas, dan ketersediaan data serta layanan jaringan.',
                'writer_id' => $writer2->id,
                'category_id' => $networkSecurity->id,
                'posted_at' => $faker->dateTimeThisYear(),
            ],
            [
                'title' => 'Network Administration Basics',
                'short_description' => 'Mempelajari dasar-dasar administrasi jaringan komputer.',
                'content' => '
                    Network administration adalah praktik mengelola, memelihara, dan mengawasi jaringan komputer agar tetap aman dan efisien. 
                    Tugas utama seorang network administrator meliputi konfigurasi perangkat jaringan, monitoring kinerja jaringan, manajemen user, serta troubleshooting masalah jaringan.
                    
                    Administrasi yang baik memastikan ketersediaan jaringan, keamanan data, dan performa sistem yang optimal.',
                'writer_id' => $writer3->id,
                'category_id' => $networkSecurity->id, 
                'posted_at' => $faker->dateTimeThisYear(),

            ],
            [
                'title' => 'Natural Language Processing',
                'short_description' => 'Memahami dasar-dasar Natural Language Processing dan aplikasinya.',
                'content' => '
                    Natural Language Processing (NLP) adalah cabang dari kecerdasan buatan yang berfokus pada interaksi antara komputer dan bahasa manusia. 
                    NLP memungkinkan komputer untuk membaca, memahami, dan menafsirkan bahasa manusia secara otomatis.
                    
                    Contoh aplikasi NLP termasuk analisis sentimen, chatbots, penerjemahan otomatis, dan speech recognition. 
                    Dengan NLP, komputer dapat mengekstrak informasi dari teks atau suara, memahami konteks, dan memberikan respon yang relevan.',
                'writer_id' => $writer4->id,
                'category_id' => $dataScience->id,
                'posted_at' => $faker->dateTimeThisYear(),
            ],
            [
            'title' => 'Popular Network Technologies in Use Today',
            'short_description' => 'Mengenal teknologi jaringan populer yang banyak digunakan saat ini.',
            'content' => '
                Berbagai teknologi jaringan digunakan untuk membangun koneksi yang cepat, aman, dan andal. Beberapa teknologi populer termasuk:
                - LAN (Local Area Network) untuk jaringan lokal.
                - WAN (Wide Area Network) untuk menghubungkan area yang luas.
                - Wi-Fi sebagai jaringan nirkabel untuk perangkat mobile dan komputer.
                - VPN (Virtual Private Network) untuk koneksi aman melalui internet.
                - Cloud networking untuk infrastruktur jaringan berbasis awan.
                
                Memahami teknologi ini penting bagi administrator jaringan agar dapat merancang, mengelola, dan meningkatkan performa jaringan secara efektif.',
            'writer_id' => $writer5->id,
            'category_id' => $networkSecurity->id,
            'posted_at' => $faker->dateTimeThisYear(),
        ]
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}

