<?php

namespace App\Http\Controllers;

use App\Models\Policy;

class PoliciesController extends Controller
{
    public function index()
    {
        $policies = Policy::all();
        return view('policies', compact('policies'));
    }

    public function show($id)
    {
        $policy = Policy::findOrFail($id);
        return view('policy-detail', compact('policy'));
    }
}
