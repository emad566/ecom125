@php $local = session()->get('locale'); @endphp
@if ($local == null)
    @php $local = 'en' @endphp
@endif

@if ($local == 'en')
    @include('components.layouts.admin.head_en')
@else
    @include('components.layouts.admin.head_ar')
@endif
<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        @include('components.layouts.admin.navbar')
        @include('components.layouts.admin.sidebar')

        <!-- Main Content -->
        <div class="main-content">
            {{ $slot }}
        </div>
        @include('components.layouts.admin.footer')
    </div>
</div>

@include('components.layouts.admin.footerscripts')
@include('components.layouts.admin.customjs')
</body>
</html>
