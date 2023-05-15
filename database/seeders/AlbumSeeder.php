<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $housesStream = fopen(__DIR__ . '/../houses.csv', 'r');
        $house = fgetcsv($housesStream);
        while($house = fgetcsv($housesStream)) {
            $newAlbum = new Album();
    
            $newAlbum->title = $house[2];
            $newAlbum->artist = $faker->name();
            $newAlbum->genres = "Heavy Metal";
            $newAlbum->is_published = true;
            
            $newAlbum->save();
        }

    }
}
