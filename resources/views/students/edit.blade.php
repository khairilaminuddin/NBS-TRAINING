<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit student</title>
</head>
<body>
    <form action="{{ route('students.update', $student->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $student->name }}">
        <br>
        <label for="age">Age</label>
        <input type="text" name="age" value="{{ $student->age }}">
        <br>
        <label for="dob">dob</label>
        <input type="text" name="dob" value="{{ $student->dob }}">
        <br>
        <label for="address">address</label>
        <input type="text" name="address" value="{{ $student->address }}">
        <br>
        <input type="hidden" name="is_final_year" value="0">
        <label for="is_final_year">Is Final Year</label>
        <input type="checkbox" id="is_final_year" name="is_final_year" value="1"
        {{ $student->is_final_year ? 'checked' : '' }}>
        <br>
        <button type="submit">Update</button>
    </form>

    <a href="{{ route('students.index') }}">Back</a>
</body>
</html>
