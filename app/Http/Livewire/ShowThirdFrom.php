<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowThirdFrom extends Component
{

    public $isChecked = false;

    public $result=0;
    public $b71= false;
    public $b72= false;
    public $b73= false;
    public $b74= false;
    public $b75= false;

    public $problem1 = '';
    public $solutions1 = [];


    public function saveResult() {


        if($this->isChecked == false) {
            $this->result = 5;
        }else {
            if($this->b71) {
                $this->result = $this->result + 1;
            }else {
                $this->problem1=" violation de l'article 14";
                $this->solutions1[] =   "Assurez vous que votre declaration comprendre le nom et l'adresse du responsable du traitement et, le cas échéant, ceux de son représentant" ;
            }

            if($this->b72) {
                $this->result = $this->result + 1;
            }else {
                $this->problem1=" violation de l'article 14";
                $this->solutions1[] =   "Assurez vous que votre declaration comprendre la nature, les caractéristiques et la ou les finalités du traitement envisagé" ;
            }

            if($this->b73) {
                $this->result = $this->result + 1;
            }else {
                $this->problem1=" violation de l'article 14";
                $this->solutions1[] =   "Assurez vous que votre declaration comprendre  une description de la ou des catégories de personnes concernées et des données ou des catégories de données à caractère personnel s'y rapportant" ;
            }

            if($this->b74) {
                $this->result = $this->result + 1;
            }else {
                $this->problem1=" violation de l'article 14";
                $this->solutions1[] =   'Assurez vous que votre declaration comprendre  la nature des données dont le transfert vers des pays étrangers est envisagé ' ;
            }


            if($this->b75) {
                $this->result = $this->result + 1;
            }else {
                $this->problem1=" violation de l'article 14";
                $this->solutions1[] =   'Assurez vous que votre declaration comprendre la durée de conservation des données' ;
            }



        }
        $this->emitUp('thirdResult', $this->result, $this->problem1, $this->solutions1);
        $this->emitUp('next');


    }


    public function previous() {
     
        $this->emitUp('previous');

    }


    public function e()  {
        
    }


    public function render()
    {
        return view('livewire.show-third-from');
    }
}
