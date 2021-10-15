<?php

namespace App\Http\Controllers;

use App\Models\InvitationType;
use App\Models\Template;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $types = InvitationType::all();
        $products = Template::limit(4)->get();
        return view('pages.landing.landing', [
            'products' => $products,
            'types' => $types
        ]);
    }

    public function template()
    {
        return view('pages.landing.product');
        //asdsad
    }

    public function form1()
    {
        return view('pages.landing.form1');
        //asdsad
    }

    public function form2()
    {
        return view('pages.landing.form2');
        //asdsad
    }
    public function formTemplate()
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
    public function DashboardU()
    {
        return view('pages.users.dashboard', ["title" => "Dashboard"]);
        //asdsad
    }
    public function MyOrders()
    {
        return view('pages.users.myorders', ["title" => "Dashboard"]);
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
