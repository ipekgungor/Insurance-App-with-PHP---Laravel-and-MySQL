<?php

namespace App\Http\Controllers;

use App\Models\Policy;

class PolicyTypesController extends Controller
{
    public function index()
    {
        $policies = Policy::all()->unique('name');
        return view('policy-types', compact('policies'));
    }

    public function show($type)
    {
        $policies = Policy::where('name', $type)->get();
        return view('policy-list', compact('policies'));
    }
}
