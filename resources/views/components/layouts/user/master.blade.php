@php $locale = session()->get('locale'); @endphp
@if ($locale == null)
    @php $locale = 'en' @endphp
@endif

@if ($locale == 'en')
    @include('components.layouts.user.head_en')
@else
    @include('components.layouts.user.head_ar')
@endif
<body>
    <!--============================
    HEADER START
    ==============================-->
    @include('components.layouts.user.header')
    <!--============================
    HEADER END
    ==============================-->

    <!--============================
        MAIN MENU START
    ==============================-->
    @include('components.layouts.user.nav')
    <!--============================
        MAIN MENU END
    ==============================-->

    <!--============================
        MOBILE MENU START
    ==============================-->
    @include('components.layouts.user.nav-mobile')
    <!--============================
        MOBILE MENU END
    ==============================-->

    <!--==========================
    POP UP START
    ===========================-->
    {{--@include('components.layouts.user.popup')--}}
    <!--==========================
    POP UP END
    ===========================-->

    <!--============================
        CONTENT PART START
    ==============================-->
    {{ $slot }}
    <!--============================
        CONTENT PART END
    ==============================-->

    <!--============================
        FOOTER PART START
    ==============================-->
    @include('components.layouts.user.footer')
    <!--============================
        FOOTER PART END
    ==============================-->

    <!--============================
        SCROLL BUTTON START
    ==============================-->
    <div class="wsus__scroll_btn">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!--============================
        SCROLL BUTTON  END
    ==============================-->

    @include('components.layouts.user.footerscripts')
    @include('components.layouts.user.customjs')
</body>

</html>

