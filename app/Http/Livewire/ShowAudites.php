<?php

namespace App\Http\Livewire;

use App\Models\Audit;
use App\Models\Process;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowAudites extends Component
{

    public $auditprocess;

    protected $rules = [
        'auditprocess' => 'required'
    ];



    public function submit()
    {
        // $this->validate();

        // dd($this->auditprocess,Auth::user()->id);

        $audit = Audit::create([
            'process_id' => $this->auditprocess,
            'user_id' => Auth::user()->id
        ]);


        // $article03->audits()->attach($audit->id, ['status' => 0]);

        $audit->articles()->attach('1', ['status' => 0]);
        $audit->articles()->attach('2', ['status' => 0]);
        $audit->articles()->attach('3', ['status' => 0]);
        $audit->articles()->attach('4', ['status' => 0]);
        $audit->articles()->attach('5', ['status' => 0]);
        $audit->articles()->attach('6', ['status' => 0]);
        $audit->articles()->attach('7', ['status' => 0]);
        $audit->articles()->attach('8', ['status' => 0]);


    }
    public function render()
    {
        $audits = Audit::all();
        $processes = Process::all();

        return view('livewire.show-audites', compact('audits','processes'));
    }
}
