@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-semibold mb-6">Admin Dashboard</h1>
 

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Total Transactions Card -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-700">Total Transactions</h2>
            <p class="text-3xl font-bold text-blue-500">{{ $totalTransactions }}</p>
        </div>

        <!-- Total Games Card -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-700">Total Games</h2>
            <p class="text-3xl font-bold text-blue-500">{{ $totalGames }}</p>
        </div>

        <!-- Total Payment Methods Card -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-700">Total Payment Methods</h2>
            <p class="text-3xl font-bold text-blue-500">{{ $totalPaymentMethods }}</p>
        </div>
    </div>

    <div class="mt-8 bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-semibold text-gray-700 mb-4">Latest Transactions</h2>
        <ul class="space-y-4">
            @foreach ($latestTransactions as $transaction)
                <li class="flex justify-between items-center">
                    <span class="text-gray-700">Transaction #{{ $transaction->id }} ({{ $transaction->status }})</span>
                    <span class="text-sm text-gray-500">{{ $transaction->created_at->format('d M Y') }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection