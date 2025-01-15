@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-semibold mb-6">Top-Up Game</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('transaksi.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
        @csrf

        <!-- Pilih Game -->
        <div class="mb-4">
            <label for="game_id" class="block text-sm font-medium text-gray-700">Select Game</label>
            <select name="game_id" id="game_id" class="w-full mt-1 p-3 border rounded-lg">
                @foreach ($games as $game)
                    <option value="{{ $game->id }}">{{ $game->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Username In-Game -->
        <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-gray-700">In-Game Username</label>
            <input type="text" name="username" id="username" class="w-full mt-1 p-3 border rounded-lg" required>
        </div>

        <!-- Amount -->
        <div class="mb-4">
            <label for="amount" class="block text-sm font-medium text-gray-700">Amount (IDR)</label>
            <input type="number" name="amount" id="amount" class="w-full mt-1 p-3 border rounded-lg" min="10000" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Submit Top-Up
        </button>
    </form>
</div>
@endsection
