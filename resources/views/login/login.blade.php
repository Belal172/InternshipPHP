<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-container h1 {
            margin-bottom: 1.5rem;
            color: #333;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            margin: 0.5rem 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container button {
            background: #6a11cb;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .login-container button:hover {
            background: #2575fc;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="{{ route('loginmatch') }}" method="POST">
            @csrf
            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
            <span style="color:red">@error('email'){{ $message }} @enderror</span>
            <input type="password" name="password" placeholder="Password" value="" >
            <span style="color:red">@error('password'){{ $message }} @enderror</span>
            <a href="{{ route('register') }}" style="display: inline-block; margin-top: 1rem; color: #6a11cb; text-decoration: none;">Register</a>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>