<!DOCTYPE html>
<html>
<head>
    <title>Task Management</title>
</head>
<body>
    <h1>Task Management System</h1>

    <a href="{{ route('tasks.create') }}">+ Add New Task</a>
    <br><br>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th>Task ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Assigned To</th>
                <th>Dept</th>
                <th>Category</th>
                <th>Priority</th>
                <th>Date Assigned</th>
                <th>Start Date</th>
                <th>Due Date</th>
                <th>Status</th>
                <th>Remarks</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->task_id }}</td>
                <td>{{ $task->task_title }}</td>
                <td>{{ $task->task_description ?? 'N/A' }}</td>
                <td>{{ $task->assigned_person }}</td>
                <td>{{ $task->department }}</td>
                <td>{{ $task->category }}</td>
                <td>{{ $task->priority_level }}</td>
                <td>{{ $task->date_assigned }}</td>
                <td>{{ $task->start_date }}</td>
                <td>{{ $task->due_date }}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->remarks ?? 'N/A' }}</td>
                <td>
                    <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete this task?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>