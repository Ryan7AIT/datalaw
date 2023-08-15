<?php

namespace App\Http\Livewire;

use App\Models\Process;
use Livewire\Component;

class ShowCreateProcees extends Component
{
    public $active = 'description';
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




    public function createProcess() {
        $process = Process::create([
            "nom" => $this->Pname,
            "description" => $this->Pdesc,
            "fond1" => $this->fond1,
            "fond2" => $this->fond2,
            "fond3" => $this->fond3,
            "fond4" => $this->fond4,
            "fond5" => $this->fond5,
            "fond6" => $this->fond6,
            "fond7" => $this->fond7,
            "interet_legitime" => $this->Presponsible,
            "responsible" => $this->Presponsible,
            "data_protection_officier" => $this->PprotrctionOfficier,
            "representant_du_responsable" => $this->PresponsibleRepresentant,
            "responsable_conjoint" => $this->PresponsibleConjoint,
            "nature_du_traitment" => $this->Pnature,
            "finalite_du_traitment" => $this->Pfinality,
            "caraterestique_du_traitment" => $this->Pcaratc,
            "categorie_des_personnes" => $this->PcatPers,
            "donnes_a_carecter_personelle" => $this->PDataPerso,
            "destinataires" => $this->PcatPersDest,
            "nature_des_donnees" => $this->PDataTrans,
            "duree_de_conservation" => $this->PDataTime,
            "Pservice" => $this->PDataServ,
            "mesures" => $this->PDataMes,
            "description_generale" => $this->PDataDesc


        ]);

        session()->flash('message', 'Traitment créé avec succès');



        return redirect('/dashboard/traitments');
    }







    public function render()
    {
        return view('livewire.show-create-procees');
    }
}
