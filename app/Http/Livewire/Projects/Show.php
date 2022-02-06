<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

class Show extends Component
{

    public $project;

    public function mount($project){
        $this->project = $project;
        $this->addIssue = false;
    }

    public $addIssue = false;
    public function addIssue()
    {
        $this->addIssue = !$this->addIssue;
    }  

    public function render()
    {

        return view('livewire.projects.show',[

        ]);
    }
}

