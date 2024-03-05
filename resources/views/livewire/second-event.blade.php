<div>
    {{-- <button wire:click="$dispatch('fire')">Click me</button> --}}
    <button wire:click="$dispatchTo('third-event','fire')">Click me</button>
    {{-- <button wire:click="$dispatchSelf('fire')">Click me</button> --}}

</div>
