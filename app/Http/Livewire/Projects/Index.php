<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

class Index extends Component
{

    protected $projects;

    public function mount($projects){
        $this->projects = $projects;
    }

    public function render()
    {
        $projects = $this->projects;
        return view('livewire.projects.index',[
            'projects' => $projects
        ]);
    }
}
