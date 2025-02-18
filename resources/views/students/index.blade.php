<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
</head>
<body>
    <h1>Student List</h1>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>dob</th>
            <th>address</th>
            <th>is final year</th>
            <th>Action</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td><a href="{{ route('students.show', $student->id) }}">{{ $student->name }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->dob }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->is_final_year ? 'yes' : 'no' }}</td>
                <td>
                    <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                    {{--<a href="{{ route('student.delete', $student->id) }}">Delete</a>--}}
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('students.create') }}">Create</a>
</body>
</html>
