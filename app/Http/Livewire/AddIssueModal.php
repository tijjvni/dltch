<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddIssueModal extends Modal
{
    public $message = '';

    public function mount()
    {
      $this->message = 'Welcome to the reusable modal example';
    }
        
    public function render()
    {
        return view('livewire.add-issue-modal');
    }
}
