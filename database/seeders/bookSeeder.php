<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('books')->truncate();
        DB::table('books')->insert([
            [
                'id' => 01,
                'bookid' => 1111,
                'authorid' => 2,
                'title' => 'giao duc',
                'ISBN' => '',
                'pub_year'=>2003,
                'available'=>1
            ],
            [
                'id' => 02,
                'bookid' => 1111,
                'authorid' => 2,
                'title' => 'giao duc',
                'ISBN' => '',
                'pub_year'=>2003,
                'available'=>1
            ],
            [
                'id' => 03,
                'bookid' => 1111,
                'authorid' => 2,
                'title' => 'giao duc',
                'ISBN' => '',
                'pub_year'=>2003,
                'available'=>1
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
