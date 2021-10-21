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

    public function template()
    {
        return view('pages.landing.product');
        //asdsad
    }

    public function form2()
    {
        return view('pages.landing.form2');
        //asdsad
    }
    public function formTempate()
    {
        return view('pages.users.formTemplate');
        //asdsad
    }

    public function pembayaran()
    {
        return view('pages.landing.pembayaran');
        //asdsad
    }
    public function web()
    {
        return view('pages.landing.templateWeb.template1');
        //asdsad
    }
    public function gambar()
    {
        return view('pages.landing.templateGambar.template1');
        //asdsad
    }
    public function Register()
    {
        return view('pages.register');
        //asdsad
    }
    public function Dashboard()
    {
        return view('pages.admin.dashboard', ["title" => "Dashboard"]);
        //asdsad
    }
    public function DashboardU()
    {
        return view('pages.users.dashboard', ["title" => "Dashboard"]);
        //asdsad
    }
    public function Paket()
    {
        return view('pages.users.paket', ["title" => "Dashboard"]);
        //asdsad
    }
    public function Single()
    {
        return view('pages.users.single', ["title" => "Dashboard"]);
        //asdsad
    }
    public function Team()
    {
        return view('pages.users.team', ["title" => "Dashboard"]);
        //asdsad
    }
}
