<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use DB;

class Search extends Component
{
    public $search =""; 
    public function render()
    {
        $results = [];
        if(strlen($this->search) >= 1){
             $results =  DB::table('job_list')->where('title', 'like', '%'.$this->search.'%')->limit(7)->get();
        }
        return view('livewire.frontend.search', compact($results));
    }
}
