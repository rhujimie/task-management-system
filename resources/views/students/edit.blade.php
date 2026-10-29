<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student Form</h1>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Student ID:</label><br>
        <input type="text" name="student_id" value="{{ old('student_id', $student->student_id) }}" required>
        <br><br>

        <label>Student Name:</label><br>
        <input type="text" name="name" value="{{ old('name', $student->name) }}" required>
        <br><br>

        <label>Address:</label><br>
        <input type="text" name="address" value="{{ old('address', $student->address) }}" required>
        <br><br>

        <label>Contact No:</label><br>
        <input type="text" name="contact_no" value="{{ old('contact_no', $student->contact_no) }}" required>
        <br><br>

        <button type="submit">Update Student</button>
        <a href="{{ route('students.index') }}">Cancel</a>
    </form>
</body>
</html>