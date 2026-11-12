<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'task_id' => 'required|string|max:255|unique:tasks,task_id',
            'task_title' => 'required|string|max:255',
            'task_description' => 'nullable|string',
            'assigned_person' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'priority_level' => 'required|string|in:Low,Medium,High',
            'date_assigned' => 'required|date',
            'start_date' => 'required|date',
            'due_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|string|in:Pending,In Progress,Completed',
            'remarks' => 'nullable|string',
        ]);

        Task::create($validated);

        return redirect()->route('tasks.index')->with('success', 'Task added successfully.');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'task_id' => 'required|string|max:255|unique:tasks,task_id,' . $task->id,
            'task_title' => 'required|string|max:255',
            'task_description' => 'nullable|string',
            'assigned_person' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'priority_level' => 'required|string|in:Low,Medium,High',
            'date_assigned' => 'required|date',
            'start_date' => 'required|date',
            'due_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|string|in:Pending,In Progress,Completed',
            'remarks' => 'nullable|string',
        ]);

        $task->update($validated);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}