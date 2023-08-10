<div>

    {{-- @if (!$showTest) --}}
    
    {{-- <livewire:show-multi-forms/>  --}}
    
    {{-- @endif --}}

    @if ($showResult)
     <livewire:show-test-result :result="$result" wire:key='q' > 
        
    @else
    <h1 class="text-2xl font-semibold text-center text-gray-600">Test de conformité à la loi 18-07</h1>
    <livewire:show-multi-forms wire:key='b' >
    @endif

</div>
