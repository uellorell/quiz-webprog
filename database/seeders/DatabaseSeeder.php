<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // Kategori untuk NIM GENAP
        $categories = [
            ['name' => 'Interactive Multimedia', 'slug' => 'interactive-multimedia'],
            ['name' => 'Software Engineering', 'slug' => 'software-engineering'],
        ];

        // Insert categories
        foreach ($categories as $cat) {
            DB::table('categories')->insert([
                'name' => $cat['name'],
                'slug' => $cat['slug'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Writer dummy
        $writers = [];
        for ($i = 1; $i <= 3; $i++) {
            $name = $faker->name();
            DB::table('writers')->insert([
                'name' => $name,
                'slug' => Str::slug($name . '-' . $i),
                'avatar_url' => 'https://i.pravatar.cc/150?u=' . $faker->uuid(),
                'bio' => $faker->sentence(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $writers[] = $i;
        }

        // Materi utama (dari soal)
        $mainTopics = [
            'interactive-multimedia' => [
                'Human and Computer Interaction',
                'User Experience',
                'UX for Digital Immersive Technology',
            ],
            'software-engineering' => [
                'Pattern Software Design',
                'Agile Software Development',
                'Code Reengineering',
            ],
        ];

        // Insert posts untuk tiap kategori
        $catData = DB::table('categories')->get();

        foreach ($catData as $cat) {
            $topics = $mainTopics[$cat->slug] ?? [];

            foreach ($topics as $index => $title) {
                DB::table('posts')->insert([
                    'category_id' => $cat->id,
                    'writer_id' => $faker->randomElement($writers),
                    'title' => $title,
                    'slug' => Str::slug($title . '-' . $faker->unique()->numberBetween(1,999)),
                    'excerpt' => "Ringkasan materi $title untuk mahasiswa.",
                    'body' => "<h2>$title</h2><p>{$faker->paragraph(6)}</p><p>{$faker->paragraph(5)}</p>",
                    'published_at' => Carbon::now()->subDays(rand(1,15)),
                    'is_popular' => $index < 2, // dua pertama populer
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            // tambahan 2 artikel random dari Faker
            for ($j = 0; $j < 2; $j++) {
                $randomTitle = ucfirst($faker->words(4, true));
                DB::table('posts')->insert([
                    'category_id' => $cat->id,
                    'writer_id' => $faker->randomElement($writers),
                    'title' => $randomTitle,
                    'slug' => Str::slug($randomTitle . '-' . $faker->unique()->numberBetween(1,999)),
                    'excerpt' => $faker->sentence(18),
                    'body' => "<p>{$faker->paragraph(5)}</p><p>{$faker->paragraph(5)}</p>",
                    'published_at' => Carbon::now()->subDays(rand(1,10)),
                    'is_popular' => $faker->boolean(30),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        echo "Seeder selesai! 🎉\n";
    }
}
