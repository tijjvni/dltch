<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

use App\Http\Livewire\Modal;
use App\Models\Project;

class AddIssue extends Modal
{

    public Project $project;

    public $title;
    public $priority;
    public $summary;

    public function addIssue(){
        dd('$summary');
    }

    public function render()
    {
        return view('livewire.projects.add-issue');
    }
}
