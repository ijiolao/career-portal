<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateApplication extends Controller
{
    public function update(Request $request){
        $ids = $request->input('ids');
        JobListing::whereIn('id', $ids)->delete();
        return redirect()->route('job-listings.index')->with('success', 'Job listings deleted successfully.');
    }
}
