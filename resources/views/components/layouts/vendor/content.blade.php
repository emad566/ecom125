<section id="wsus__dashboard">
    <div class="container-fluid">
        @include('components.layouts.vendor.aside')
        <div class="row">
            <div class="col-xl-3 col-xxl-2 col-lg-3"></div>
            <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
                {{ $slot }}
            </div>
        </div>
    </div>
</section>
