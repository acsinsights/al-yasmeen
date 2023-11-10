<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class WebsiteDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('website_data')->insert(
            [

                [
                    'name' => 'Facebook Link',
                    'slug' => 'facebook-link',
                    'value' => 'http://facebook.com',
                ],
                [
                    'name' => 'Instagram Link',
                    'slug' => 'instagram-link',
                    'value' => 'http://instagram.com',
                ],
            ]

        );
    }
}
