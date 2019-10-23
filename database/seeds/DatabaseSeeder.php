<?php

use App\Models\BlogPost;
use App\Models\Gift;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BlogCategoriesTableSeeder::class);
        $this->call(MenuItemTableSeeder::class);
        factory(BlogPost::class, 10)->create();
        factory(Gift::class, 10)->create();
    }
}
