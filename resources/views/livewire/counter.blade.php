<div>
    <x-button wire:click="sumar" class="bg-blue-600 hover:bg-amber-400">+</x-button>
    <x-input wire:model="counter" readonly="true" class="border-2 hover:bg-gray-100 focus:bg-amber-300 focus:border-blue-300"></x-input>
    <x-button wire:click="restar">-</x-button>
</div>
