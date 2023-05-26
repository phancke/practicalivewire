<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $val1,$val2,$operacion;
    public $resultado=0;


    public function render()
    {
        return view('livewire.calculator');
    }

    public function operacion($operacion){
           switch ($operacion){
            case '+':
                $variable=$this->val1 + $this->val2;
                break;
            case '-':
                $this->resultado=$this->val1 - $this->val2;
                break;
            case '*':
                $this->resultado=$this->val1 * $this->val2;
                break;
            case '/':
                $this->resultado=$this->val1 / $this->val2;
                break;
        }

        $this->resultado=$variable;

    }
}
