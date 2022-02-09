<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

use App\Http\Livewire\Modal;
use App\Models\Project;

class AddIssue extends Modal
{

    public Project $project;

    public function mount(){

    }

    public $title;
    public $priority;
    public $summary;

    public function addIssue(){
        
        $this->validate([
            'title' => 'required|string|max:255',
            'summary' => 'required|string|max:255',
            'priority' => 'required',
        ]);

        return redirect()->route('products.index');
    }

    public function render()
    {
        return view('livewire.projects.add-issue');
    }
}
