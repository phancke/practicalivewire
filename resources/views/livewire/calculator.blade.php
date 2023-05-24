<div class="flex justify-center ">
    <x-input name="input1" class="border-2" ></x-input>
    <x-dropdown align="false" >
        <x-slot name="trigger" >
            <button class="mr-1 ml-1 align-content-center">Opciones</button>
        </x-slot>
<x-slot name="content" class="mr-auto">
    <ul >
        <li class="hover:bg-gray-100"><button wire:model="operacion">+</button></li>
        <li class="hover:bg-gray-100"><button wire:model="operacion">-</button></li>
        <li class="hover:bg-gray-100"><button wire:model="operacion">*</button></li>
        <li class="hover:bg-gray-100"><button wire:model="operacion">/</button></li>

    </ul>
</x-slot>
    </x-dropdown>
    <x-input name="input2" class="inline-flex border-2"></x-input>
    <x-button class="inline-block">=</x-button>
</div>

<div class="text-center">
    <x-label class="mt-2">Resultado</x-label>
    <x-input name="input2" editable="false" class="inline-flex border-2 mt-2 read-only:true "></x-input>
</div>
