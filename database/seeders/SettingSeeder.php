<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // general
            ['group' => 'general', 'key' => 'site_name',    'type' => 'text',    'label' => 'Site Name',                            'value' => 'Plazmasoft',    'sort_order' => 1],
            ['group' => 'general', 'key' => 'site_tagline', 'type' => 'text',    'label' => 'Tagline',                              'value' => 'We ship web and mobile apps that work.',    'sort_order' => 2],
            ['group' => 'general', 'key' => 'legal_name',   'type' => 'text',    'label' => 'Legal Name',                           'value' => 'Kushwaha Webformat Private Limited',    'sort_order' => 3],
            ['group' => 'general', 'key' => 'founded_year', 'type' => 'text',    'label' => 'Founded Year',                         'value' => '2022',    'sort_order' => 4],
            ['group' => 'general', 'key' => 'team_size',    'type' => 'text',    'label' => 'Team Size Display (e.g., 8+)',          'value' => '8+',    'sort_order' => 5],
            ['group' => 'general', 'key' => 'hq_office',    'type' => 'text',    'label' => 'Headquarters (mumbai or patna)',        'value' => 'mumbai',    'sort_order' => 6],

            // contact
            ['group' => 'contact', 'key' => 'phone_primary',           'type' => 'phone',    'label' => 'Primary Phone',                    'value' => '+91 7903292066',    'sort_order' => 10],
            ['group' => 'contact', 'key' => 'phone_secondary',         'type' => 'phone',    'label' => 'Secondary Phone (optional)',        'value' => '',    'sort_order' => 11],
            ['group' => 'contact', 'key' => 'whatsapp_number',         'type' => 'phone',    'label' => 'WhatsApp Number',                  'value' => '917903292066',    'sort_order' => 12],
            ['group' => 'contact', 'key' => 'email_sales',             'type' => 'email',    'label' => 'Sales Email',                      'value' => 'hello@plazmasoft.com',    'sort_order' => 13],
            ['group' => 'contact', 'key' => 'email_support',           'type' => 'email',    'label' => 'Support Email',                    'value' => 'support@plazmasoft.com',    'sort_order' => 14],
            ['group' => 'contact', 'key' => 'working_hours',           'type' => 'text',     'label' => 'Working Hours',                    'value' => 'Mon to Sat, 9 AM to 7 PM IST',    'sort_order' => 15],

            ['group' => 'contact', 'key' => 'office_mumbai_label',     'type' => 'text',     'label' => 'Mumbai Office Label',              'value' => 'Mumbai Office',    'sort_order' => 20],
            ['group' => 'contact', 'key' => 'office_mumbai_address',   'type' => 'textarea', 'label' => 'Mumbai Office Address',            'value' => 'Andheri West, Mumbai 400053, Maharashtra, India',    'sort_order' => 21],
            ['group' => 'contact', 'key' => 'office_mumbai_phone',     'type' => 'phone',    'label' => 'Mumbai Office Phone',              'value' => '+91 7903292066',    'sort_order' => 22],
            ['group' => 'contact', 'key' => 'office_mumbai_map_embed', 'type' => 'url',      'label' => 'Mumbai Office Map Embed URL',      'value' => '',    'sort_order' => 23],
            ['group' => 'contact', 'key' => 'office_mumbai_is_active', 'type' => 'boolean',  'label' => 'Show Mumbai Office on site',       'value' => '1',    'sort_order' => 24],

            ['group' => 'contact', 'key' => 'office_patna_label',      'type' => 'text',     'label' => 'Patna Office Label',               'value' => 'Patna Office',    'sort_order' => 30],
            ['group' => 'contact', 'key' => 'office_patna_address',    'type' => 'textarea', 'label' => 'Patna Office Address',             'value' => 'Boring Road, Patna 800001, Bihar, India',    'sort_order' => 31],
            ['group' => 'contact', 'key' => 'office_patna_phone',      'type' => 'phone',    'label' => 'Patna Office Phone',               'value' => '+91 7903292066',    'sort_order' => 32],
            ['group' => 'contact', 'key' => 'office_patna_map_embed',  'type' => 'url',      'label' => 'Patna Office Map Embed URL',       'value' => '',    'sort_order' => 33],
            ['group' => 'contact', 'key' => 'office_patna_is_active',  'type' => 'boolean',  'label' => 'Show Patna Office on site',        'value' => '1',    'sort_order' => 34],

            // social
            ['group' => 'social', 'key' => 'linkedin_url',   'type' => 'url', 'label' => 'LinkedIn',    'value' => 'https://www.linkedin.com/in/rajnandan-r-kushwaha-679961254/',    'sort_order' => 40],
            ['group' => 'social', 'key' => 'github_url',     'type' => 'url', 'label' => 'GitHub',      'value' => 'https://github.com/rajnandan-usa',    'sort_order' => 41],
            ['group' => 'social', 'key' => 'instagram_url',  'type' => 'url', 'label' => 'Instagram',   'value' => '',    'sort_order' => 42],
            ['group' => 'social', 'key' => 'facebook_url',   'type' => 'url', 'label' => 'Facebook',    'value' => '',    'sort_order' => 43],
            ['group' => 'social', 'key' => 'twitter_url',    'type' => 'url', 'label' => 'Twitter / X', 'value' => '',    'sort_order' => 44],
            ['group' => 'social', 'key' => 'youtube_url',    'type' => 'url', 'label' => 'YouTube',     'value' => '',    'sort_order' => 45],

            // stats
            ['group' => 'stats', 'key' => 'years_experience',   'type' => 'integer', 'label' => 'Years Experience',    'value' => '5',    'sort_order' => 50],
            ['group' => 'stats', 'key' => 'projects_delivered', 'type' => 'integer', 'label' => 'Projects Delivered',  'value' => '18',   'sort_order' => 51],
            ['group' => 'stats', 'key' => 'happy_clients',      'type' => 'integer', 'label' => 'Happy Clients',       'value' => '15',   'sort_order' => 52],
            ['group' => 'stats', 'key' => 'industries_served',  'type' => 'integer', 'label' => 'Industries Served',   'value' => '7',    'sort_order' => 53],

            // seo
            ['group' => 'seo', 'key' => 'default_meta_title',       'type' => 'text',     'label' => 'Default Meta Title',            'value' => 'Plazmasoft, Web and Mobile App Development Studio',    'sort_order' => 60],
            ['group' => 'seo', 'key' => 'default_meta_description', 'type' => 'textarea', 'label' => 'Default Meta Description',      'value' => 'Founder led studio shipping production grade web apps, mobile apps, and AI integrations for startups and growing businesses.',    'sort_order' => 61],
            ['group' => 'seo', 'key' => 'default_og_image',         'type' => 'image',    'label' => 'Default OG Image (1200x630)',   'value' => '',    'sort_order' => 62],
            ['group' => 'seo', 'key' => 'google_analytics_id',      'type' => 'text',     'label' => 'Google Analytics 4 ID',         'value' => '',    'sort_order' => 63],
            ['group' => 'seo', 'key' => 'google_tag_manager_id',    'type' => 'text',     'label' => 'Google Tag Manager ID',         'value' => 'GTM-5968Z9LS',    'sort_order' => 64],
            ['group' => 'seo', 'key' => 'facebook_pixel_id',        'type' => 'text',     'label' => 'Facebook Pixel ID',             'value' => '',    'sort_order' => 65],

            // cta
            ['group' => 'cta', 'key' => 'hero_cta_primary_label',  'type' => 'text', 'label' => 'Hero Primary CTA Text',    'value' => 'Start Your Project',    'sort_order' => 70],
            ['group' => 'cta', 'key' => 'hero_cta_secondary_label','type' => 'text', 'label' => 'Hero Secondary CTA Text',  'value' => 'View Our Work',    'sort_order' => 71],
            ['group' => 'cta', 'key' => 'footer_cta_heading',      'type' => 'text', 'label' => 'Footer CTA Heading',       'value' => "Have an idea? Let's build it.",    'sort_order' => 72],
            ['group' => 'cta', 'key' => 'footer_cta_subtext',      'type' => 'text', 'label' => 'Footer CTA Subtext',       'value' => "Tell us what you're working on. We reply within one business day.",    'sort_order' => 73],
        ];

        $now = now();
        foreach ($settings as &$row) {
            $row['is_public'] = true;
            $row['helper'] = null;
            $row['created_at'] = $now;
            $row['updated_at'] = $now;
        }

        DB::table('settings')->upsert($settings, ['key'], ['value', 'type', 'group', 'label', 'sort_order', 'is_public', 'updated_at']);
    }
}
