<x-slot name="title">Profile</x-slot>
<x-slot name="header">Profile</x-slot>


<div class="section-body">
    <style>
        #profileImage{
            width: 120px;
            height: 120px;
        }
    </style>
    <!-- edit profile -->
    <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <form wire:submit.prevent="save" class="needs-validation"  enctype="multipart/form-data">

                    <div class="card-header">
                        <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <x-form.image imageId="profileImage" :src="asset($newAvatar? $newAvatar->temporaryUrl(): $currentItem->avatar)" wire:model.blur="newAvatar" name="newAvatar" :label="__('Profile')" wrapperClasses="col-12"/>

                            <x-form.input wire:model.blur="name" name="name" :label="__('Name')" :placeholder="__('Name')" wrapperClasses="col-6"/>
                            <x-form.input wire:model.blur="currentItem.email" name="currentItem.email" :label="__('Email')" :placeholder="__('Email')" wrapperClasses="col-6"/>
                            <x-form.input wire:model.blur="currentItem.username" name="currentItem.username" :label="__('User Name')" :placeholder="__('User Name')" wrapperClasses="col-6"/>
                            <x-form.input wire:model.blur="currentItem.phone" name="currentItem.phone" :label="__('Phone')" :placeholder="__('Phone')" wrapperClasses="col-6"/>


                        </div>

                    </div>
                    <div class="card-footer text-right">
                        <x-buttons.submit target="save" >{{ __('Save Changes') }}</x-buttons.submit>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /edit profile -->

    <!-- Updated Password -->
    @include('livewire.admin.profile.partials.update-password')
    <!-- /Updated Password -->

</div>
