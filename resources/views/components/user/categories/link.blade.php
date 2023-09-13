@props([
    'route'=>'',
    'icon'=>'',
    'title'=>'',
])

<li>
    <a wire:navigate {{ $attributes }} href="#">
        @if($icon) <i class="{{ $icon }}"></i> @endif
        {{ $title }}
    </a>
</li>
