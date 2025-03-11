<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .registration-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .registration-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .registration-form input[type="text"],
        .registration-form input[type="email"],
        .registration-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .registration-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .registration-form input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <form class="registration-form" action="{{ route('registered') }}" method="POST">
        @csrf
        <h2>Register</h2>
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
        <span style="color:red">@error('name'){{ $message }} @enderror</span>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        <span style="color:red">@error('email'){{ $message }} @enderror</span>
        <input type="password" name="password" placeholder="Password">
        <span style="color:red">@error('password'){{ $message }} @enderror</span>
        <input type="password" name="password_confirmation" placeholder="Confirm Password">
        <span style="color:red">@error('password_confirmation'){{ $message }} @enderror</span>
        <a href="{{ route('login.login') }}" style="display: block; text-align: center; margin-top: 10px; color: #007bff;">Back to Login</a>
        <input type="submit" value="Register">
    </form>
</body>

</html>