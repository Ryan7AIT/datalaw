<?php

namespace App\Http\Livewire;

use App\Models\Process;
use App\Models\Right;
use Livewire\Component;
use Livewire\WithFileUploads;

class ShowRights extends Component
{
    use WithFileUploads;

    public $rights;
    public $fname;
    public $lname;
    public $email;
    public $docs;
    public $description;
    public $process;

    protected $rules = [
        'fname' => 'required',
        'lname' => 'required',
        'description' => 'required',
        'process' => 'required',
        'email' => 'required|email',
    ];

    public function submit() {
        $this->validate();

        $path = $this->docs->store('contracts','public');
        $right = Right::create([
            'name' => 'droit_de_' . '_' . $this->fname . '_' .$this->lname . '_' . $this->process ,
            'status' => 'en cour',
            'ufname' => $this->fname,
            'ulname' => $this->lname,
            'uemail' => $this->email,
            'description' => $this->description,
            'process_id' => $this->process,
            'path' => $path

        ]);

        session()->flash('message', 'Traitment créé avec succès');

        $this->rights->push($right);


    }

    public function render()
    {
        $processes = Process::all();
        return view('livewire.show-rights', compact('processes'));
    }
}
