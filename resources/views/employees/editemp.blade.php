<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit student</title>
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