<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

class AddIssue extends Component
{

    public $show = false;

    protected $listeners = [
        'show' => 'show'
    ];

    public function show(){
        $this->show = true;
    }

    public function render()
    {
        return view('livewire.projects.add-issue');
    }
}
