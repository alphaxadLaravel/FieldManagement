<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{
    // the register steps here
    public $step1 = true;
    public $step2 = false;
    public $step3 = false;

    // Go to step1
    public function getStep1(){
        $this->step1 = true;
        $this->step2 = false;
        $this->step3  = false;
    }

     // Go to step2
     public function getStep2(){
        $this->step1 = false;
        $this->step2 = true;
        $this->step3  = false;
    }

     // Go to step3
     public function getStep3(){
        $this->step1 = false;
        $this->step2 = false;
        $this->step3  = true;
    }

    public function render()
    {
        return view('livewire.register');
    }
}
