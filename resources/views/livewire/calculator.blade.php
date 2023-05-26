<div>
<div class="flex justify-center ">
    <label for="">{{$val1}} {{$resultado}}</label>
    <x-input wire:model.defer="val1" name="input1" class="border-2" ></x-input>
    <x-dropdown align="false" >
        <x-slot name="trigger" >
            <button class="mr-1 ml-1 align-content-center  rounded border-indigo-500 border-2 hover:bg-gray-500">Operaciones... </button>
        </x-slot>
<x-slot name="content" class="mr-3">
    <ul >
        <li class="hover:bg-gray-100 text-center"><button wire:model="operacion">+</button></li>
        <li class="hover:bg-gray-100 text-center"><button wire:model="operacion">-</button></li>
        <li class="hover:bg-gray-100 text-center"><button wire:model="operacion">*</button></li>
        <li class="hover:bg-gray-100 text-center"><button wire:model="operacion">/</button></li>

    </ul>
</x-slot>
    </x-dropdown>
     <x-input wire:model.defer="val2" name="input2" class="inline-flex border-2"></x-input>
    <x-button wire:click="operacion('+')" class="inline-block">=</x-button>
</div>

<div class="text-center">
    <x-label  class="mt-2 text-2xl">Resultado </x-label>
    <x-input  disabled="true" readonly="true" value="{{$resultado}}" class="inline-flex border-2 mt-2 read-only:true "></x-input>
</div>
</div>
