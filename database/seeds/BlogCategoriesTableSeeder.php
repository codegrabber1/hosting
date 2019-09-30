<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [];

        $nName = 'No category';
        $categories[] = [
            'title' => $nName,
            'slug' => Str::slug($nName),
            'parent_id' => 0
        ];

        for($i = 2; $i <= 11; $i++){
            $nName = 'Category # '. $i;
            $parent_id = $i > 4 ? rand(1, 4) : 1;


            $categories[] = [
                'title' => $nName,
                'slug' => Str::slug($nName),
                'parent_id' => $parent_id
            ];


        }
        DB::table('blog_categories')->insert($categories);
    }
}
