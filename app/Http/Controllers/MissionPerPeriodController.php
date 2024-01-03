<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\MissionPerPeriod;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MissionPerPeriodController extends Controller
{
    public function inPeriod(Company $company) {
        $query = MissionPerPeriod::query();

        $query->where('company_id', $company['id']);
        $query->where('start_date', '<=', Carbon::now()->toDateString());
        $query->where('end_date', '>=', Carbon::now()->toDateString());

        return $query->get();
    }

    public function index(Company $company) {
        return MissionPerPeriod::where('company_id', $company['id'])->get();
    }

    public function store(Company $company, Request $request) {
        $missionPerPeriod = new MissionPerPeriod();
        $missionPerPeriod->fill($request->all());
        $missionPerPeriod->save();
        return $missionPerPeriod;
    }

    public function update(Company $company, MissionPerPeriod $mission, Request $request) {
        $mission->fill($request->all());
        $mission->save();
        return $mission;
    }

    public function destroy(Company $company, MissionPerPeriod $mission, Request $request) {
        $mission->delete();
        return $mission;
    }
}
