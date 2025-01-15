@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-4xl font-bold mb-8 text-yellow-500">Admin Dashboard</h1>

    <!-- Cards Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Total Transactions Card -->
        <div class="bg-gradient-to-br from-gray-800 to-gray-900 text-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-semibold">Total Transactions</h2>
            <p class="text-4xl font-bold mt-2 text-yellow-400">{{ $totalTransactions }}</p>
        </div>

        <!-- Total Games Card -->
        <div class="bg-gradient-to-br from-gray-800 to-gray-900 text-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-semibold">Total Games</h2>
            <p class="text-4xl font-bold mt-2 text-yellow-400">{{ $totalGames }}</p>
        </div>

        <!-- Total Payment Methods Card -->
        <div class="bg-gradient-to-br from-gray-800 to-gray-900 text-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-semibold">Total Payment Methods</h2>
            <p class="text-4xl font-bold mt-2 text-yellow-400">{{ $totalPaymentMethods }}</p>
        </div>
    </div>

    <!-- Latest Transactions Section -->
    <div class="mt-12 bg-gradient-to-br from-gray-900 to-gray-800 text-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-6 text-yellow-500">Latest Transactions</h2>
        <ul class="space-y-4">
            @foreach ($latestTransactions as $transaction)
                <li class="flex justify-between items-center border-b border-gray-700 pb-4">
                    <span class="text-lg">Transaction #{{ $transaction->id }} <span class="text-sm text-gray-400">({{ $transaction->status }})</span></span>
                    <span class="text-sm text-gray-500">{{ $transaction->created_at->format('d M Y') }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
