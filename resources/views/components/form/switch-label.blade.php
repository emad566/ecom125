@props([
    'wrapperClasses'=>'col-3',
    'label'=>''
    'name'=>''
])

<div class="{{ $wrapperClasses }}">
    <span class="switch switch-sm switch-icon pl-5">
        <label>
            <input {{ $attributes }} type="checkbox" value="{{ $slot }}" />
            <span></span>
        </label>
    </span>
    <label class="form-label">{{ $label }}</label>
    @if($errors->first($name)) <span class="form-text text-danger">{{ $errors->first($name) }}</span> @endif
</div>
