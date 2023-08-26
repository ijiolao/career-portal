<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;


class SubmitApplication extends Controller
{
    public function index(Request $Request){
        $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'phone_number' => ['required'],
            'message' => ['required'],
        ]);

        $response = Application::create([
            'job_id' => $job_id,
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'phone_number' => $request['phone_number'],
            'message' => $request['message'],
        ]);

        return back()->with('Status:', 'Job Application has been submitted successfully, we will shortly get in touch with you.');
    }
}
