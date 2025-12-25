<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['title' => 'Web Development', 'description' => 'Membangun website kustom yang cepat, aman, dan responsif menggunakan teknologi terbaru.', 'icon' => 'heroicon-o-code-bracket'],
            ['title' => 'UI/UX Design', 'description' => 'Desain antarmuka yang modern dan pengalaman pengguna yang intuitif untuk aplikasi Anda.', 'icon' => 'heroicon-o-paint-brush'],
            ['title' => 'Digital Marketing', 'description' => 'Meningkatkan jangkauan bisnis Anda melalui strategi pemasaran digital yang efektif.', 'icon' => 'heroicon-o-megaphone'],
        ];

        foreach ($services as $service) {
            \App\Models\Service::create($service);
        }
    }
}
