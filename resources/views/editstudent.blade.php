<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit student</title>
</head>
<body>
    <form action="{{ route('student.update',$students->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $students->name }}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"value="{{ $students->email }}" required><br><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone"value="{{ $students->phone }}" required><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address"value="{{ $students->address }}" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>