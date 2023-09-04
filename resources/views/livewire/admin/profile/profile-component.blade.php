<x-slot name="title">Profile</x-slot>

<div>
    <style>
        #profileImage{
            width: 120px;
            height: 120px;
        }
    </style>
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">

            <!-- edit profile -->
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-7">
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
    </section>
</div>
