

@if($item)
    <li itemId="{{ $item->id }}">

    <h5 class="d-flex flex-nowrap justify-between" style="@if(!$item->status) background-color:#BBB; @endif">
        <i class="{{$item?->icon}} pr-3"></i> {{ $item->name }}
        <span>
            <div class=" actions flex-nowrap flex-row">
                <x-form.switch wrapperClasses="mt-2 mx-4    "  :checked="$item->status_switch"  wire:click="status_switch({{ $item->id }})" >1</x-form.switch>
                <x-buttons.edit wire:click="edit({{ $item->id }}).live"/>
                <x-buttons.delete actionId="{{ $item->id }}" x-on:click="sweetDelete('{{ $item->id }}')" />
            </div>
        </span>
    </h5>
        <ul  itemId="{{ $item->id }}">
            @if(!$item->childes->count())
                <li class="emptyLi"></li>
            @endif
            @foreach($item->childes?->sortBy('serial') as $child)
                <x-categories.sub-cats :allItems="$allItems" :item="$child"/>
            @endforeach
        </ul>
    </li>
@endif
