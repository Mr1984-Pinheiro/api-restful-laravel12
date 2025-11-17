@extends('layouts.app')

@section('title', 'All Tasks')

@section('content')
<div class="card">
    <div class="mb-3" style="display: flex; justify-content: space-between; align-items: center;">
        <h2>All Tasks</h2>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create New Task</a>
    </div>

    @if($tasks->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>
                            <span class="badge badge-{{ $task->status }}">
                                {{ ucfirst(str_replace('_', ' ', $task->status)) }}
                            </span>
                        </td>
                        <td>{{ $task->created_at->format('M d, Y') }}</td>
                        <td>
                            <div class="actions">
                                <a href="{{ route('tasks.show', $task) }}" class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">View</a>
                                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning" style="padding: 6px 12px; font-size: 12px;">Edit</a>
                                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="padding: 6px 12px; font-size: 12px;" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p style="text-align: center; color: #6b7280; padding: 40px 0;">No tasks found. Create your first task!</p>
    @endif
</div>
@endsection
