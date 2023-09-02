<div class="form-group {{$divClass}}" style="@if($hidden) display:none; @endif">
    <label @if($id)for="{{$id}}"@endif >{{$label}}</label>
    <input id="@if($id){{$id}}@endif" name="{{$name}}" type="{{$type}}" class="form-control {{$class}}" value="{{$old?? $value}}" {{$required}} {{$attribute}}>
    @if($errors?->any()  && $errors?->has($name))
    <div class="invalid-feedback d-block">
        {{$errors->get($name)[0]}}
    </div>
    @endif

</div>
