<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student detail</title>
</head>
<body>
    <h1>{{ $student->name }}</h1>
    <br>
    <p>Name: {{ $student->breed }}</p>
    <p>Age: {{ $student->age }}</p>
    <p>DOB: {{ $student->dob }}</p>
    <p>Address: {{ $student->address }}</p>
    <p>Is_final_year: {{ $student->Is_final_year }}</p>
    <a href="{{ route('students.index') }}">Back to students list</a>
</body>
</html>
