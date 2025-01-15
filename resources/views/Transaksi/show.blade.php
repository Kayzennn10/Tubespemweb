@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-semibold mb-6">Transaction Details</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <p><strong>Transaction ID:</strong> {{ $transaksi->id }}</p>
        <p><strong>Game:</strong> {{ $transaksi->game->name }}</p>
        <p><strong>Username:</strong> {{ $transaksi->username }}</p>
        <p><strong>Amount:</strong> Rp{{ number_format($transaksi->amount, 0, ',', '.') }}</p>
        <p><strong>Status:</strong> 
            <span class="px-2 py-1 rounded-lg text-sm {{ $transaksi->status == 'Completed' ? 'bg-green-100 text-green-600' : 'bg-yellow-100 text-yellow-600' }}">
                {{ $transaksi->status }}
            </span>
        </p>
        <p><strong>Created At:</strong> {{ $transaksi->created_at->format('d M Y H:i:s') }}</p>
    </div>

    <a href="{{ route('transaksi.index') }}" class="mt-6 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Back to Transactions
    </a>
</div>
@endsection
