@props([
    'childes'=>'',
])
@foreach($childes as $child )
    @if($child->childes->count()>0)
        <li><a href="#">{{ $child->name }}<i class="fas fa-angle-right"></i></a>
            <ul class="wsus__sub_category">
                <x-user.categories.sub-menu :childes="$child->childes" />
            </ul>
        </li>
    @else
        <x-user.categories.link :title="$child->name"/>
    @endif
@endforeach

<style>
    .wsus_menu_cat_droapdown li:hover .wsus__sub_category {
        visibility: hidden;
    }

    .wsus_menu_cat_droapdown li:hover>.wsus__sub_category {
        visibility: visible;
    }

</style>

