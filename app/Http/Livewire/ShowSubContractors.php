<?php

namespace App\Http\Livewire;

use App\Models\Subcontractor;
use Livewire\WithFileUploads;

use Livewire\Component;

class ShowSubContractors extends Component
{

    use WithFileUploads;

    public $rights;
    public $fname;
    public $lname;
    public $email;
    public $docs;
    public $description;
    public $number;

    protected $rules = [
        'fname' => 'required',
        'lname' => 'required',
        'description' => 'required',
        'number' => 'required',
        'email' => 'required|email',
    ];

    public function submit() {
        $this->validate();

        $path = $this->docs->store('contracts','public');
        $right = Subcontractor::create([
            'responsable' => $this->fname . ' ' .$this->lname  ,
            'raison' => $this->description,
            'address' => $this->fname,
            'number' => $this->number,
            'path' => $path,
            'email' => $this->email,


        ]);

        session()->flash('message', 'Traitment créé avec succès');

        // $this->rights->push($right);


    }

    public function render()
    {
        $subContractors = Subcontractor::all();
        return view('livewire.show-sub-contractors', compact('subContractors'));
    }
}
