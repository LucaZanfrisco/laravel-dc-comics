<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $comic){
            $newComic =  new Comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            foreach($comic['artists'] as $key => $artist){
                if($key === count($comic['artists']) - 1){
                    $newComic->artists .= $artist;
                }else{
                   $newComic->artists .= $artist . ","; 
                }
            }
            foreach($comic['writers'] as $key => $writers){
                if($key === count($comic['writers']) - 1){
                    $newComic->writers .= $writers;
                }else{
                   $newComic->writers .= $writers .","; 
                } 
            }
            $newComic->save();
        }
    }
}
