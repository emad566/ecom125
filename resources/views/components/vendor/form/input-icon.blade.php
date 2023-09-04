@props([
    'icon'=>'',
    'type'=>'text',
    'placeholder'=>'',
    'wrapperClasses'=>'col-xl-6 col-md-6',
    'hint'=>'',
    'name'=>'',


])

<div class="{{ $wrapperClasses }}" style="padding-left: 23px !important; ">
    <div class="wsus__dash_pro_single d-flex flex-wrap">
        <div class="col-10 row d-flex flex-nowrap ">
            <i class="{{ $icon }}"></i>
            <input type="{{ $type }}" {{ $attributes }} placeholder="{{ $placeholder }}">
        </div>

        <div class="col-12 d-flex flex-nowrap">
            @if($hint) <span class="form-text text-muted">{{ $hint }}</span> @endif
            @if($errors->first($name)) <span class="form-text text-danger">{{ $errors->first($name) }}</span> @endif
        </div>
    </div>
</div>
