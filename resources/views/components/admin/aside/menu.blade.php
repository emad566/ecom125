@props([
    'icon'=>'',
    'title'=>'',
    'link'=>'',
])

<li class="dropdown @if(request()->is('admin/'.$link)) active @endif">
    <a href="#" class="nav-link has-dropdown"><i class="{{ $icon }}"></i><span>{{ $title }}</span></a>
    <ul class="dropdown-menu">
        {{ $slot }}
    </ul>
</li>
