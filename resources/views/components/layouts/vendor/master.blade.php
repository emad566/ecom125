@php $local = session()->get('locale'); @endphp
@if ($local == null)
    @php $local = 'en' @endphp
@endif

@include('components.layouts.vendor.head')


<!--=============================
  DASHBOARD MENU START
==============================-->
@include('components.layouts.vendor.menu')
<!--=============================
  DASHBOARD MENU END
==============================-->


<!--=============================
  DASHBOARD START
==============================-->
@include('components.layouts.vendor.content')
<!--=============================
  DASHBOARD START
==============================-->


<!--============================
    SCROLL BUTTON START
  ==============================-->
@include('components.layouts.vendor.scroll-button')
<!--============================
  SCROLL BUTTON  END
==============================-->


@include('components.layouts.vendor.customjs')
@include('components.layouts.vendor.footerscripts')

