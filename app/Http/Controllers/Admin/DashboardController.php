<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use App\Models\Game;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $totalTransactions = Transaction::count();
        $totalGames = Game::count();
        $totalPaymentMethods = PaymentMethod::count();
        $latestTransactions = Transaction::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalTransactions', 'totalGames', 'totalPaymentMethods', 'latestTransactions'
        ));
    }
}