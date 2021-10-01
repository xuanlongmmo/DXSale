<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dxlaunch_information extends Model
{
    protected $fillable = [
        'logo_link',
        'website_link',
        'github_link', 
        'twitter_link',
        'reddit_link',
        'telegram_link',
    ];
}
