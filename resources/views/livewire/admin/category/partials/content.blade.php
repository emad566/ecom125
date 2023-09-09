<div class="card col-12">
    <div class="card-header">{{ __('Manage Categories') }}</div>

    <div class="card-body ">
        <form wire:submit.prevent= @if($is_edit) "update" @else "save" @endif  >
            <div class="row col-12">
                <div class="col-lg-1 col-md-6 mt-10">
                    <label>Icon
                        <div>
                                <button id="iconPicker" class="btn btn-primary" data-icon="{{$currentItem?->icon}}" data-selected-class="btn-danger"
                                    data-unselected-class="btn-info" role="iconpicker" name="icon" >
                                    <i class="{{$currentItem?->icon}}"></i><input type="hidden" name="icon" value="{{$currentItem?->icon}}">
                                    @if($currentItem?->icon) <span class="caret"></span> @endif
                                </button>
                        </div>
                    </label>
                </div>



                <x-form.input  wire:model.blur="currentItem.name" name="currentItem.name" :label="__('Name')" :placeholder="__('Name')" wrapperClasses="col-lg-3 col-md-6 mt-10"/>
                <x-form.input  wire:model.blur="currentItem.slug" name="currentItem.slug" :label="__('Slug')" :placeholder="__('Slug')" wrapperClasses="col-lg-3 col-md-6 mt-10"/>
                <div class="card-header col-lg-2 col-md-6 mt-10 ">
                    <x-buttons.submit target="save" >+ {{ __($is_edit? 'Update' : 'Add') }}</x-buttons.submit>
                </div>

                @if($is_edit)
                    <div class="card-header col-lg-2 col-md-6 mt-10 ">
                        <x-buttons.save wire:click="cancel" class="btn-danger btn" target="cancel" x-on:click="show=false">{{ __('Cancel') }}</x-buttons.save>
                    </div>
                @endif
            </div>
        </form>

        <div class="col-12">
            <ul class="drag">
                <x-categories.cat-list :items="$items"/>
            </ul>
        </div>
    </div>

</div>


@include('livewire.admin.category.partials.styles')
