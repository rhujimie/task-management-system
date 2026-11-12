<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <fieldset>
            <legend>Task Information</legend>

            <label>Task ID:</label><br>
            <input type="text" name="task_id" value="{{ $task->task_id }}" required><br><br>

            <label>Task Title:</label><br>
            <input type="text" name="task_title" value="{{ $task->task_title }}" required><br><br>

            <label>Task Description:</label><br>
            <textarea name="task_description" rows="3">{{ $task->task_description }}</textarea><br><br>

            <label>Assigned Person:</label><br>
            <input type="text" name="assigned_person" value="{{ $task->assigned_person }}" required><br><br>

            <label>Department:</label><br>
            <input type="text" name="department" value="{{ $task->department }}" required><br><br>

            <label>Category:</label><br>
            <select name="category" required>
                <option value="School" {{ $task->category == 'School' ? 'selected' : '' }}>School</option>
                <option value="Work" {{ $task->category == 'Work' ? 'selected' : '' }}>Work</option>
                <option value="Personal" {{ $task->category == 'Personal' ? 'selected' : '' }}>Personal</option>
            </select><br><br>

            <label>Priority Level:</label><br>
            <select name="priority_level" required>
                <option value="Low" {{ $task->priority_level == 'Low' ? 'selected' : '' }}>Low</option>
                <option value="Medium" {{ $task->priority_level == 'Medium' ? 'selected' : '' }}>Medium</option>
                <option value="High" {{ $task->priority_level == 'High' ? 'selected' : '' }}>High</option>
            </select><br><br>

            <label>Date Assigned (YYYY-MM-DD):</label><br>
            <input type="text" name="date_assigned" value="{{ $task->date_assigned }}" placeholder="e.g., 2026-11-12" required><br><br>

            <label>Start Date (YYYY-MM-DD):</label><br>
            <input type="text" name="start_date" value="{{ $task->start_date }}" placeholder="e.g., 2026-11-12" required><br><br>

            <label>Due Date (YYYY-MM-DD):</label><br>
            <input type="text" name="due_date" value="{{ $task->due_date }}" placeholder="e.g., 2026-11-12" required><br><br>

            <label>Status:</label><br>
            <select name="status" required>
                <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="In Progress" {{ $task->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
            </select><br><br>

            <label>Remarks:</label><br>
            <textarea name="remarks" rows="2">{{ $task->remarks }}</textarea><br><br>
        </fieldset>
        
        <br>
        <button type="submit">Update Task</button>
        <a href="{{ route('tasks.index') }}">Cancel</a>
    </form>
</body>
</html>