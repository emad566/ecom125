<x-slot name="title">{{ __('Profile') }}</x-slot>


<div>
    <div class="dashboard_content mt-2 mt-md-0">
        <h3><i class="far fa-user"></i> profile</h3>
        <div class="wsus__dashboard_profile">
            <div class="wsus__dash_pro_area">
                <h4>basic information</h4>
                <form wire:submit.prevent="save">
                    <div class="row">

                        <div class="col-xl-9">
                            <div class="row">
                                <x-vendor.form.input-icon wire:model="name" name="name" icon="fas fa-user-tie" :placeholder="__('Name')"/>
                                <x-vendor.form.input-icon wire:model="currentItem.username" name="currentItem.username" icon="fas fa-user-tie" :placeholder="__('User Name')"/>
                                <x-vendor.form.input-icon wire:model="currentItem.phone" name="currentItem.phone" icon="fas fa-phone-alt" :placeholder="__('Phone')"/>
                                <x-vendor.form.input-icon wire:model="currentItem.email" name="currentItem.email" type="email" icon="fal fa-envelope-open" :placeholder="__('Email')"/>
                                <x-vendor.form.textarea wire:model="about" name="about" cols="3" rows="5"  :placeholder="__('About You')"/>
                            </div>
                        </div>


                        <div class="col-xl-3 col-sm-6 col-md-6">
                            <label for="newAvatar">
                                <div class="wsus__dash_pro_img">
                                    <img src="{{ asset($newAvatar? $newAvatar->temporaryUrl(): $currentItem->avatar) }}" alt="img" style="height: 280px !important; " class="img-fluid w-100">
                                    <input wire:model.blur="newAvatar" name="newAvatar" id="newAvatar" type="file">
                                </div>
                            </label>
                            @if($errors->first('newAvatar')) <span class="form-text text-danger">{{ $errors->first('newAvatar') }}</span> @endif
                        </div>

                        <div class="col-xl-12">
                            <x-buttons.submit target="save" class="common_btn mb-4 mt-2" wrapperClasses="d-flex justify-content-start" >{{ __('Save') }}</x-buttons.submit>
                        </div>
                    </div>
                </form>
                        <hr/>

                <form wire:submit.prevent="savePassword">
                    <div class="row">
                        <div class="wsus__dash_pass_change mt-2">
                            <div class="row">
                                <x-vendor.form.input-icon wire:model="currentPassword" name="currentPassword" type="password" wrapperClasses="col-xl-4 col-md-6" icon="fas fa-unlock-alt" :placeholder="__('Current Password')"/>
                                <x-vendor.form.input-icon wire:model="password" name="password" type="password" wrapperClasses="col-xl-4 col-md-6" icon="fas fa-lock-alt" :placeholder="__('New Password')"/>
                                <x-vendor.form.input-icon wire:model="password_confirmation" name="password_confirmation" type="password" wrapperClasses="col-xl-4 col-md-6" icon="fas fa-lock-alt" :placeholder="__('Confirm Password')"/>

                                <div class="col-xl-12">
                                    <x-buttons.submit target="savePassword" class="common_btn" wrapperClasses="d-flex justify-content-start" >{{ __('Save Password') }}</x-buttons.submit>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
