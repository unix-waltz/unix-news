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
         "slug" => "kanjudddddddbadg",
         "excerpt" => "kanjudddddddbadgerfjnejvhujguhrfhgfuhguhrughurh",
         "body" => "kanjudddddddbadgerfjnejvhujguhrfjdddddddddddddddddddddddddddddddddddddddddddddddddddd"
        ]);
    }
}
