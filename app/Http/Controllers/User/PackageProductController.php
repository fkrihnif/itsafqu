<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageProductController extends Controller
{
    public function index()
    {
        return view('pages.users.paket');
    }
}
