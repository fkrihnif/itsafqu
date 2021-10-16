<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImageTemplate;
use App\Models\VideoTemplate;
use App\Models\WebTemplate;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $webs = WebTemplate::all()->count();
        $videos = VideoTemplate::all()->count();
        $images = ImageTemplate::all()->count();

        $total = $webs + $videos + $images;

        return view('pages.admin.dashboard', compact('total'));
    }
}
