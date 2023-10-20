<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Artwork;

class ArtworkSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('artworks')->delete();
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            Artwork::create([
                'artist_name' => $faker->name,
                'description' => $faker->text,
                'art_type' => $faker->randomElement(['hoi hoa','am nhac','van hoc']),
                'media_link' => $faker->url,
                'cover_image' => $faker->imageUrl,
            ]);
        }
    }
}
