{{-- toaster --}}
<link rel="stylesheet" href="{{asset('dashboards/assets-helpers/css/toastr.min.css')}}">
<!-- Show form errors in toaster  -->
<script src="{{asset('dashboards/assets/modules/jquery.min.js')}}"></script>
<script src="{{asset('dashboards/assets-helpers/js/toastr.min.js')}}"></script>

<script defer>
    window.onload= function(){
        // START:: Toast alert listener
        window.addEventListener('alert', event => {
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                @if($local == 'en')
                "positionClass" : "toast-top-right",
                @else
                "positionClass" : "toast-top-left",
                @endif
            }

            toastr[event.detail.type](event.detail.message,
                event.detail.title ?? ''), toastr.options = {
                "closeButton": true,
                "progressBar": true,
                @if($local == 'en')
                "positionClass" : "toast-top-right",
                @else
                "positionClass" : "toast-top-left",
                @endif
            }
        });
        // END:: Toast alert listener
    }
</script>

<style>
    .toast-success{
        background-image: none !important;
        background-color: #f90 !important;
    }
    @if($local == 'ar')
    .toast-close-button{
        margin-left: 34px !important;
        margin-right: 40px !important;
    }
    @endif

    .rotate {
        animation: rotation 1s infinite linear;
    }

    @keyframes rotation {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }
</style>
{{-- /toaster --}}
