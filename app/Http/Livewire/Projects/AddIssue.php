<?php

namespace App\Http\Livewire\Projects;

use LivewireUI\Modal\ModalComponent;

class AddIssue extends ModalComponent
{
    public function render()
    {
        return view('livewire.projects.add-issue');
    }
}
