<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\JobListing;

class SearchListings extends Controller
{
    public function search(Request $request)
        {
    $query = $request->input('query');
    $results = JobListing::search($query)->paginate(10);

    return view('job-listings.search', compact('results', 'query'));
        }   
}
