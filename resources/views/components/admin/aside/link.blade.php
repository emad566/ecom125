@props([
    'icon'=>'',
    'active'=>'',
    'route'=>'',
    'link'=>'',
])

<li class=" @if(request()->is('admin/'.$link)) active @endif">
    <a wire:navigate {{ $attributes->merge(['class'=>'nav-link']) }} href="{{ route($route) }}">
        @if($icon) <i class="{{ $icon }}"></i> @endif
        <span>{{ $slot }}</span>
    </a>
</li>
