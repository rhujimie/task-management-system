<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
</head>
<body>
    <h1>Add New Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <fieldset>
            <legend>Task Information</legend>
            
            <label>Task ID:</label><br>
            <input type="text" name="task_id" required><br><br>

            <label>Task Title:</label><br>
            <input type="text" name="task_title" required><br><br>

            <label>Task Description:</label><br>
            <textarea name="task_description" rows="3"></textarea><br><br>

            <label>Assigned Person:</label><br>
            <input type="text" name="assigned_person" required><br><br>

            <label>Department:</label><br>
            <input type="text" name="department" required><br><br>

            <label>Category:</label><br>
            <select name="category" required>
                <option value="School">School</option>
                <option value="Work">Work</option>
                <option value="Personal">Personal</option>
            </select><br><br>

            <label>Priority Level:</label><br>
            <select name="priority_level" required>
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select><br><br>

            <label>Date Assigned (YYYY-MM-DD):</label><br>
            <input type="text" name="date_assigned" placeholder="e.g., 2026-11-12" required><br><br>

            <label>Start Date (YYYY-MM-DD):</label><br>
            <input type="text" name="start_date" placeholder="e.g., 2026-11-12" required><br><br>

            <label>Due Date (YYYY-MM-DD):</label><br>
            <input type="text" name="due_date" placeholder="e.g., 2026-11-12" required><br><br>

            <label>Status:</label><br>
            <select name="status" required>
                <option value="Pending">Pending</option>
                <option value="In Progress">In Progress</option>
                <option value="Completed">Completed</option>
            </select><br><br>

            <label>Remarks:</label><br>
            <textarea name="remarks" rows="2"></textarea><br><br>
        </fieldset>
        
        <br>
        <button type="submit">Save Task</button>
        <a href="{{ route('tasks.index') }}">Cancel</a>
    </form>
</body>
</html>