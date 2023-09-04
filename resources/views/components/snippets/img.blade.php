@props([
    'wrapperClasses'=>'col-xl-3 col-sm-6 col-md-6',
    'src'=>'',
    'name'=>'',
    'hide'=>false,
    'style'=>'width:100; height:50;',
])

<div class="{{ $wrapperClasses }}">
    <label for="newAvatar">
        <div class="wsus__dash_pro_img">
            <img src="{{ $src }}" alt="img" style="{{ $style }}"  class="img-fluid w-100">
            <input wire:model.blur="{{ $name }}" name="{{ $name }}" id="{{ $name }}" type="file"  class="@if($hide) d-none  @endif">
        </div>
    </label>
    @if($errors->first($name)) <span class="form-text text-danger">{{ $errors->first($name) }}</span> @endif
</div>
