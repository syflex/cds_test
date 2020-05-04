<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GlobalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('globals')->insert([
            'fb_ads_pixel' => '547445562579633',
            'google_analytics_tag' => 'UA-165353516-1',
            'contact_email' => 'syflex360@gmail.com',
        ]);
    }
}
