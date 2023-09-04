@props([
    'placeholder'=>'',
    'cols'=>'',
    'rows'=>'',
    'wrapperClasses'=>'col-xl-12',
    'hint'=>'',
    'name'=>'',
])

<div class="{{ $wrapperClasses }}"  style="padding-left: 23px !important; ">
    <div class="wsus__dash_pro_single d-flex flex-wrap">
        <div class="col-12 row ">
            <textarea cols="{{ $cols }}" rows="{{ $rows }}" {{ $attributes }} placeholder="{{ $placeholder }}"></textarea>
        </div>
        <div class="col-12 d-flex flex-nowrap">
            @if($hint) <span class="form-text text-muted">{{ $hint }}</span> @endif
            @if($errors->first($name)) <span class="form-text text-danger">{{ $errors->first($name) }}</span> @endif
        </div>
    </div>
</div>
