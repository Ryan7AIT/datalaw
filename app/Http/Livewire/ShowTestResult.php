<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowTestResult extends Component
{

    public $result;

    public function another() {
        $this->emitUp('anotherTest');
    }
    
    public function render()
    {

        

        $articles = array_keys($this->result);


        $solutions = [
            $this->result["article 7"]["sol1"],
            $this->result["article 9"]["sol2"],
            $this->result["article 13"]["sol3"],
            $this->result["article 18"]["sol4"],
        ];

        $problems = [$this->result["article 7"]["prob1"],$this->result["article 9"]["prob2"],$this->result["article 13"]["prob3"],$this->result["article 18"]["prob4"]];
        

        $score =    (int) (($this->result["score"] * 100) / 17);
      
        
        return view('livewire.show-test-result',compact('problems','solutions','articles','score'));
    }
}
