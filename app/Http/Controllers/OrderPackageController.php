<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use App\Models\ImageTemplate;
use App\Models\User;
use App\Models\VideoTemplate;
use App\Models\WebTemplate;
use App\Models\Order;
use App\Models\Reception;
use Carbon\Carbon;  //cabon utk format tanggal bawaan laravel
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class OrderPackageController extends Controller
{
    public function testt()
    {
        return view('pages.landing.formPaket');
    }
}
