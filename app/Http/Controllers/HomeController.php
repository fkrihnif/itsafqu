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
        $images = ImageTemplate::where('packages_id', '2')->get();
        $videos = VideoTemplate::where('packages_id', '2')->get();
        $webs = WebTemplate::where('packages_id', '2')->get();
        return view('pages.landing.landing', compact('images', 'videos', 'webs'));
    }
}
