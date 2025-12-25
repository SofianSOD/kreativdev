<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Static data for now, can be moved to database later
        $team = [
            ['name' => 'Dr. Hendra', 'role' => 'CEO & Founder', 'image' => 'https://ui-avatars.com/api/?name=Hendra&background=0D8ABC&color=fff'],
            ['name' => 'Sarah Wijaya', 'role' => 'Creative Director', 'image' => 'https://ui-avatars.com/api/?name=Sarah+Wijaya&background=0D8ABC&color=fff'],
            ['name' => 'Budi Santoso', 'role' => 'Lead Developer', 'image' => 'https://ui-avatars.com/api/?name=Budi+Santoso&background=0D8ABC&color=fff'],
            ['name' => 'Maya Putri', 'role' => 'Digital Marketer', 'image' => 'https://ui-avatars.com/api/?name=Maya+Putri&background=0D8ABC&color=fff'],
        ];

        return view('about.index', compact('team'));
    }
}
