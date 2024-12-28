<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
class JobController extends Controller
{
    public function index():View
    {
        $jobs = [
            'Web Developer',
            "Database Admin",
            "Software Engineer",
            "Systems Analyst"
        ];

        return view('jobs.index', compact('jobs'));
    }

    public function create():View    
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): string
    {
        return 'Store';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
       return view('jobs.show', compact($id));
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
