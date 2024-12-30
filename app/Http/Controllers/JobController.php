<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Job;
use Illuminate\Http\RedirectResponse;

class JobController extends Controller
{
    public function index():View
    {
        $jobs = Job::all();
        return view('jobs.index')->with('jobs', $jobs);
    }

    public function create():View    
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        
        Job::create(['title' => $validatedData['title'], 'description' => $validatedData['description']]);
        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job):View
    {
       return view('jobs.show')->with('job', $job);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):string
    {
        return "Edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): string
    {
        return "Update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):string
    {
        return "Destroy";
    }
}
