<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use App\Models\Kategori;
use App\Models\Order;
use App\Models\Produk;

class DashboardController extends Controller
{
    public function index()
    {
        $username = Auth::user()->name;
        $kategoris = Kategori::all();
        return view('dashboard-user', compact('username', 'kategoris'));
    }

    public function riwayat()
    {
        $username = Auth::user()->name;
        $orders = Order::where('user_id', Auth::id())
            ->with(['produk', 'payment'])
            ->get();
    
        return view('riwayat', compact('username', 'orders'));
    }
    
=======

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    public function userDashboard()
    {
        return view('user.dashboard');
    }
>>>>>>> 240b5a1064a946fadec0837b313c365e320f4739
}
