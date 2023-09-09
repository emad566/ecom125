@foreach($items->where('parent_id',  0) as $item)
    <x-categories.sub-cats :allItems="$items" :item="$item"/>
@endforeach
