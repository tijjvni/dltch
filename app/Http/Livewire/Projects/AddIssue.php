<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

use App\Http\Livewire\Modal;
use App\Models\Project;

class AddIssue extends Modal
{

    public Project $project;

    public function addIssue(){
        return redirect()->to(route('/projects/'.$this->project->id));
    }

    public function render()
    {
        return view('livewire.projects.add-issue');
    }
}
