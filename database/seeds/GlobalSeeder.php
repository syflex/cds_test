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
            'fb_ads_pixel' => '600487757478976',
            'google_analytics_tag' => 'GTM-TWBRS5J',
            'contact_email' => 'syflex360@gmail.com',
        ]);
    }
}
