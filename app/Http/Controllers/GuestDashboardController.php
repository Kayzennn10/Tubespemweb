<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GuestDashboardController extends Controller
{
    public function index()
    {
        // Mengambil daftar game untuk ditampilkan di dashboard
        $games = Game::with('currencies')->get();

        return view('guest.dashboard', compact('games'));
    }
}