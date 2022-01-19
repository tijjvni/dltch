<?php

namespace App\Http\Livewire\Projects;

use App\Models\Client;
use App\Models\Project;

use Livewire\Component;

class Create extends Component
{


    public $title;
    public $client;
    public $description;

    protected $clients;

    public function mount(){
        $this->clients = Client::all();
    }


    public function createClient(){

        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'client' => 'required|exists:clients,id',
	    ]);

        $title = $this->title;
        $client = $this->client;
        $description = $this->description;


        $project = new Project;
        $project->title = $title;
        $project->client = $client;
        $project->description = $description;
        $project->save();


	    session()->flash('flash.banner', $project->name.' added successfully');

        return redirect()->route('projects.index'); 
    }

    public function render()
    {
        $clients = $this->clients;
        return view('livewire.projects.create',[
            'clients' => $clients
        ]);
    }
}
