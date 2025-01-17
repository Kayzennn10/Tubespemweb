<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Login - Top Up All Games</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .login-card {
            background-color: rgba(255, 255, 255, 0.85);
            border-radius: 15px;
            padding: 30px;
            max-width: 400px;
            width: 100%;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 2;
        }

        .btn-login {
            background-color: #007bff;
            color: white;
            transition: 0.3s;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .btn-google {
            background-color: #ea4335;
            color: white;
            transition: 0.3s;
        }

        .btn-google:hover {
            background-color: #c62d23;
        }

        .divider {
            text-align: center;
            margin: 20px 0;
        }

        .divider::before,
        .divider::after {
            content: "";
            display: inline-block;
            width: 45%;
            height: 1px;
            background: #ddd;
            vertical-align: middle;
        }

        .divider span {
            padding: 0 10px;
            color: #888;
=======
    <title>Login - Game Portal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background: linear-gradient(135deg, #1f1c2c, #928dab);
            font-family: 'Poppins', sans-serif;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            font-size: 28px;
            text-align: center;
            margin-bottom: 20px;
            color: #ffcc00;
            text-shadow: 0 0 10px #ffcc00;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #d1d1d1;
        }
        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            font-size: 16px;
        }
        input:focus {
            outline: none;
            box-shadow: 0 0 8px #ffcc00;
        }
        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(90deg, #ffcc00, #ff9900);
            color: #000;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background: linear-gradient(90deg, #ff9900, #ffcc00);
        }
        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #ffcc00;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .error-message {
            background: rgba(255, 0, 0, 0.1);
            padding: 10px;
            border-radius: 5px;
            color: #ff4d4d;
            margin-top: 10px;
            text-align: center;
>>>>>>> 240b5a1064a946fadec0837b313c365e320f4739
        }
    </style>
</head>
<body>
<<<<<<< HEAD
    <!-- Video Background -->
    <video autoplay loop muted playsinline class="video-bg">
        <source src="{{ asset('assets/florin.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Login Form -->
    <div class="login-card">
        @if(session('success'))
            <div class="alert alert-success mb-3">
                {{ session('success') }}
            </div>
        @endif

        <h3 class="text-center mb-4">Login</h3>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-login w-100">Login</button>
        </form>

        <p class="text-center mt-3">
            Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
        </p>
    </div>

    @if ($errors->any())
        <p style="color: red;">{{ $errors->first() }}</p>
    @endif

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
=======

<div class="login-container">
    <h2>Login</h2>

    <!-- Form Login -->
    <form action="{{ route('login') }}" method="POST">
        @csrf

        <!-- Email -->
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
            @error('email')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
            @error('password')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit">Login</button>

        <!-- Back to Dashboard Link -->
        <a href="{{ route('guest.dashboard') }}">Back to Dashboard</a>

        <!-- Error Message -->
        @if(session('error'))
            <div class="error-message">{{ session('error') }}</div>
        @endif
    </form>
</div>

>>>>>>> 240b5a1064a946fadec0837b313c365e320f4739
</body>
</html>
