<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Global extends Model
{
    
    protected $fillable = [
        'fb_ads_pixel','google_analytics_tag','contact_email'
    ];
}
