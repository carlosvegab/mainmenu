<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table("mainmenu")->truncate();
        Db::table("mainmenu")->insert([
            [
                'link' => "https://www.link-1.es",
                'name' => "Link 1",
                'parent_id' => 0,
            ],
            [
                'link' => "https://www.link-2.es",
                'name' => "Link 2",
                'parent_id' => 0,
            ],
            [
                'link' => "https://www.link-3.es",
                'name' => "Link 3",
                'parent_id' => 0,
            ],
            [
                'link' => "https://www.link-4.es",
                'name' => "Link 4",
                'parent_id' => 0,
            ],
            [
                'link' => "https://www.link-5.es",
                'name' => "Link 5",
                'parent_id' => 0,
            ],
            [
                'link' => "https://www.sublink-1.es",
                'name' => "Sublink 1",
                'parent_id' => 3,
            ],
            [
                'link' => "https://www.sublink-2.es",
                'name' => "Sublink 2",
                'parent_id' => 3,
            ],
            [
                'link' => "https://www.sublink-3.es",
                'name' => "Sublink 3",
                'parent_id' => 3,
            ],
            [
                'link' => "https://www.sublink-4.es",
                'name' => "Sublink 4",
                'parent_id' => 3,
            ],
        ]);
    }
}
