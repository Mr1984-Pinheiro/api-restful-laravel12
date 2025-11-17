@extends('layouts.app')

@section('title', 'View Task')

@section('content')
<div class="card">
    <div class="mb-3" style="display: flex; justify-content: space-between; align-items: center;">
        <h2>Task Details</h2>
        <div style="display: flex; gap: 10px;">
            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>

    <div style="margin-top: 20px;">
        <div class="form-group">
            <label style="font-weight: 600; color: #374151;">Title</label>
            <p style="margin-top: 5px;">{{ $task->title }}</p>
        </div>

        <div class="form-group">
            <label style="font-weight: 600; color: #374151;">Description</label>
            <p style="margin-top: 5px;">{{ $task->description ?? 'No description provided' }}</p>
        </div>

        <div class="form-group">
            <label style="font-weight: 600; color: #374151;">Status</label>
            <div style="margin-top: 5px;">
                <span class="badge badge-{{ $task->status }}">
                    {{ ucfirst(str_replace('_', ' ', $task->status)) }}
                </span>
            </div>
        </div>

        <div class="form-group">
            <label style="font-weight: 600; color: #374151;">Created At</label>
            <p style="margin-top: 5px;">{{ $task->created_at->format('F d, Y H:i:s') }}</p>
        </div>

        <div class="form-group">
            <label style="font-weight: 600; color: #374151;">Updated At</label>
            <p style="margin-top: 5px;">{{ $task->updated_at->format('F d, Y H:i:s') }}</p>
        </div>

        <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="margin-top: 30px;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this task?')">Delete Task</button>
        </form>
    </div>
</div>
@endsection
