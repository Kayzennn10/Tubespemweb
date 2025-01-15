<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Dashboard - Game Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #1f1c2c, #928dab);
            color: #fff;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar {
            background: rgba(0, 0, 0, 0.9);
            padding: 15px 0;
        }
        .navbar a {
            color: #ffcc00;
            font-weight: bold;
            transition: color 0.3s;
        }
        .navbar a:hover {
            color: #fff;
        }
        .hero {
            background: linear-gradient(135deg, #ff9900, #ffcc00);
            color: #000;
            padding: 60px 20px;
            text-align: center;
            border-bottom: 5px solid #ffcc00;
        }
        .game-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        .game-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .game-card h3 {
            font-size: 20px;
            color: #ffcc00;
            margin-bottom: 10px;
        }
        .game-card p {
            color: #d1d1d1;
        }
        .game-card a {
            display: block;
            text-align: center;
            padding: 10px 0;
            margin-top: 10px;
            background: linear-gradient(90deg, #ffcc00, #ff9900);
            color: #000;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s;
        }
        .game-card a:hover {
            background: linear-gradient(90deg, #ff9900, #ffcc00);
        }
        footer {
            background: rgba(0, 0, 0, 0.9);
            color: #d1d1d1;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Wrapper Utama -->
    <div class="flex-grow">
        <!-- Navbar -->
        <nav class="navbar">
            <div class="container mx-auto px-6 flex justify-between items-center">
                <a href="#" class="text-xl">GameTopUp</a>
                <div>
                    <a href="{{ route('login') }}" class="mr-4">Login</a>
                    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Register</a>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <header class="hero">
            <div class="container mx-auto">
                <h1 class="text-4xl font-bold mb-4">Welcome to GameTopUp</h1>
                <p class="text-lg">Easily top up your favorite games with just a few clicks.</p>
            </div>
        </header>

        <!-- Game Cards -->
        <div class="container mx-auto px-6 py-10">
            <h2 class="text-2xl font-bold text-center mb-6 text-yellow-400">Available Games</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($games as $game)
                <div class="game-card">
                    <!-- Image Section -->
                    <img 
                        src="{{ $game->image_url }}" 
                        alt="{{ $game->name }}">
                    <div class="p-6">
                        <h3>{{ $game->name }}</h3>
                        <p>{{ $game->description }}</p>
                        <ul>
                            @foreach ($game->currencies as $currency)
                            <li>
                                <span class="font-semibold">{{ $currency->currency_name }}</span> - Rp{{ number_format($currency->price, 0, ',', '.') }}
                            </li>
                            @endforeach
                        </ul>
                        <a href="">Top Up Now</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container mx-auto">
            <p>&copy; 2025 GameTopUp. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
