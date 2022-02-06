<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

class Show extends Component
{

    public $project;

    public $addIssue;

    public function mount($project){
        $this->project = $project;
        $this->addIssue = true;
    }


    public function render()
    {
        $project = $this->project;
        return view('livewire.projects.show',[

        ]);
    }
}