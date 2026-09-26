@extends('layouts.app')

@section('content')
    <h2>Your Tasks</h2>
    
   <a href="/tasks/create" class="btn btn-primary">+ Add New Task</a>

    @if($tasks->isEmpty())
        <p style="margin-top: 1rem;">No tasks yet. Create your first task!</p>
    @else
        @foreach($tasks as $task)
            <div class="card">
                <h3>{{ $task->task_name }}</h3>
                <p>{{ $task->description }}</p>
                <p>Due: {{ $task->due_date }}</p>
                <p>Status: {{ $task->status }}</p>
            </div>
        @endforeach
    @endif
@endsection