<x-slot name="title">{{__($is_edit? 'Edit Product' : 'Create Product')}}</x-slot>
<x-slot name="header">{{ __('Product') }}</x-slot>

<div class="card" x-data="{
    show: false,
    isCreate: false,
}">
    <div class="card-header">
        <h4>{{__($is_edit? 'Edit' : 'Add')}} : {{ $product->name }}</h4>
    </div>

    <div class="card-body">
        <form wire:submit.prevent="save">
            <x-snippets.loading wire:target="edit" />
            <div class="row">
                <x-form.image :src="$newThumb? $newThumb->temporaryUrl(): $product->thumb_image_src" wire:model.blur="newThumb" name="newThumb" imageId="productImage" :label="__('Image')" wrapperClasses="col-12"/>
                <x-form.input wire:model.lazy="name" name="name" :label="__('Name')" wrapperClasses="col-12"/>
                <x-form.input wire:model="product.slug" name="product.slug" :label="__('Slug')" wrapperClasses="col-12"/>
                <x-form.select2 wire:model="product.category_id" name="product.category_id" :label="__('Category')" wrapperClasses="col-6">
                    <option value="">{{__('Select')}}</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </x-form.select2>
                <x-form.select2 wire:model="product.brand_id" name="product.brand_id" :label="__('Brand')" wrapperClasses="col-6">
                    <option value="">{{__('Select')}}</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </x-form.select2>
                <x-form.input wire:model="product.sku" name="product.sku" :label="__('SKU')" wrapperClasses="col-12"/>
                <x-form.input wire:model="product.price" name="product.price" type="number" :label="__('Price')" wrapperClasses="col-12"/>
                <x-form.input wire:model="product.offer_price" name="product.offer_price" type="number" :label="__('Offer Price')" wrapperClasses="col-12"/>
                <x-form.input wire:model="product.offer_start_date" name="product.offer_start_date" type="date" :label="__('Offer Start Date')" wrapperClasses="col-6"/>
                <x-form.input wire:model="product.offer_end_date" name="product.offer_end_date" type="date" :label="__('Offer End Date')" wrapperClasses="col-6"/>
                <x-form.input wire:model="product.qty" name="product.qty" type="number" :label="__('Stock Quantity')" wrapperClasses="col-12"/>
                <x-form.input wire:model="product.video_link" name="product.video_link" :label="__('Video Link')" wrapperClasses="col-12"/>
                <x-form.textarea wire:model="short_description" name="short_description" :label="__('Short Description')" wrapperClasses="col-12" class="col-12"/>
                <x-form.textarea wire:model="long_description" name="long_description" :label="__('Long Description')" wrapperClasses="col-12" class="col-12"/>
                <x-form.select2 wire:model="product.product_type" name="product.product_type" :label="__('Product Type')" wrapperClasses="col-12">
                    <option value="">{{__('Select')}}</option>
                    <option value="New Arrival">{{__('New Arrival')}}</option>
                    <option value="Featured">{{__('Featured')}}</option>
                    <option value="Top Product">{{__('Top Product')}}</option>
                    <option value="Best Product">{{__('Best Product')}}</option>
                </x-form.select2>
                <x-form.input wire:model="seo_title" name="seo_title" :label="__('Seo Title')" wrapperClasses="col-12"/>
                <x-form.textarea wire:model="seo_description" name="seo_description" :label="__('Seo Description')" wrapperClasses="col-12" class="col-12"/>
                <x-form.select2 wire:model.live="product.status" name="product.status" :label="__('Status')" wrapperClasses="col-12">
                    <option value="1">{{__('Active')}}</option>
                    <option value="0">{{__('Inactive')}}</option>
                </x-form.select2>
            </div>


            <div class="d-flex flex-wrap justify-content-end">
                <x-buttons.save wire:click="cancel" target="cancel">{{ __('Reset') }}</x-buttons.save>
                <x-buttons.submit target="save" >{{ __($is_edit? 'Edit' : 'Create') }}</x-buttons.submit>
            </div>

        </form>
    </div>
</div>
