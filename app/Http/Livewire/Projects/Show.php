<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

class Show extends Component
{

    public $project;

    public function mount($project){
        $this->project = $project;
    }

    public function render()
    {

        return view('livewire.projects.show',[

        ]);
    }
}

