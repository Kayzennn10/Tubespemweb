<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
class DashboardUserController extends Controller
{
    public function index()
    {
        // Mengambil daftar game untuk ditampilkan di dashboard
        $games = Game::with('currencies')->get();

        return view('user.dashboard', compact('games'));
    }
}
