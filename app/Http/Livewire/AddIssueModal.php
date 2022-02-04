<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\Modal;

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
