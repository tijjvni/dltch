<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

class AddIssue extends Component
{

    public $show;
    
    public function render()
    {
        return view('livewire.projects.add-issue');
    }
}
