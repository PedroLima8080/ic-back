<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index() {
        return Company::all();
    }

    public function store(Request $request) {
        $company = new Company();
        $company->fill($request->all());
        $company->save();
        return $company;
    }

    public function update(Company $company, Request $request) {
        $company->fill($request->all());
        $company->save();
        return $company;
    }

    public function destroy(Company $company, Request $request) {
        $company->delete();
        return $company;
    }
}
