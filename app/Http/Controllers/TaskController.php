<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Step;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Project $project, Step $step) {
        return Task::where('step_id', $step['id'])->get();
    }

    public function store(Project $project, Step $step, Request $request) {
        $task = new Task();
        $task->fill($request->all());
        $task->save();
        return $task;
    }

    public function update(Project $project, Step $step, Task $task, Request $request) {
        $task->fill($request->all());
        $task->save();
        return $task;
    }

    public function destroy(Project $project, Step $step, Task $task, Request $request) {
        $task->delete();
        return $task;
    }
}
