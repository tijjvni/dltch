<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

class Show extends Component
{

    protected $project;

    public $addIssue;

    public function mount($project){
        $this->project = $project;

    }

    public function addIssueModal(){
        $this->addIssue = !$this->addIssue;    }

    public function render()
    {
        $project = $this->project;
        return view('livewire.projects.show',[
            'project' => $project
        ]);
    }
}

