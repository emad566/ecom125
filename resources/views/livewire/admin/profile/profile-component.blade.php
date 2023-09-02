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
                        <form action="{{route('admin.profile.update')}}" method="post" class="needs-validation"
                              novalidate="" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="card-header">
                                <h4>Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12 col-sm-12 col-lg-12 mb-4 mb-md-0">
                                        <label for="profileImageInput">
                                            <div class="avatar-item">
                                                <img id="profileImage" width="150" height="150" alt="image"
                                                     src="{{$user->profile_image_path()}}" class="img-fluid"
                                                     data-toggle="tooltip" title=""
                                                     data-original-title="Edit Profile">
                                                <div class="avatar-badge" title="" data-toggle="tooltip"
                                                     data-original-title="Editor"><i class="fas fa-edit"></i></div>
                                            </div>
                                        </label>
                                        @if($errors?->has('image'))
                                            <div class="invalid-feedback d-block">
                                                {{$errors->get('image')[0]}}
                                            </div>
                                        @endif
                                        <x-dashboard.form-label-input
                                            name="image" label="" id="profileImageInput" name="image"
                                            :errors="$errors" type="file" :old="old('image')" :value="$user->image"
                                            attribute="onchange=readURL(this,'profileImage');" :hidden="true"
                                        />
                                    </div>


                                    <x-dashboard.form-label-input name="name" label="Name" :errors="$errors"
                                                                  required="required" :old="old('name')"
                                                                  :value="$user->name"/>
                                    <x-dashboard.form-label-input name="email" label="Email" :errors="$errors"
                                                                  required="required" :old="old('email')"
                                                                  :value="$user->email"/>
                                    <x-dashboard.form-label-input name="username" label="User Name"
                                                                  :errors="$errors" required="required"
                                                                  :old="old('username')" :value="$user->username"/>
                                    <x-dashboard.form-label-input name="phone" label="Phone" :errors="$errors"
                                                                  required="required" :old="old('phone')"
                                                                  :value="$user->phone"/>

                                </div>

                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /edit profile -->

            <!-- Updated Password -->
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form action="{{route('admin.profile.password.update')}}" method="post"
                              class="needs-validation" novalidate="" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="card-header">
                                <h4>Update Password</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">

                                    <x-dashboard.form-label-input type="password" name="password" label="Password"
                                                                  :errors="$errors" required="required"
                                                                  :old="old('password')"/>
                                    <x-dashboard.form-label-input type="password" name="password_confirmation"
                                                                  label="Confirm Password" :errors="$errors"
                                                                  required="required" :old="old('password')"/>

                                </div>
                            </div>

                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Updated Password -->

        </div>
    </section>
</div>
