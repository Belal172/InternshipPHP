<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eloquent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-7">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>Contact </th>
                            <th>Gender</th>
                            <th>City</th>
                            <td>Skills</td>
                            <th >Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->gender }}</td>
                            <td>{{ $employee->city }}</td>
                           <td>{{ $employee->skills }}</td>
                           <td><a href="{{ route('employee.view',$employee->id) }}" class="btn btn-success">View</a></td>
                            <td><a href="{{ route('employee.edit',$employee->id) }}" class="btn btn-primary">Edit</a></td>
                            <td><form action="{{ route('employee.destroy',$employee->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form></td>

                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('employee.create') }}" class="btn btn-primary">Add Employee</a>

            </div>
        </div>
    </div>
</body>

</html>