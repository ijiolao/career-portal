<div>
<input wire:model.live.debounce..500ms="search" type="search" name="search" placeholder="Search " />
@if()
@foreach ($results as $result)
    
@endforeach
@endif
    
@endif
</div>
