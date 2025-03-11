<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit student</title>
    <style>
        /* General styles for the form container */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
}

/* Styles for form labels */
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
}

/* Styles for form inputs */
input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Styles for the submit button */
button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}
    </style>
</head>
<body>
    <form action="{{ route('employee.update',$employees->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $employees->name }}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"value="{{ $employees->email }}" required><br><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone"value="{{ $employees->phone }}" required><br><br>

        <label for="address">city:</label>
        <input type="text" id="address" name="city"value="{{ $employees->city }}" required><br><br>
        

        <button type="submit">Submit</button>
    </form>
</body>
</html>