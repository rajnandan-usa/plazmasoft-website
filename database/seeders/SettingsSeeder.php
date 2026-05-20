<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create(['key' => 'ps_companyName', 'value' => 'Plazmasoft']);
        Setting::create(['key' => 'ps_websiteTitle', 'value' => 'All in one Software solution company for your business']);
        Setting::create(['key' => 'ps_officialPhoneNumber', 'value' => '+1234567890']);
        Setting::create(['key' => 'ps_contactPhoneNumber', 'value' => '+1234567890']);
        Setting::create(['key' => 'ps_supportPhoneNumber', 'value' => '']);
        Setting::create(['key' => 'ps_whatsappNumber', 'value' => '+1234567890']);
        Setting::create(['key' => 'ps_contactEmail', 'value' => 'info@plazmasoft.com']);
        Setting::create(['key' => 'ps_officialEmail', 'value' => 'plazmasoft.in@gmail.com']);
        Setting::create(['key' => 'ps_supportEmail', 'value' => '']);
        Setting::create(['key' => 'ps_address', 'value' => 'Ara, Bihar, India']);
        Setting::create(['key' => 'ps_facebook', 'value' => 'https://facebook.com']);
        Setting::create(['key' => 'ps_twitter', 'value' => 'https://twitter.com']);
        Setting::create(['key' => 'ps_instagram', 'value' => 'https://instagram.com']);
        Setting::create(['key' => 'ps_youtube', 'value' => 'https://youtube.com']);
        Setting::create(['key' => 'ps_linkedin', 'value' => 'https://linkedin.com']);
        Setting::create(['key' => 'ps_whatsapp', 'value' => 'https://whatsapp.com']);
        Setting::create(['key' => 'ps_owners', 'value' => 'Pandit Programmer & Rajnandan']);
    }
}
