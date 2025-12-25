<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolios = [
            ['title' => 'E-commerce Platform', 'image' => 'https://images.unsplash.com/photo-1557821552-17105176677c?w=800&q=80', 'category' => 'Web App', 'client_name' => 'Fashion Store', 'project_url' => '#'],
            ['title' => 'Corporate Website', 'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80', 'category' => 'Web Design', 'client_name' => 'Tech Corp', 'project_url' => '#'],
            ['title' => 'Mobile App Design', 'image' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&q=80', 'category' => 'Mobile', 'client_name' => 'Travel App', 'project_url' => '#'],
        ];

        foreach ($portfolios as $portfolio) {
            \App\Models\Portfolio::create($portfolio);
        }
    }
}
