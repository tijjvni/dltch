<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

class Show extends Component
{

    public $project;

    public $addIssue;

    public function mount($project){
       dd($this->project = $project);
        $this->addIssue = false;
    }


    public function addIssueModal(){
        $this->addIssue = !$this->addIssue;
    }

    public function render()
    {
        $project = $this->project;
        return view('livewire.projects.show',[

        ]);
    }
}