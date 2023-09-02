@include('admin.layouts.head_en')
<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        @include('admin.layouts.navbar')
        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        @include('admin.layouts.footer')
    </div>
</div>

@include('admin.layouts.footerscripts')
</body>
</html>
