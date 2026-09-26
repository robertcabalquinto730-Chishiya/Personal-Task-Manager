@extends('layouts.app')

@section('content')
<h2>Add New Task</h2>

<form action="{{ route('tasks.store') }}" method="POST" class="card">
    @csrf

    <div class="form-group">
        <label>Task Name:</label>
        <input type="text" name="task_name" required>
    </div>

    <div class="form-group">
        <label>Description:</label>
        <textarea name="description" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label>Status:</label>
        <select name="status" required>
            <option value="Pending">Pending</option>
            <option value="Completed">Completed</option>
        </select>
    </div>

    <div class="form-group">
        <label>Due Date:</label>
        <input type="date" name="due_date" required>
    </div>

    <button type="submit" class="btn btn-success">Save Task</button>
    <a href="{{ route('tasks.index') }}" class="btn">Cancel</a>
</form>

@endsection