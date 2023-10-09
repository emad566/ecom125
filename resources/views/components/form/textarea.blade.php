@props([
    'cols'=>'',
    'rows'=>'',
    'wrapperClasses'=>'col-xl-12',
    'label'=>'',
    'id'=>'',
    'hint'=>'',
    'name'=>'',
])

<div class="flex rounded-md form-group flex-wrap {{ $wrapperClasses }}">
    @if($label)
        <label for="{{ $id }}">{{ $label }}</label>
    @endif
    <textarea id="{{ $id }}" cols="{{ $cols }}" rows="{{ $rows }}" {{ $attributes->merge(['class'=>'form-textarea form-control block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 '. ($errors->first($name)? 'outline outline-red-800 outline-1' : '')]) }} ></textarea>

    @if($hint) <span class="form-text text-muted">{{ $hint }}</span> @endif
    @if($errors->first($name)) <span class="form-text text-danger">{{ $errors->first($name) }}</span> @endif
</div>
