<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            'title' => '#',
            'logo' => '#',
            'icon' => '#',
            'discount_image' => '#',
            'footer_title' => '#',
            'footer_description' => '#',
            'footer_copyright' => '#'
        ]);
    }
}
