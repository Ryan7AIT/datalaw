<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowLawTest extends Component
{

    public $showTest = false;
    public $showResult = false;

    protected $listeners = [ 'q','anotherTest'];
    public $result;
    // 'showResult' => 'showR',

 
    public function anotherTest() {
        $this->showResult = false;
    }
    public function q($r) {

        
        $this->result = $r;
        $this->showResult = true ;
    }



    public function showT() {
        $this->showResult = !$this->showResult ;
    }

    public function showR() {


        $this->showResult = true ;
    }
    public function render()
    {
        return view('livewire.show-law-test');
    }
}
