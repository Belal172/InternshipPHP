<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <p>name= {{ $students->name }}</p><br>
        <p>email= {{ $students->email }}</p><br>
        <p>contact= {{ $students->phone }}</p><br>
        <p>address= {{ $students->address }}</p><br>
<a href="{{ route('student.index') }}">Go BAck</a>
    </form>
</body>
</html>