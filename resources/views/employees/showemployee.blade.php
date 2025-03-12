<style>
        .card {
                max-width: 400px;
                margin: 20px auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                background-color: #fff;
                text-align: center;
        }

        .card img {
                max-width: 100%;
                border-radius: 50%;
                margin-bottom: 20px;

        }

        .card p {
                margin: 10px 0;
                font-size: 16px;
                color: #333;
        }

        .card a {
                display: inline-block;
                margin-top: 20px;
                padding: 10px 20px;
                background-color: #007bff;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
        }

        .card a:hover {
                background-color: #0056b3;
        }
</style>
<div class="card">
        <!-- Ensure the image path is correct and the file exists -->
        <img src="{{ asset('storage/' . $employees->photo) }}" alt="Employee Photo">
        <p>Name: {{ $employees->name }}</p>
        <p>Email: {{ $employees->email }}</p>
        <p>Contact: {{ $employees->phone }}</p>
        <p>Gender: {{ $employees->gender }}</p>
        <p>City: {{ $employees->city }}</p>
        <p>Skills:
        <ul>
                @foreach(json_decode($employees->skills) as $skill)
                                        <li>{{ $skill }}</li>
                                @endforeach
                           
        </ul>
        </p>
        <a href="{{ route('employee.index') }}">Go Back</a>
</div>