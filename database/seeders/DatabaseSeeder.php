<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\News;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Category::create(
            [
              "category_name" => "category2",
              "category_slug" => "category2"
            ]);
            Category::create(
                [
                  "category_name" => "category1",
                  "category_slug" => "category1"
                ]);
                Category::create(
                    [
                      "category_name" => "category3",
                      "category_slug" => "category3"
                    ]);
                    Category::create(
                        [
                          "category_name" => "category4",
                          "category_slug" => "category4"
                        ]);
                        News::factory(10)->create();
            // News::create([
            //     "title" => "kanjudddddddbadg1",
            //     "category_id" => 1,
            //     "user_id" =>1,
            //     "slug" => "kanjudddddddbadg1",
            //     "excerpt" => "kanjudddddddbadgerfjnejvhujguhrfhgfuhguhrughurh",
            //     "body" => "kanjudddddddbadgerfjnejvhujguhrfjdddddddddddddddddddddddddddddddddddddddddddddddddddd"
            //    ]);
            //    News::create([
            //     "title" => "kanjudddddddbadg2",
            //     "category_id" => 2,
            //     "user_id" =>2,
            //     "slug" => "kanjudddddddbadg2",
            //     "excerpt" => "kanjudddddddbadgerfjnejvhujguhrfhgfuhguhrughurh",
            //     "body" => "kanjudddddddbadgerfjnejvhujguhrfjdddddddddddddddddddddddddddddddddddddddddddddddddddd"
            //    ]);
            //    News::create([
            //     "title" => "kanjudddddddbadg3",
            //     "category_id" => 3,
            //     "user_id" =>3,
            //     "slug" => "kanjudddddddbadg3",
            //     "excerpt" => "kanjudddddddbadgerfjnejvhujguhrfhgfuhguhrughurh",
            //     "body" => "kanjudddddddbadgerfjnejvhujguhrfjdddddddddddddddddddddddddddddddddddddddddddddddddddd"
            //    ]);
            //    News::create([
            //     "title" => "kanjudddddddbadg4",
            //     "category_id" => 4,
            //     "user_id" =>4,
            //     "slug" => "kanjudddddddbadg4",
            //     "excerpt" => "kanjudddddddbadgerfjnejvhujguhrfhgfuhguhrughurh",
            //     "body" => "kanjudddddddbadgerfjnejvhujguhrfjdddddddddddddddddddddddddddddddddddddddddddddddddddd"
            //    ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
