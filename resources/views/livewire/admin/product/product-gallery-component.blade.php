<x-slot name="title">{{ __('Product Image Gallery') }}</x-slot>
<x-slot name="header">{{ __('Product Image Gallery') }}</x-slot>

<div class="card" x-data="{
    show: false,
    isCreate: false,
}">
    <div class="card-header d-flex flex-nowrap justify-content-end border-0 pt-6 pb-0">
        <div class="card-header-action ">


        </div>
    </div>

    <div class="card-body">
        Hi write your content here!
        <div class="row d-flex flex-nowrap justify-content-between">
{{--            <x-form.select wire:model.live="paginate" name="paginate" :label="__('Show')">--}}
{{--                <x-options.options key="all" value="All" :options="$paginate_list" selected="5"/>--}}
{{--            </x-form.select>--}}
{{--            <x-form.input-icon wire:model.live.debounce.500ms="search" name="search" :label="__('Search')" placeholder="{{ __('Search') }} - {{ __('name') }} ..." icon="flaticon2-search-1 icon-md"/>--}}
        </div>

{{--        <x-table.table>--}}
{{--            <x-slot name="head">--}}
{{--                <x-table.heading sortable wire:click="sortBy('id')" :direction="$sort_field === 'id'? $sort_direction : null">{{ __('#') }}</x-table.heading>--}}

{{--                <x-table.heading>{{ __('Image') }}</x-table.heading>--}}

{{--                <x-table.heading sortable wire:click="sortBy('name')" :direction="$sort_field === 'name'? $sort_direction : null">{{ __('Name') }}</x-table.heading>--}}

{{--                <x-table.heading sortable wire:click="sortBy('price')" :direction="$sort_field === 'price'? $sort_direction : null">{{ __('Price') }}</x-table.heading>--}}

{{--                <x-table.heading sortable wire:click="sortBy('product_type')" :direction="$sort_field === 'product_type'? $sort_direction : null">{{ __('Type') }}</x-table.heading>--}}

{{--                <x-table.heading sortable wire:click="sortBy('status')" :direction="$sort_field === 'status'? $sort_direction : null">{{ __('Status') }}</x-table.heading>--}}

{{--                <x-table.heading>{{ __('Actions') }}</x-table.heading>--}}
{{--            </x-slot>--}}

{{--            <x-slot name="body">--}}
{{--                @foreach($items as $item)--}}
{{--                    <x-table.row wire:loading.class="opacity-50" wire:target="search">--}}
{{--                        <x-table.cell>--}}
{{--                            {{ $item->id }}--}}
{{--                        </x-table.cell>--}}
{{--                        <x-table.cell>--}}
{{--                            <img src="{{ $item->thumb_image_src }}" style="width: 200px; height: 40px; display: block; margin: auto" />--}}
{{--                        </x-table.cell>--}}
{{--                        <x-table.cell>{{ $item->name }}</x-table.cell>--}}

{{--                        <x-table.cell>{{ $item->price }}</x-table.cell>--}}

{{--                        <x-table.cell>{{ $item->product_type }}</x-table.cell>--}}

{{--                        <x-table.cell>--}}
{{--                            <x-form.switch :checked="$item->status_switch"  wire:click="status_switch({{ $item->id }})" >1</x-form.switch>--}}
{{--                        </x-table.cell>--}}

{{--                        <x-table.cell>--}}
{{--                            <x-buttons.edit href="{{ route('admin.products.create', ['productId'=>$item->id]) }}" />--}}
{{--                            <x-buttons.delete actionId="{{ $item->id }}" x-on:click="sweetDelete('{{ $item->id }}')" />--}}
{{--                            <div class="dropdown dropleft d-inline">--}}
{{--                                <button class="btn btn-primary dropdown-toggle ml-1" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                    <i class="fas fa-cog"></i>--}}
{{--                                </button>--}}
{{--                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">--}}
{{--                                    <a class="dropdown-item has-icon" href=""><i class="far fa-heart"></i> Image Gallery</a>--}}
{{--                                    <a class="dropdown-item has-icon" href=""><i class="far fa-file"></i> Variants</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </x-table.cell>--}}
{{--                    </x-table.row>--}}
{{--                @endforeach--}}

{{--                <x-table.nodata :items="$items"></x-table.nodata>--}}
{{--            </x-slot>--}}

{{--        </x-table.table>--}}

{{--        <div class="mt-5">--}}
{{--            @if($paginate != 'all')--}}
{{--                {{ $items->links() }}--}}
{{--            @endif--}}

{{--        </div>--}}
    </div>
</div>
