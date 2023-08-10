<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowFirstFrom extends Component
{

    public $isChecked = false;
    public $result=0;
    public $a71= false;
    public $a72= false;
    public $a73= false;
    public $a74= false;


    public $problem1 = '';
    public $solutions1 = [];
    public function e()  {
        
    }

    public function saveResult() {


        if($this->isChecked == false) {
            $this->result = 4;
            
        }else {

            if($this->a71) {
                $this->result = $this->result + 1;
            }else {
                $this->problem1=" violation de l'article 7";
                $this->solutions1[] =   'Assurez vous que vous avez le consentement exprès de la personne concernée' ;
            }

            if($this->a72) {
                $this->result = $this->result + 1;
            }else {
                $this->problem1=" violation de l'article 7";
                $this->solutions1[] =  'Assurez vous que La personne concernée peut, à tout moment, se rétracter' ;
            }

            if($this->a73) {
                $this->result = $this->result + 1;
            }else {
                $this->problem1=" violation de l'article 7";
                $this->solutions1[] = 'Assurez vous que vos données à caractère personnel objet du traitement ne peuvent être communiquées à un tiers que pour la réalisation de fins directement liées aux fonctions du responsable du traitement et du destinataire et sous réserve du consentement préalable de la personne concernée.' ;
            }

            if($this->a74) {
                $this->result = $this->result + 1;
            }else {
                $this->problem1=" violation de l'article 7";
                $this->solutions1[] =  "Assurez vous que votre traitement des données à caractère personnel qui concerne un enfant ne peut s'effectuer qu'après l'obtention du consentement de son représentant légal ou, le cas échéant, de l'autorisation du juge compétent" ;
            }
        }

        
        $this->emitUp('firstResult', $this->result, $this->problem1, $this->solutions1);
        $this->emitUp('next');

    }

    public function render()
    {
        return view('livewire.show-first-from');
    }
}
