@props([
    'wrapperClasses'=>'mt-2',
    'label'=>'',
    'checked'=>'',
    'name'=>'',

])

<label class="custom-switch  {{ $wrapperClasses }}">
    <input {{ $attributes->merge(['class'=>'custom-switch-input']) }} {{ $checked }} type="checkbox" value="{{ $slot }}">
    <span class="custom-switch-indicator"></span>
    <span class="custom-switch-description">{{ $label }}</span>
</label>
@if($errors->first($name)) <span class="form-text text-danger">{{ $errors->first($name) }}</span> @endif
