<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use DB;


class Applications extends Controller
{
    //
    public function index($job_id){
        $applications = DB::table('applications')->where('job_id', $job_id);

        return view('applications.index', compact('applications'));
    }

    public function view($application_id){
        $application = DB::table('applications')->where('job_id', $job_id);

        return view('applications.index', compact('application'));
    }
}
