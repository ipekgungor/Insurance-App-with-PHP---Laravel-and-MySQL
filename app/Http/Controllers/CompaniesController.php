<?php

namespace App\Http\Controllers;

use App\Models\Policy;

class CompaniesController extends Controller
{
    public function index()
    {
        $policies = Policy::all()->unique('company');
        return view('companies', compact('policies'));
    }

    public function show($company)
    {
        $policies = Policy::where('company', $company)->get();
        return view('company-list', compact('policies'));
    }
}
