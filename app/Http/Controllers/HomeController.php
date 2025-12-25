<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Setting;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key');
        $services = Service::all();
        $portfolios = Portfolio::latest()->take(6)->get();
        $posts = Post::where('status', 'published')->latest()->take(3)->get();

        return view('index', compact('settings', 'services', 'portfolios', 'posts'));
    }
}
