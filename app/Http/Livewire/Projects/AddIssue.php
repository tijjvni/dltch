<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

use App\Http\Livewire\Modal;

class AddIssue extends Modal
{
    public function render()
    {
        return view('livewire.projects.add-issue');
    }
}
