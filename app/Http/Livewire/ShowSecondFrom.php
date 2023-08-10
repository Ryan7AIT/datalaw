<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowSecondFrom extends Component
{
    public function e()  {
        
    }


    public $isChecked = false;
    public $result=0;
    public $b71= false;
    public $b72= false;
    public $b73= false;
    public $b74= false;
    public $problem1 = '';
    public $solutions1 = [];

    public function saveResult() {


        
            if($this->b71) {
                $this->result = $this->result + 1;
            }else {
                $this->problem1=" violation de l'article 9";
                $this->solutions1[] =   'Assurez vous que les donnees sont traitées de manière licite et loyale' ;
            }

            if($this->b72) {
                $this->result = $this->result + 1;
            }else {
                $this->problem1=" violation de l'article 9";
                $this->solutions1[] =   'Assurez vous que les donnees sont collectées pour des finalités déterminées, explicites et légitimes, et ne peuvent être traitées ultérieurement de façon incompatible avec lesdites finalités' ;
            }

            if($this->b73) {
                $this->result = $this->result + 1;
            }else {
                $this->problem1=" violation de l'article 9";
                $this->solutions1[] =   'Assurez vous que les donnees sont adéquates, pertinentes et non excessives au regard des finalités pour lesquelles elles sont collectées ou traitées' ;
            }

            if($this->b74) {
                $this->result = $this->result + 1;
            }else {
                $this->problem1=" violation de l'article 9";
                $this->solutions1[] =   'Assurez vous que les donnees sont conservées sous une forme permettant lidentification des personnes concernées pendant une durée n excédant pas celle nécessaire à la réalisation des finalités pour lesquelles elles ont été collectées ou traitées' ;
            }
        
        $this->emitUp('secondResult', $this->result, $this->problem1, $this->solutions1);
        $this->emitUp('next');

    }


    public function previous() {
     
        $this->emitUp('previous');

    }


    public function render()
    {
        return view('livewire.show-second-from');
    }
}
