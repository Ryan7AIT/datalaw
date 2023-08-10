<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowFourthFrom extends Component
{

    public $isChecked = false;

    public function e()  {
        
    }

    public $result=0;
    public $d71= false;
    public $d72= false;
    public $d73= false;
    public $d74= false;

    public $problem1 = '';
    public $solutions1 = [];


    public function saveResult() {


        if($this->isChecked == false) {
            $this->result = 5;
        }else {
            if($this->d71) {
                $this->result = $this->result + 1;
            }else {
                $this->problem1=" violation de l'article 18";
                $this->solutions1[] =   "Assurez vous que le traitement est nécessaire à la défense dintérêts vitaux de la personne concernée ou dune autre personne et si la personne concernée se trouve dans lincapacité physique ou juridique de donner son consentemen" ;
            }

            if($this->d72) {
                $this->result = $this->result + 1;
            }else {
                $this->problem1=" violation de l'article 18";
                $this->solutions1[] =   "Assurez vous que le traitement porte sur des données manifestement rendues publiques par la personne concernée, dès lors que son consentement au traitement des données peut être déduit de ses déclarations " ;
            }

            if($this->d73) {
                $this->result = $this->result + 1;
            }else {
                $this->problem1=" violation de l'article 18";
                $this->solutions1[] =   "Assurez vous que le traitement est nécessaire à la reconnaissance, lexercice ou la défense d un droit en justice et est effectué exclusivement à cette fin " ;
            }

            if($this->d74) {
                $this->result = $this->result + 1;
            }else {
                $this->problem1=" violation de l'article 18";
                $this->solutions1[] =   "Assurez vous que le traitement de données génétiques à l exclusion de celles effectuées par des médecins ou biologistes et qui sont nécessaires pour l exercice de la médecine préventive " ;
            }


            



        }
        $this->emitUp('fourthResult', $this->result, $this->problem1, $this->solutions1);
        $this->emitUp('showResult');

    }


    
    public function previous() {
     
        $this->emitUp('previous');

    }

    
    public function render()
    {
        return view('livewire.show-fourth-from');
    }
}
