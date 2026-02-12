<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SiteSetting extends Model
{
    protected $guarded = [];
    protected $fillable = [
        'hero_background',
        'structure_banner_light',
        'structure_banner_dark',
    ];

    // Helper untuk mengambil setting (Singleton pattern sederhana)
    public static function getHeroImage()
    {
        $setting = self::first();

        if ($setting && $setting->hero_background) {
            return Storage::url($setting->hero_background);
        }

        // Return default jika belum ada upload
        return asset('images/banner.png');
    }
}
