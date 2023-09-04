<div class="row mt-sm-4">
    <div class="col-12 col-md-12 col-lg-7">
        <div class="card">
            <form wire:submit.prevent="savePassword" class="needs-validation" novalidate="" enctype="multipart/form-data">

                <div class="card-header">
                    <h4>Update Password</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <x-form.input wire:model.blur="password" name="password" type="password" :label="__('Password')" :placeholder="__('Password')" wrapperClasses="col-12"/>
                        <x-form.input wire:model.blur="password_confirmation" name="password_confirmation" type="password" :label="__('Password Confirmation')" :placeholder="__('Password Confirmation')" wrapperClasses="col-12"/>
                    </div>
                </div>

                <div class="card-footer text-right">
                    <x-buttons.submit target="savePassword" >{{ __('Save New Password') }}</x-buttons.submit>
                </div>
            </form>
        </div>
    </div>
</div>
