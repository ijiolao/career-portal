<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class Application extends Component
{
    public $fist_name;
    public $last_name;
    public $email;
    public $phone_number;
    public $message;

    protected $rules = [
        'first_name' => ['required'],
        'last_name' => ['required'],
        'email' => ['required', 'email'],
        'phone_number' => ['required'],
        'message' => ['required'],
    ];

    public function store(){
        $this->validate();

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
    public function render()
    {
        return view('livewire.frontend.application');
    }
}
