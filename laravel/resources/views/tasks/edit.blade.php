@extends('layouts.app')

@section('content')
    <h2>Edit Task</h2>

    <form action="{{ route('tasks.update', $task) }}" method="POST" class="card">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Task Name:</label>
            <input type="text" name="task_name" value="{{ $task->task_name }}" required>
        </div>

        <div class="form-group">
            <label>Description:</label>
            <textarea name="description" rows="3">{{ $task->description }}</textarea>
        </div>

        <div class="form-group">
            <label>Status:</label>
            <select name="status" required>
                <option value="Pending" @selected($task->status == 'Pending')>Pending</option>
                <option value="Completed" @selected($task->status == 'Completed')>Completed</option>
            </select>
        </div>

        <div class="form-group">
            <label>Due Date:</label>
            <input type="date" name="due_date" value="{{ $task->due_date }}" required>
        </div>

        <button type="submit" class="btn btn-warning">Update Task</button>
        <a href="{{ route('tasks.index') }}" class="btn">Cancel</a>
    </form>
@endsection