<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreateJobListing extends Controller
{
    public function index()
    {
        $listings = DB::table('job_listings')->join('users', 'users.id', '=', 'job_listings.user_id')->select('job_listings.*', 'users.name')->get();
        return view('job-listings.index', compact('listings'));
    }
    public function create()
    {
        return view('job-listings.create');
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
        $date = Carbon::createFromFormat('m/d/Y', $request->deadline);
        $formattedDate = $date->format('Y-m-d H:i:s');

        $listing = JobListing::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'requirements' => $request->requirements,
            'location' => $request->location,
            'salary' => $request->salary,
            'deadline' => $formattedDate,
            'schedule' => $request->schedule,
            'type' => $request->type,
        ]);

        //use events
        return redirect('listings')->with('status', 'Job listing has been added successfully');
    }

    public function edit($job_id)
    {
        $listing = JobListing::where('id', $job_id)->first();
        $date = Carbon::createFromFormat('Y-m-d', $listing->deadline);
        $formattedDate = $date->format('m/d/Y');
        return view('job-listings.edit', compact('listing'))->with('date', $formattedDate);
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
        $date = Carbon::createFromFormat('m/d/Y', $request->deadline);
        $formattedDate = $date->format('Y-m-d H:i:s');

        $listing = JobListing::where('id', $request->job_id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'requirements' => $request->requirements,
            'location' => $request->location,
            'salary' => $request->salary,
            'deadline' => $formattedDate,
            'schedule' => $request->schedule,
            'type' => $request->type,
        ]);

        return redirect('listings/')->with('success', 'Job listing updated successfully.');
    }

    public function delete(Request $request){
        $ids = $request->input('ids');
       JobListing::whereIn('id', $ids)->delete();
        return redirect()->route('listings')->with('success', 'Job listings deleted successfully.');
    }
}
