<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /// Admin
        \App\Models\User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // Category
        $category = \App\Models\Category::create([
            'name' => 'Seminar IT',
            'slug' => 'seminar-it',
        ]);

        $category2 = \App\Models\Category::create([
            'name' => 'Entertainment',
            'slug' => 'entertainment',
        ]);

        $category3 = \App\Models\Category::create([
            'name' => 'Workshop',
            'slug' => 'workshop',
        ]);

        // Events
        \App\Models\Event::create([
            'category_id' => $category2->id,
            'title' => 'Jazz Night 2025',
            'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'poster/event-1.png'
        ]);

        \App\Models\Event::create([
            'category_id' => $category->id,
            'title' => 'Hackathon - Unleash Your Inner Developer',
            'description' => 'Ayo asah skill coding kamu dan ciptakan solusi inovatif untuk tantangan masa depan!',
            'date' => '2026-05-05 10:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'poster/event-2.png'
        ]);

        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'AI & FUTURE TECH SUMMIT 2026',
            'description' => 'Jelajahi tren terkini dalam kecerdasan buatan dan teknologi masa depan bersama para ahli di bidangnya',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'poster/event-3.png'
        ]);

        \App\Models\Event::create([
            'category_id' => $category->id,
            'title' => 'Digital Marketing Bootcamp',
            'description' => 'Belajar strategi pemasaran digital from zero to hero',
            'date' => '2026-04-25 10:40:00',
            'location' => 'Cinema Unit 6',
            'price' => 60000,
            'stock' => 85,
            'poster_path' => 'poster/event-4.png'
        ]);

        \App\Models\Event::create([
            'category_id' => $category2->id,
            'title' => 'E-Sport U-Champ',
            'description' => 'Turnamen E-Sport antar kampus, daftar dan menangkan hadiah menarik',
            'date' => '2026-05-15 13:00:00',
            'location' => 'Hall Amikom',
            'price' => 30000,
            'stock' => 150,
            'poster_path' => 'poster/event-5.png'
        ]);

        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'UI/UX Masterclass',
            'description' => 'Belajar UI/UX bersama para profesional',
            'date' => '2026-01-12 09:00:00',
            'location' => 'Ruang 7.3.1',
            'price' => 50000,
            'stock' => 50,
            'poster_path' => 'poster/event-6.png'
        ]);
    }
}
