<form wire:submit="save"   x-show="show" x-on:alert-saved.window="show=false">
    <x-modal.dialog>
        <x-slot name="title">{{__($is_edit? 'Edit' : 'Add')}}: {{ $currentItem->name }} </x-slot>
        <x-slot name="content">
            <x-snippets.loading wire:target="edit" />
            <div class="row">
                <x-form.banner labelClasses="col-12" imageId="logoImage" :src="asset($newLogo? $newLogo->temporaryUrl(): $currentItem->logo_src)" wire:model.blur="newLogo" name="currentItem.logo" :label="__('Logo')" wrapperClasses="col-12"/>

                <x-form.input wire:model.blur="name" name="name" :label="__('Name')" :placeholder="__('Name')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.slug" name="currentItem.slug" :label="__('Slug')" :placeholder="__('Slug')" wrapperClasses="col-12"/>
                <x-form.switch wire:model.live="currentItem.is_featured" name="currentItem.is_featured"  :label="__('Featured')" wrapperClasses="row d-flex flex-wrap justify-content-start col-6">1</x-form.switch>
                <x-form.switch wire:model.live="currentItem.status" name="currentItem.status"  :label="__('Status')" wrapperClasses="row d-flex flex-wrap justify-content-start col-6">1</x-form.switch>
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
