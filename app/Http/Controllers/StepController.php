<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Step;
use Illuminate\Http\Request;

class StepController extends Controller
{
    public function index(Project $project) {
        return Step::where('project_id', $project['id'])->get();
    }

    public function store(Project $project, Request $request) {
        $step = new Step();
        $step->fill($request->all());
        $step->save();
        return $step;
    }

    public function update(Project $project, Step $step, Request $request) {
        $step->fill($request->all());
        $step->save();
        return $step;
    }

    public function destroy(Project $project, Step $step, Request $request) {
        $step->delete();
        return $step;
    }
}
