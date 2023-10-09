<form wire:submit="save"   x-show="show" x-on:alert-saved.window="show=false">
    <x-modal.dialog>
        <x-slot name="title">{{__($is_edit? 'Edit' : 'Add')}}: {{ $currentItem->name }} </x-slot>
        <x-slot name="content">
            <x-snippets.loading wire:target="edit" />
            <div class="row">
                <x-form.input wire:model.blur="name" name="name" :label="__('Name')" :placeholder="__('Name')" wrapperClasses="col-12"/>
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
