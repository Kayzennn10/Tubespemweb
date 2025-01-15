<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Game Portal</title>
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
        .register-container {
            background: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
            width: 100%;
            max-width: 500px;
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
        input, select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            font-size: 16px;
        }
        input:focus, select:focus {
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
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2>Create Account</h2>

    <!-- Form Register -->
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <!-- Name -->
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name" required value="{{ old('name') }}">
            @error('name')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required value="{{ old('email') }}">
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

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-enter your password" required>
        </div>

        <!-- Phone -->
        <div>
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" placeholder="Enter your phone number" required value="{{ old('phone') }}">
            @error('phone')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <!-- Role -->
        <div>
            <label for="role">Role</label>
            <select name="role" id="role" required>
                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
            @error('role')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit">Register</button>

        <!-- Back to Dashboard Link -->
        <a href="{{ route('guest.dashboard') }}">Back to Dashboard</a>

        <!-- Error Message -->
        @if(session('error'))
            <div class="error-message">{{ session('error') }}</div>
        @endif
    </form>
</div>

</body>
</html>
