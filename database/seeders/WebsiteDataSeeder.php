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
                [
                    'name' => 'Linkedin Link',
                    'slug' => 'linkedin-link',
                    'value' => 'http://linkedin.com',
                ],
                [
                    'name' => 'Sales Email',
                    'slug' => 'sales-email',
                    'value' => 'sales@alyasmeenkw.com',
                ],
                [
                    'name' => 'Sales Number',
                    'slug' => 'sales-number',
                    'value' => null,
                ],
                [
                    'name' => 'Company Address',
                    'slug' => 'company-address',
                    'value' => null,
                ],
                [
                    'name' => 'Map',
                    'slug' => 'map',
                    'value' => null,
                ],
                [
                    'name' => 'Meta Pixel',
                    'slug' => 'meta-pixel',
                    'value' => null,
                ],
                [
                    'name' => 'Google Analytics',
                    'slug' => 'google-analytics',
                    'value' => null,
                ],
                [
                    'name' => 'Whats App',
                    'slug' => 'whats-app',
                    'value' => null,
                ],
                [
                    'name' => 'Chat Bot',
                    'slug' => 'chat-bot',
                    'value' => null,
                ],
            ]

        );
    }
}
