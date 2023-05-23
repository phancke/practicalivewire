<?php

namespace App\Http\Livewire;
use App\Models\Counter as CModel;
use Livewire\Component;

class Counter extends Component
{
    public $counter=0;

    public function mount(){

        $counter=CModel::all();

        if(!$counter->count()){
            $contador= new CModel();
            $contador->save();

        }
        $this->counter=$counter[0]->counter;
    }
    public function render()
    {
        return view('livewire.counter');
    }

    public function sumar(){
        $counter=CModel::all();
        $counter[0]->counter+=1;
        $counter[0]->save();
        $this->counter=$counter[0]->counter;
    }

    public function restar(){
        $counter=CModel::all();
        $counter[0]->counter-=1;
        $counter[0]->save();
        $this->counter=$counter[0]->counter;
    }
}
