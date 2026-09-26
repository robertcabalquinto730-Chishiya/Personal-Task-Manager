<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;



class TaskController extends Controller
{
    // 1. Show ALL tasks
    public function index(): View
    {
        $tasks = Task::latest()->get(); // Get all tasks, newest first
        return view('tasks.index', compact('tasks'));
    }

    // 2. Show CREATE form
    public function create(): View
    {
        return view('tasks.create');
    }

    // 3. SAVE new task to DB
  public function store(Request $request)
{
    $validated = $request->validate([
        'task_name'   => 'required|string|max:255',
        'description' => 'nullable|string',
        'status'      => 'required|in:Pending,Completed',
        'due_date'    => 'required|date',
    ]);

    Task::create($validated);

    return redirect()->route('tasks.index');
}
    // 4. Show EDIT form
    public function edit(Task $task): View
    {
        return view('tasks.edit', compact('task'));
    }

    // 5. UPDATE existing task
    public function update(Request $request, Task $task): RedirectResponse
    {
        $validated = $request->validate([
            'task_name'   => 'required|max:255',
            'description' => 'required',
            'due_date'    => 'required|date',
            'status'      => 'required|in:Pending,Completed',
        ]);

        $task->update($validated);

        return redirect()->route('tasks.index')->with('success', 'Task updated!');
    }

    // 6. DELETE task
    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted!');
    }

    // 7. TOGGLE status (Pending ↔ Completed)
    public function toggleStatus(Task $task): RedirectResponse
    {
        $task->update([
            'status' => $task->status === 'Pending' ? 'Completed' : 'Pending'
        ]);

        return back()->with('success', 'Status updated!');
    }
}