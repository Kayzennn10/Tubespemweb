<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Login</h2>

        <!-- Form Login -->
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="email" name="email" id="email" class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input type="password" name="password" id="password" class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="mb-6">
                <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 transition">Login</button>
            </div>
            <a class= "flex justify-center text-blue-500 underline my-3" href="{{route('guest.dashboard')}}">Kembali ke dashboard</a>

            <!-- Error Message -->
            @if(session('error'))
                <div class="text-red-500 text-xs mt-2">{{ session('error') }}</div>
            @endif
        </form>
    </div>

</body>
</html>