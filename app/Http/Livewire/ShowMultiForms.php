<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowMultiForms extends Component
{

    public $currentStep =1;
    public $totalSteps = 4;

    public $step1Data = '';
    public $step2Data = '';
    public $step3Data = '';
    public $step4Data = '';

    public $result;
    public $result1;
    public $result2;
    public $result3;
    public $result4;
    public $sol1;
    public $sol2;
    public $sol3;
    public $sol4;
    public $pro1;
    public $pro2;
    public $pro3;
    public $pro4;







    protected $listeners = ['showResult', 'next' => 'nextStep', 'previous' => 'previousStep', 'firstResult' => 'firstResult' , 'secondResult' => 'secondResult' , 'thirdResult' => 'thirdResult' , 'fourthResult' => 'fourthResult'];

    public function firstResult($fr,$fp,$fs) {



        $this->sol1 = $fs;
        $this->pro1 = $fp;

        $this->result1 = $fr;
        $this->result = $this->result + $fr;
    }

    public function secondResult($fr,$fp,$fs) {
        $this->sol2= $fs;
        
        $this->pro2 = $fp;
        
        $this->result2 = $fr;
        
        $this->result = $this->result + $fr;
    }

    public function thirdResult($fr,$fp,$fs) {
        
        $this->sol3 = $fs;
        
        $this->pro3 = $fp;


        $this->result3 = $fr;
        
        $this->result = $this->result + $fr;
    }

    public function fourthResult($fr,$fp,$fs) {
        
        $this->sol4 = $fs;

        $this->pro4 = $fp;

        $this->result4 = $fr;
        
        $this->result = $this->result + $fr;


        
    }

    

    public function showResult() {

        $dataObject = (object) [
            
            'article 7' => [
                'sol1' => $this->sol1,
                'prob1' => $this->pro1,
            ],

            'article 9' => [
                'sol2' => $this->sol2,
                'prob2' => $this->pro2,
            ],

            'article 13' => [
                'sol3' => $this->sol3,
                'prob3' => $this->pro3,
            ]
            ,

            'article 18' => [
                'sol4' => $this->sol4,
                'prob4' => $this->pro4,
            ],

            'score' => $this->result
        ];

        

        $this->emitUp('q',$dataObject);
    }
    public function nextStep()
    {
        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
    }

    public function previousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }



    public function render()
    {


        return view('livewire.show-multi-forms');
    }
}
