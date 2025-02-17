<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Create Student</h1>
    <form action="{{ route('students.store') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="age">Age</label>
        <input type="text" name="age" id="age">
        <br>
        <label for="dob">DOB</label>
        <input type="date" name="dob" id="dob">
        <br>
        <label for="address">Address</label>
        <input type="text" name="address" id="address">
        <br>
        <label for="is_final_year">Is Final Year</label>
        <input type="checkbox" name="is_final_year" id="is_final_year">
        <br>
        <button type="submit">Submit</button>
    </form>
    <a href="{{ route('students.index') }}">Back</a>
</body>
</html>
