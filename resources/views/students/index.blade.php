<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <h1>Student List</h1>

    <!-- Link para pumunta sa Create Form -->
    <a href="{{ route('students.create') }}" style="font-size: 18px; font-weight: bold;">+ Add New Student</a>
    <br><br>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact No</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->student_id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->contact_no }}</td>
                <td>
                    <!-- Edit Button -->
                    <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                    
                    <!-- Delete Button (Nasa loob ng form para gumana ang DELETE method) -->
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Sigurado ka bang gusto mong i-delete ito?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="color: red; cursor: pointer; border: none; background: none;">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>