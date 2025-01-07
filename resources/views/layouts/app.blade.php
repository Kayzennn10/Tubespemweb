<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <nav class="bg-blue-600 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="{{ route('admin.dashboard') }}" class="text-xl font-semibold">Game Top-up Admin</a>
                <div class="items-center flex">
                    <a href="{{ route('admin.dashboard') }}" class="px-4">Dashboard</a>
                    <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button
                                                class="block px-4 w-full py-2 text-sm text-red-600"
                                                type="submit"><span class="flex justify-start">Logout</span></button>
                                        </form>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-1">
            @yield('content')
        </main>
    </div>
</body>
</html>