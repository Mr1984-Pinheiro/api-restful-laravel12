<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskApiController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();
        return response()->json([
            'success' => true,
            'data' => $tasks
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'status' => 'required|in:pending,in_progress,completed',
        ]);

        $task = Task::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Task created successfully!',
            'data' => $task
        ], 201);
    }

    public function show(Task $task)
    {
        return response()->json([
            'success' => true,
            'data' => $task
        ]);
    }

    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'status' => 'required|in:pending,in_progress,completed',
        ]);

        $task->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Task updated successfully!',
            'data' => $task
        ]);
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json([
            'success' => true,
            'message' => 'Task deleted successfully!'
        ]);
    }
}
