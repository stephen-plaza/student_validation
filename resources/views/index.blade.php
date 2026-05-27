@extends('layouts.master')
@section('content')
    <h1>Students Validation</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label for="name" style="font-size: 20px;">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter student name" style="border-radius: 5px; text-transform: capitalize;" required>
        <br>
        <br>

        <label for="email" style="font-size: 20px;">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter student email" style="border-radius: 5px;" required>
        <br>
        <br>

        <label for="age" style="font-size: 20px;">Age:</label>
        <input type="number" id="age" name="age" placeholder="Enter student age" style="border-radius: 5px;" required>
        <br>
        <br>

        <button type="submit">Add Student</button>
    </form>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->age }} yrs old</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
