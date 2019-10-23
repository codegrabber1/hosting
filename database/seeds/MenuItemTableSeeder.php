<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MenuItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $items = [];

        $iName = 'No root';
        $items[] = [
            'title' => $iName,
            'slug' => Str::slug($iName),
            'parent' => 0
        ];

        for($i = 2; $i <= 4; $i++)
        {
            $iName = 'Item# ' . $i;
            $parent = $i > 4 ? rand(1,4) : 1;

            $items[] = [
                'title' => $iName,
                'slug' => Str::slug($iName),
                'parent' => $parent
            ];
        }
        DB::table('top_menus')->insert($items);
    }
}
