<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['facebook_url', 'twitter_url', 'instagram_url', 'youtube_url', 'linkedin_url', 'brochure_url'];
}
