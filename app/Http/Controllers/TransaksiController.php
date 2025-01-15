<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Game;
use Auth;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaction::where('user_id', Auth::id())->get();
        return view('transaksi.index', compact('transaksis'));
    }

    public function create()
    {
        $games = Game::all();
        return view('transaksi.create', compact('games'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'game_id' => 'required',
            'username' => 'required',
            'amount' => 'required|numeric|min:1',
        ]);

        Transaksi::create([
            'user_id' => Auth::id(),
            'game_id' => $request->game_id,
            'username' => $request->username,
            'amount' => $request->amount,
            'status' => 'Pending',
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Top-Up request submitted successfully!');
    }

    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }
}
