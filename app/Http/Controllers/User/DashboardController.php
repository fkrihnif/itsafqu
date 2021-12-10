<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $order = Order::where('users_id', Auth::user()->id)->count();

        return view('pages.users.dashboard', compact('order'));
    }
}
