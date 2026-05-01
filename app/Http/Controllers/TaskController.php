<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255'
        ]);

        Task::create([
            'title' => $request->title
        ]);

        return ['message' => 'Task created'];
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255'
        ]);

        $task = Task::find($id);

        if (!$task) {
            return ['error' => 'Task not found'];
        }

        $task->update([
            'title' => $request->title
        ]);

        return ['message' => 'Task updated'];
    }

    public function destroy($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return ['error' => 'Task not found'];
        }

        $task->delete();

        return ['message' => 'Task deleted'];
    }
}

