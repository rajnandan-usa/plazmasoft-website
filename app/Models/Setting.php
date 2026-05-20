<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'value', 'description'];


    // Cast 'value' to an array if it's a JSON setting
    protected $casts = [
        'value' => 'array', // Automatically cast value to an array if it's JSON
    ];

    // Update or create a setting and clear cache
    public static function setValue($key, $value, $description)
    {
        // Update or create the setting in the database
        $setting = self::updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'description' => $description]
        );

        // Clear the cache since settings have changed
        Cache::forget("settings.{$key}");

        return $setting;
    }

    public static function getValue($key)
    {
        return Cache::remember("settings.{$key}", 60, function () use ($key) {
            $setting = self::where('key', $key)->first();
            return $setting ? $setting->value : null;
        });
    }
}
