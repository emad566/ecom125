<x-slot name="title">{{ __('Brands') }}</x-slot>
<x-slot name="header">{{ __('Brands') }}</x-slot>

<div class="card" x-data="{
    show: false,
    isCreate: false,
}">
    <div class="card-header d-flex flex-nowrap justify-content-end border-0 pt-6 pb-0">
        <div class="card-header-action ">
            <a wire:click.prevent="create" class="btn btn-primary font-weight-bolder" x-on:click="show=true; isCreate=true" >
                <i class="la la-plus"></i>+ {{__("Add New")}}</a>
            <!--end::Button-->
        </div>
    </div>

    <div class="card-body table-responsive">
        <div class="row d-flex flex-nowrap justify-content-between">
            <x-form.select wire:model.live="paginate" name="paginate" :label="__('Show')">
                <x-options.options key="all" value="All" :options="$paginate_list" selected="5"/>
            </x-form.select>
            <x-form.input-icon wire:model.live.debounce.500ms="search" name="search" :label="__('Search')" placeholder="{{ __('Search') }} - {{ __('name') }} ..." icon="flaticon2-search-1 icon-md"/>
        </div>


        <x-table.table>
            <x-slot name="head">
                <x-table.heading sortable wire:click="sortBy('id')" :direction="$sort_field === 'id'? $sort_direction : null">{{ __('#') }}</x-table.heading>
                <x-table.heading>{{ __('Logo') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('name')" :direction="$sort_field === 'name'? $sort_direction : null">{{ __('Name') }}</x-table.heading>

                <x-table.heading sortable wire:click="sortBy('is_featured')" :direction="$sort_field === 'is_featured'? $sort_direction : null">{{ __('Featured') }}</x-table.heading>

                <x-table.heading sortable wire:click="sortBy('status')" :direction="$sort_field === 'status'? $sort_direction : null">{{ __('Status') }}</x-table.heading>
                <x-table.heading>{{ __('Actions') }}</x-table.heading>
            </x-slot>

            <x-slot name="body">
                @foreach($items as $item)
                    <x-table.row wire:loading.class="opacity-50" wire:target="search">
                        <x-table.cell>
                            {{ $item->id }}
                        </x-table.cell>
                        <x-table.cell>
                            <img src="{{ $item->logo_src }}" style="width: 200px; height: 40px; display: block; margin: auto" />
                        </x-table.cell>
                        <x-table.cell>{{ $item->name }}</x-table.cell>

                        <x-table.cell>
                            <x-form.switch :checked="$item->is_featured_switch"  wire:click="status_switch({{ $item->id }}, {{ $item->is_featured }})" >1</x-form.switch>
                        </x-table.cell>

                        <x-table.cell>
                            <x-form.switch :checked="$item->status_switch"  wire:click="status_switch({{ $item->id }})" >1</x-form.switch>
                        </x-table.cell>

                        <x-table.cell>
                            <x-buttons.edit wire:click="edit({{ $item->id }}).live" x-on:click="show=true; isCreate=false"/>
                            <x-buttons.delete actionId="{{ $item->id }}" x-on:click="sweetDelete('{{ $item->id }}')" />
                        </x-table.cell>
                    </x-table.row>
                @endforeach

                <x-table.nodata :items="$items"></x-table.nodata>
            </x-slot>

        </x-table.table>

        <div class="mt-5">
            @if($paginate != 'all')
                {{ $items->links() }}
            @endif

        </div>
    </div>


    @include('livewire.admin.brand.partials.create')
</div>
