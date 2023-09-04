<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\JobListing;
use DB;
use Carbon\Carbon;

class Listings extends Component
{
    public function listings(){
        $now = Carbon::now();
        $listings = JobListing::where('deadline', '>', $now)->get();
    }


    public function render()
    {
        return view('livewire.frontend.listings');
    }
}
