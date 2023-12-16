<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        return Project::all();
    }

    public function store(Request $request) {
        $project = new Project();
        $project->fill($request->all());
        $project->save();
        return $project;
    }

    public function update(Project $project, Request $request) {
        $project->fill($request->all());
        $project->save();
        return $project;
    }

    public function destroy(Project $project, Request $request) {
        $project->delete();
        return $project;
    }
}
