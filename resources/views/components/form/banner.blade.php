@props([
    'id'=>'',
    'imageId'=>'',
    'name'=>'',
    'label'=>'',
    'required'=>'',
    'wrapperClasses'=>'col-xs-12 col-md-4',
    'labelClasses'=>'',
    'src'=>'',
    'hint'=>'',
    'style'=>'width: 100% !important; height: 100px;',
    'avatar'=>'avatar-item',
])



<div id="{{ $id }}"  class="form-group {{ $id }} {{ $wrapperClasses }}" >
    <label class="{{ $labelClasses }}" for="{{ $name }}"> {{ $required }}
        <img id="{{ $imageId }}" style="{{ $style }}" alt="{{ $name }}"
             src="{{ $src }}" class="img-fluid"
             data-toggle="tooltip" title="{{ $name }}"
             data-original-title="{{ $name }}">
        <div style="position: absolute; bottom: 20px; right: 20px;" class="avatar-badge" title="{{ $name }}" data-toggle="tooltip"
             data-original-title="{{ $name }}"><i class="fas fa-edit" style="font-size: 40px;"></i></div>
        <input  id="{{ $name }}" type="file"  {{ $attributes }} name="{{ $name }}" style="display: none"/>
    </label>
    @if($errors->first($name)) <span class="form-text text-danger">{{ $errors->first($name) }}</span> @endif
</div>

