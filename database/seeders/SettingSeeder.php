<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'hero_title', 'value' => 'Website Profesional untuk Citra dan Performa Bisnis Maksimal', 'type' => 'text'],
            ['key' => 'hero_subtitle', 'value' => 'Kreatif Dev membantu Anda membangun kehadiran digital yang kuat dengan desain modern dan teknologi terkini.', 'type' => 'textarea'],
            ['key' => 'hero_cta_text', 'value' => 'Konsultasi Gratis Sekarang', 'type' => 'text'],
            ['key' => 'hero_cta_url', 'value' => 'https://wa.me/6281234567890', 'type' => 'text'],
            ['key' => 'hero_background_image', 'value' => 'https://images.unsplash.com/photo-1497215728101-856f4ea42174?w=1600&q=80', 'type' => 'image'],
            ['key' => 'contact_whatsapp', 'value' => '6281234567890', 'type' => 'text'],
            ['key' => 'contact_email', 'value' => 'hello@kreatifdev.com', 'type' => 'text'],
            ['key' => 'site_name', 'value' => 'Kreatif Dev', 'type' => 'text'],
            ['key' => 'site_description', 'value' => 'Solusi Pembuatan Website & Digital Marketing Profesional', 'type' => 'textarea'],
        ];

        foreach ($settings as $setting) {
            \App\Models\Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
