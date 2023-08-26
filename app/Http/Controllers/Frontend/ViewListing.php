<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class ViewListing extends Controller
{
    public function index()
    {
        $jobListing = JobListing::where('id', $id);
        return view('frontend.job-listings.job-listing', compact('jobListing'));
    }
}
