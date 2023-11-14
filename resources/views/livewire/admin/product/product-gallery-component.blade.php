<x-slot name="title">{{ __('Product Image Gallery') }}</x-slot>
<x-slot name="header">{{ __('Product Image Gallery') }}</x-slot>

<div class="card" x-data="{
    show: false,
    isCreate: false,
}">


    <div class="card-header d-flex flex-nowrap border-0 pt-6 pb-0">
        <div class="card-header">
            <h4>Product: {{ $product->name }}</h4>
        </div>
        <div class="card-header-action ">

        </div>
    </div>

    <div class="card-body">
        <div class="form-group">
            <label for="">Image</label>
            <input wire:model.live="images" type="file" name="images[]" class="form-control" multiple>
            @for($i=0; $i<20; $i++)
                @if($errors->first('images.'.$i)) <span class="form-text text-danger">{{ $errors->first('images.'.$i) }}</span> @endif
            @endfor
        </div>
        <button wire:click.prevent="uploaddata" type="submit" class="btn btn-primary">Upload</button>

        <x-table.table>
            <x-slot name="head">
                <x-table.heading sortable wire:click="sortBy('id')" :direction="$sort_field === 'id'? $sort_direction : null">{{ __('#') }}</x-table.heading>

                <x-table.heading>{{ __('Image') }}</x-table.heading>

                <x-table.heading>{{ __('Actions') }}</x-table.heading>
            </x-slot>

            <x-slot name="body">
                @foreach($items as $item)
                    <x-table.row wire:loading.class="opacity-50" wire:target="search">
                        <x-table.cell>
                            {{ $item->id }}
                        </x-table.cell>

                        <x-table.cell>
                            <img src="{{ $item->image_src }}" style="width: 200px; height: 40px; display: block; margin: auto" />
                        </x-table.cell>


                        <x-table.cell>
                            <x-buttons.delete actionId="{{ $item->id }}" x-on:click="sweetDelete('{{ $item->id }}')" />
                        </x-table.cell>
                    </x-table.row>
                @endforeach

                <x-table.nodata :items="$items"></x-table.nodata>
            </x-slot>

        </x-table.table>

    </div>
</div>
