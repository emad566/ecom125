<x-slot name="title">{{ __('Categories') }}</x-slot>
<x-slot name="header">{{ __('Categories') }}</x-slot>

<div class="row" x-data="{
    n:false, // next sibling id
    p:false, // previous sibling id
    c:false, // target container id
    itemId:false,
    drake:'',

    init(){
        function init_dragula(){
            drake = dragula([...document.querySelectorAll('ul.drag li ul'), ...document.querySelectorAll('ul.drag')],{
                accepts: function (el, target, source, sibling) {
                    // prevent dragged containers from trying to drop inside itself
                    function contains(a, b){
                      return a.contains ?
                        a != b && a.contains(b) :
                        !!(a.compareDocumentPosition(b) & 16);
                    }
                    return !contains(el,target);
                },

                moves: function (el, source, handle) {
                    return el.classList.contains('emptyLi')? false : true;
                },

            })
            .on('drag', function (el) {
                n=false;
                p=false;
                c=false;
                itemId = el.getAttribute('itemId');

                console.log('drag');
            }).on('drop', function (el) {

                p = el.previousElementSibling?.getAttribute('itemId');
                n = el.nextElementSibling?.getAttribute('itemId');
                if(c == itemId) c=false;
                // 1=>next, 0=>previous
                if(typeof itemId !== 'undefined'){
                    if(typeof p !== 'undefined' &&  p != null){
                        @this.updateSerial(itemId, p, 0);
                    }else if(typeof n !== 'undefined' &&  p != null){
                        @this.updateSerial(itemId, n, 1);
                    }
                }
                console.log('drop: ===========================>'+ itemId + ' __ ' + '@' + p + '#' + n);
            }).on('over', function (el, container) {
                c = container.getAttribute('itemId')
                console.log('over');
                container.className += ' ex-over';
            }).on('out', function (el, container) {
                if(typeof itemId !== 'undefined'){
                    if(
                        ((p == null && n == null) )
                        && c == container.getAttribute('itemId')
                    ){
                        @this.updateParent(itemId, c);
                    }
                }

                console.log('out: '+ el.getAttribute('itemId') + '->' + container.getAttribute('itemId') ) ;
                container.className = container.className.replace('ex-over', '');
            });
        }

        init_dragula()

        document.addEventListener('init_dragula', function(){
            setTimeout(function(){location.reload()}, 500);
        });

    },

    sweetDelete(id){
        Swal.fire({
            title: '{{ __('Are you sure?') }}',
            text: '{{ __('You will not be able to revert this!') }}',
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: '{{ __('Cancel') }}',
            confirmButtonText: '{{ __('Yes, delete it!') }}'
        }).then(function(result) {
            if (result.value) {
                @this.destroy(id)
                window.addEventListener('alert-delete', function (){
                    Swal.fire(
                        '{{ __('Deleted!') }}',
                        '{{ __('Your item has been deleted.') }}',
                        'success'
                    )
                })

            }
        });
    }


}">
    <link rel="stylesheet" href="{{ asset('css/icon-picker.min.css') }}">
    <script defer src="{{ asset('js/icon-picker.min.js') }}" defer></script>
    <style>
        .caret::after {
            display: inline-block;
            width: 0;
            height: 0;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-bottom: 0;
            border-left: .3em solid transparent;
        }
    </style>


    @include('livewire.admin.category.partials.content')
    <script defer>
        window.addEventListener('render', function (){
            $('body').on('change', '#iconPicker',  function(e) {
                @this.set('currentItem.icon', e.icon)
            });
        })
    </script>
</div>
