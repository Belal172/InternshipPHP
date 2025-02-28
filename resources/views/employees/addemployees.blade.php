<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add employee</title>
    <style>
        /* General form styling */
form {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
    font-family: Arial, sans-serif;
}

/* Input fields styling */
.input-form {
    margin-bottom: 15px;
}

.input-form label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.input-form input[type="text"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Checkbox and radio button styling */
.check, .gender {
    margin-bottom: 15px;
}

.check label, .gender label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

.check input[type="checkbox"], .gender input[type="radio"] {
    margin-right: 10px;
}

.check label, .gender label {
    margin-right: 15px;
    font-weight: normal;
}

/* Dropdown styling */
.dropdown {
    margin-bottom: 15px;
}

.dropdown label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

.dropdown select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Range input styling */
input[type="range"] {
    width: 100%;
    margin-bottom: 15px;
}

/* Button styling */
button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button[type="submit"]:hover {
    background-color: #45a049;
}

/* Responsive design */
@media (max-width: 600px) {
    form {
        padding: 15px;
    }

    .input-form input[type="text"], .dropdown select {
        padding: 6px;
    }

    button[type="submit"] {
        width: 100%;
        padding: 12px;
    }
}
    </style>
</head>
<body>
    <form action="{{ route('employee.save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-form">
            <label for="name">Enter NAme </label>
            <input type="text" name="name">
            <span style="color:red">@error('name'){{ $message }} @enderror</span>
        </div>
        <div class="input-form">
            <label for="name">Enter Email </label>
            <input type="text" name="email">
            <span style="color:red">@error('email'){{ $message }} @enderror</span>

        </div>
        <div class="input-form">
            <label for="name">Enter Phone no </label>
            <input type="text" name="phone">
            <span style="color:red">@error('phone'){{ $message }} @enderror</span>

        </div>

        <div class="check">
            <label for="skill">Add Skill Expertise</label><br>
            <input type="checkbox" name="skills[]" value="php" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skills[]" value="java" id="java">
            <label for="java">Java</label>
            <input type="checkbox" name="skills[]" value="html" id="html">
            <label for="html">HTML</label>
            <input type="checkbox" name="skills[]" value="js" id="js">
            <label for="js">JS</label>
            <span style="color:red">@error('skills'){{ $message }} @enderror</span>

        </div>

        <div class="gender">
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">MAle</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label>
            <input type="radio" name="gender" value="oyhers" id="others">
            <label for="others">Others</label>
            <span style="color:red">@error('gender'){{ $message }} @enderror</span>

        </div>
        
        <div class="dropdown">
            <label for="city"> Enter city</label>
            <select name="city">
                <option value="">Select city</option>
                <option value="Dhangadhi">Dhn</option>
                <option value="Kathmandu">Ktm</option>
                <option value="Dipayal">Dipayal</option>
            </select>
            <span style="color:red">@error('city'){{ $message }} @enderror</span>

        </div>
        <div class="input-form"></div>
            <label for="resume">Upload Photo</label>
            <input type="file" name="photo">
            <span style="color:red">@error('photo'){{ $message }} @enderror</span>
        </div>
        

        <button type="submit">Save </button>

    </form>
</body>
</html>