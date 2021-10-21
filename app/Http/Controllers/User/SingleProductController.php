<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ImageTemplate;
use App\Models\VideoTemplate;
use App\Models\WebTemplate;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function index()
    {
        $images = ImageTemplate::all();
        $videos = VideoTemplate::all();
        $webs = WebTemplate::all();
        return view('pages.users.single', compact('images', 'videos', 'webs'));
    }
}
