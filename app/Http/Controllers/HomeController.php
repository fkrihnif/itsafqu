<?php

namespace App\Http\Controllers;

use App\Models\ImageTemplate;
use App\Models\VideoTemplate;
use App\Models\WebTemplate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $images = ImageTemplate::where('is_recommended', 'YES')->get();
        $videos = VideoTemplate::where('is_recommended', 'YES')->get();
        $webs = WebTemplate::where('is_recommended', 'YES')->get();
        return view('pages.landing.landing', compact('images', 'videos', 'webs'));
    }
}
