<form wire:submit="save"   x-show="show" x-on:alert-saved.window="show=false">
    <x-modal.dialog>
        <x-slot name="title">{{__($is_edit? 'Edit' : 'Add')}}: {{ $currentItem->title }} </x-slot>
        <x-slot name="content">
            <x-snippets.loading wire:target="edit" />
            <div class="row">
                <x-form.banner labelClasses="col-12" imageId="bannerImage" :src="asset($newBanner? $newBanner->temporaryUrl(): $currentItem->banner_src)" wire:model.blur="newBanner" name="currentItem.banner" :label="__('Banner')" wrapperClasses="col-12"/>

                <x-form.input wire:model.blur="title" name="title" :label="__('Title')" :placeholder="__('Title')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.type" name="currentItem.type" :label="__('Type')" :placeholder="__('Type')" wrapperClasses="col-12"/>
                <x-form.input type="number" wire:model.blur="currentItem.starting_price" name="currentItem.starting_price" :label="__('Starting Price')" :placeholder="__('Starting Price')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.btn_url" name="currentItem.btn_url" :label="__('Button Url')" :placeholder="__('Button Url')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.serial" name="currentItem.serial" :label="__('Serial')" :placeholder="__('Serial')" wrapperClasses="col-12"/>
                <x-form.switch wire:model.live="currentItem.status" name="currentItem.status"  :label="__('Status')" wrapperClasses="row d-flex flex-wrap justify-content-end col-12">1</x-form.switch>
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="d-flex flex-wrap justify-content-end">
                <x-buttons.save wire:click="cancel" target="cancel" x-on:click="show=false">{{ __('Cancel') }}</x-buttons.save>
                <x-buttons.submit target="save" >{{ __('Save') }}</x-buttons.submit>
            </div>
        </x-slot>
    </x-modal.dialog>
</form>
