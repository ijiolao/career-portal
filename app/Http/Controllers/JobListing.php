<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobListing extends Controller
{
    public function index()
    {
        $jobListings = JobListing::all();
        return view('job-listings.index', compact('jobListings'));
    }
    public function store(Request $request){
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'requirements' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'salary' => ['required', 'string', 'max:255'],
            'deadline' => ['required', 'string', 'max:255'],
            'schedule' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
        ]);

        $listing = JobListing::create([
            'title' => $request->title,
            'description' => $request->description,
            'requirements' => $request->requirements,
            'location' => $request->location,
            'salary' => $request->salary,
            'deadline' => $request->deadline,
            'schedule' => $request->schedule,
            'type' => $request->type,
        ]);

        //use events
        return redirect('admin/dashboard');
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'requirements' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'salary' => ['required', 'string', 'max:255'],
            'deadline' => ['required', 'string', 'max:255'],
            'schedule' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
        ]);

        $listing = JobListing::update([
            'title' => $request->title,
            'description' => $request->description,
            'requirements' => $request->requirements,
            'location' => $request->location,
            'salary' => $request->salary,
            'deadline' => $request->deadline,
            'schedule' => $request->schedule,
            'type' => $request->type,
        ]);

        return redirect('admin/dashboard');
    }

    public function delete(Request $request){
        $ids = $request->input('ids');
        JobListing::whereIn('id', $ids)->delete();
        return redirect()->route('job-listings.index')->with('success', 'Job listings deleted successfully.');
    }
}
