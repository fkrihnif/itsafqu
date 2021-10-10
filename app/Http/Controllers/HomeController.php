<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.landing.landing');
        //asdsad
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
    public function Login()
    {
        return view('pages.login');
        //asdsad
    }
    public function Register()
    {
        return view('pages.register');
        //asdsad
    }
    public function Dashboard()
    {
        return view('pages.users.dashboard', ["title" => "Dashboard"]);
        //asdsad
    }
}
