<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MissionPerPeriod;
use App\Models\MissionPerPeriodRegister;
use App\Models\Project;
use App\Models\Step;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        /** @var User */
        $user = Auth::user();
        $missionsInPeriod = MissionPerPeriod::where('company_id', $user['company_id'])
        ->where('start_date', '<=', Carbon::now()->toDateString())
        ->where('end_date', '>=', Carbon::now()->toDateString())->get();

        $missionsInPeriodIds = array_map(function($mission) { return $mission['id']; }, $missionsInPeriod->toArray());
        if(count($missionsInPeriod) > 0) {
            $missionRegisters = MissionPerPeriodRegister::whereIn('mission_id', $missionsInPeriodIds)
                ->where('user_id', $user['id'])->get();

            if(count($missionsInPeriod) !== count($missionRegisters)) {
                $missionRegistersMissionsIds = array_map(function($missionRegister) { return $missionRegister['mission_id']; }, $missionRegisters->toArray());

                $missionsInPeriodsIdsNotRegistered = array_diff($missionsInPeriodIds, $missionRegistersMissionsIds);
                foreach ($missionsInPeriodsIdsNotRegistered as $missionInPeriodIdNotRegistered) {
                    MissionPerPeriodRegister::create([
                        'mission_id' => $missionInPeriodIdNotRegistered,
                        'user_id' => $user['id'],
                        'delivered_quantity' => 0
                    ]);
                }
            }

            $missionRegisters = MissionPerPeriodRegister::whereIn('mission_id', $missionsInPeriodIds)
                ->where('user_id', $user['id'])->with('mission')->get();

            foreach ($missionRegisters as $missionRegister) {
                $deliveredQuantity = $missionRegister['delivered_quantity']+1;
                $missionRegister->update([
                    'delivered_quantity' => $deliveredQuantity
                ]);

                if($deliveredQuantity == $missionRegister['mission']['delivery_quantity'])
                    $user->update(['xp' => $user['xp']+$missionRegister['mission']['reward']]);
            }
        }

        return $task;
    }

    public function destroy(Project $project, Step $step, Task $task, Request $request) {
        $task->delete();
        return $task;
    }
}
