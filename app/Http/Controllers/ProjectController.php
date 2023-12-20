<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index() {
        $query = Project::query();

        if(Auth::user()['company_id'] != null) {
            $query->where('company_id', Auth::user()['company_id']);
        }

        return $query->with('steps', 'steps.tasks')->get();
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
