@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-semibold mb-6">My Transactions</h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full bg-white">
            <thead>
                <tr class="bg-gray-100 border-b">
                    <th class="py-2 px-4 text-left text-gray-600 font-medium">#</th>
                    <th class="py-2 px-4 text-left text-gray-600 font-medium">Game</th>
                    <th class="py-2 px-4 text-left text-gray-600 font-medium">Username</th>
                    <th class="py-2 px-4 text-left text-gray-600 font-medium">Amount</th>
                    <th class="py-2 px-4 text-left text-gray-600 font-medium">Status</th>
                    <th class="py-2 px-4 text-left text-gray-600 font-medium">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksis as $transaksi)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-2 px-4">{{ $loop->iteration }}</td>
                    <td class="py-2 px-4">{{ $transaksi->game->name }}</td>
                    <td class="py-2 px-4">{{ $transaksi->username }}</td>
                    <td class="py-2 px-4">Rp{{ number_format($transaksi->amount, 0, ',', '.') }}</td>
                    <td class="py-2 px-4">
                        <span class="px-2 py-1 rounded-lg text-sm {{ $transaksi->status == 'Completed' ? 'bg-green-100 text-green-600' : 'bg-yellow-100 text-yellow-600' }}">
                            {{ $transaksi->status }}
                        </span>
                    </td>
                    <td class="py-2 px-4">
                        <a href="{{ route('transaksi.show', $transaksi->id) }}" class="text-blue-600 hover:underline">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ route('transaksi.create') }}" class="mt-6 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        + New Top-Up
    </a>
</div>
@endsection
