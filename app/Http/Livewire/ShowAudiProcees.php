<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowAudiProcees extends Component
{

    public $showLeftBar = false;
    public function showSideBar() {

        $this->showLeftBar = true;
    }

    public function hideSideBar() {
        $this->showLeftBar = false;
    }


    public function render()
    {
        return view('livewire.show-audi-procees');
    }
}
