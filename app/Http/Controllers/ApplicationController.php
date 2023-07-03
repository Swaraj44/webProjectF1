<?php

namespace App\Http\Controllers;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function create()
    {
        return view('admit_app');
    }

    public function store(Request $request)
    {
        $application = Application::create($request->all());

        return redirect()->route('applications.show', $application->id);
    }

    public function show($id)
    {
        $application = Application::findOrFail($id);

        return view('show admit_app', compact('application'));
    }
}

