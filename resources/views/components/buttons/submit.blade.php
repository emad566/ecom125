@props([
    'target'=>'',
    'class'=>'btn btn-primary btn-md w-100px mx-5',
    'wrapperClasses'=>'d-flex justify-content-end'
])
<div class="{{ $wrapperClasses }}">
    <button type="submit" class="{{ $class }}">{{ $slot }} </button>
    <x-snippets.loading wire:target="{{$target}}" />
</div>
