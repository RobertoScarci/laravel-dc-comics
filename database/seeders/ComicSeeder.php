<?php

namespace Database\Seeders;

use App\Models\Comic;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $comics = config('comics.comics');

        foreach($comics as $comic){
            $actualComic = new Comic();
            $actualComic->title = $comic['title'];
            $actualComic->description = $comic['description'];
            $actualComic->thumb = $comic['thumb'];
            $actualComic->price = $comic['price'];
            $actualComic->series = $comic['series'];
            $actualComic->sale_date = $comic['sale_date'];
            $actualComic->type = $comic['type'];
            $actualComic->save();
        }
    }
}

