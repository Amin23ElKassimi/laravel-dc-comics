<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use Faker\Generator as Faker;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $comics = config('db.comics');

        //
        foreach($comics as $comicItem) {
            $actualComic = new Movie();
            $actualComic->title = $comicItem['title'];
            $actualComic->description = $comicItem['description'];
            $actualComic->thumb = $comicItem['thumb'];
            $actualComic->price = $comicItem['price'];
            $actualComic->series = $comicItem['series'];
            $actualComic->sale_date = $comicItem['sale_date'];
            $actualComic->type = $comicItem['type'];
            $actualComic->save();
        }
        
    }
}
