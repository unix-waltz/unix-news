<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
         "title" => "kanjudddddddbadg",
         "category_id" => 1,
         "slug" => "kanjudddddddbadg",
         "excerpt" => "kanjudddddddbadgerfjnejvhujguhrfhgfuhguhrughurh",
         "body" => "kanjudddddddbadgerfjnejvhujguhrfjdddddddddddddddddddddddddddddddddddddddddddddddddddd"
        ],
        [
            "title" => "kanjuddddddbhdhfbhdbfvfvffffffffffffffffdbadg",
            "category_id" => 2,
            "slug" => "kanjudddddddbadg",
            "excerpt" => "kanjudddddddbadgerfjnejvhujguhrfhgfuhguhrughurh",
            "body" => "kanjudddddddbadgerfjnejvhujguhrfjdddddddddddddddddddddddddddddddddddddddddddddddddddd"
           ]);
    }
}
