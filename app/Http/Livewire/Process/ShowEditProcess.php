<?php

namespace App\Http\Livewire\Process;

use Livewire\Component;

class ShowEditProcess extends Component
{

    public $active = 'description';
    public $process;

    public $Pname;
    public $Pdesc;
    public $fond1;
    public $fond2;
    public $fond3;
    public $fond4;
    public $fond5;
    public $fond6;
    public $fond7;
    public $Presponsible;
    public $PprotrctionOfficier;
    public $PresponsibleConjoint;
    public $PresponsibleRepresentant;
    public $Pnature;
    public $Pcaratc;
    public $PcatPers;
    public $Pfinality;
    public $PDataPerso;
    public $PDataTrans;
    public $PDataTime;
    public $PDataServ;
    public $PDataMes;
    public $PDataDesc;
    public $PcatPersDest;


    public function mount() {

        // dd($this->process->fond1,$this->process->fond2,$this->process->fond3,$this->process->fond4);
        $this->Pname = $this->process->nom;
        $this->Pdesc = $this->process->description;
        $this->fond1 = $this->process->fond1;
        $this->fond2 = $this->process->fond2;
        $this->fond3 = $this->process->fond3;
        $this->fond4 = $this->process->fond4;
        $this->fond5 = $this->process->fond5;
        $this->fond6 = $this->process->fond6;
        $this->fond7 = $this->process->fond7;
        $this->Presponsible = $this->process->responsible;
        $this->PprotrctionOfficier = $this->process->data_protection_officier;
        $this->PresponsibleConjoint = $this->process->responsable_conjoint;
        $this->PresponsibleRepresentant = $this->process->representant_du_responsable;
        $this->Pnature = $this->process->nature_du_traitment;
        $this->Pcaratc = $this->process->caraterestique_du_traitment;
        $this->Pfinality = $this->process->finalite_du_traitment;
        $this->PDataPerso = $this->process->donnes_a_carecter_personelle;
        $this->PDataTime = $this->process->duree_de_conservation;
        $this->PDataTrans = $this->process->nature_des_donnees;
        $this->PDataServ = $this->process->Pservice;
        $this->PDataDesc = $this->process->description_generale;
        $this->PDataMes = $this->process->mesures;
        $this->PcatPersDest = $this->process->categorie_des_personnes;


    }
    public function render()
    {
        return view('livewire.process.show-edit-process', [
            'process' => $this->process
        ]);
    }


    public function updateProcess() {


         $this->process->nom  = $this->Pname ;
         $this->process->description  = $this->Pdesc ;
         $this->process->fond1  = $this->fond1 ;
         $this->process->fond2  = $this->fond2 ;
         $this->process->fond3  = $this->fond3 ;
         $this->process->fond4  = $this->fond4 ;
         $this->process->fond5  = $this->fond5 ;
         $this->process->fond6  = $this->fond6 ;
         $this->process->fond7  = $this->fond7 ;
        $this->process->responsible = $this->Presponsible ;
         $this->process->data_protection_officier = $this->PprotrctionOfficier;
        $this->process->responsable_conjoint = $this->PresponsibleConjoint ;
        $this->process->representant_du_responsable = $this->PresponsibleRepresentant ;
        $this->process->nature_du_traitment = $this->Pnature ;
        $this->process->caraterestique_du_traitment = $this->Pcaratc ;
         $this->process->finalite_du_traitment = $this->Pfinality;
         $this->process->donnes_a_carecter_personelle = $this->PDataPerso;
         $this->process->duree_de_conservation = $this->PDataTime;
         $this->process->nature_des_donnees = $this->PDataTrans;
        $this->process->Pservice = $this->PDataServ ;
         $this->process->description_generale = $this->PDataDesc;
         $this->process->mesures = $this->PDataMes;
         $this->process->categorie_des_personnes = $this->PcatPersDest;

         $this->process->save();


    }
}
