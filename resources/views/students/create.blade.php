<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>
    <h1>Student Form</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label>Student ID:</label><br>
        <input type="text" name="student_id" value="{{ old('student_id') }}" required>
        <br><br>

        <label>Student Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}" required>
        <br><br>

        <label>Address:</label><br>
        <input type="text" name="address" value="{{ old('address') }}" required>
        <br><br>

        <label>Contact No:</label><br>
        <input type="text" name="contact_no" value="{{ old('contact_no') }}" required>
        <br><br>

        <button type="submit">Save Student</button>
        <a href="{{ route('students.index') }}">Cancel</a>
    </form>
</body>
</html>