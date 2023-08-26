<?php

namespace App\Http\Controllers\Frontend;

use App\Models\JobListing;
use Illuminate\Http\Request;

class ViewListings extends Controller
{
    public function index()
    {
        $jobListings = JobListing::all();
        return view('frontend.job-listings.index', compact('jobListings'));
    }
}
