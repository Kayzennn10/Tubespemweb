<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <!-- Wrapper Utama -->
    <div class="flex-grow">
        <!-- Navbar -->
        <nav class="bg-white shadow-md">
            <div class="container mx-auto px-6 py-4 flex justify-between items-center">
                <a href="#" class="text-xl font-bold text-blue-600">GameTopUp</a>
                <div>
                    <a href="{{route('login')}}" class="text-gray-600 hover:text-blue-600 mr-4">Login</a>
                    <a href="{{route('register')}}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Register</a>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <header class="bg-blue-600 text-white py-20">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold mb-4">Welcome to GameTopUp</h1>
                <p class="text-lg">Easily top up your favorite games with just a few clicks.</p>
            </div>
        </header>

        <!-- Game Cards -->
        <div class="container mx-auto px-6 py-10">
            <h2 class="text-2xl font-bold text-center mb-6">Available Games</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($games as $game)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <!-- Image Section -->
                    <img 
                        src="{{ $game->image_url }}" 
                        alt="{{ $game->name }}" 
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-bold mb-2">{{ $game->name }}</h3>
                        <p class="text-gray-600 mb-4">{{ $game->description }}</p>
                        <ul class="mb-4">
                            @foreach ($game->currencies as $currency)
                            <li class="text-sm text-gray-800">
                                <span class="font-semibold">{{ $currency->currency_name }}</span> - Rp{{ number_format($currency->price, 0, ',', '.') }}
                            </li>
                            @endforeach
                        </ul>
                        <a href="" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 block text-center">Top Up Now</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 GameTopUp. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>