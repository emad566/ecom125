<x-slot name="title">login</x-slot>

<div>
    <!--============================
       LOGIN/REGISTER PAGE START
    ==============================-->
    <section id="wsus__login_register">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__login_reg_area">
                        <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab2" data-bs-toggle="pill"
                                        data-bs-target="#pills-homes" type="button" role="tab" aria-controls="pills-homes"
                                        aria-selected="true">login</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab2" data-bs-toggle="pill"
                                        data-bs-target="#pills-profiles" type="button" role="tab"
                                        aria-controls="pills-profiles" aria-selected="true">signup</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent2">
                            <div class="tab-pane fade show active" id="pills-homes" role="tabpanel"
                                 aria-labelledby="pills-home-tab2">
                                <div class="wsus__login">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="wsus__login_input">
                                            <i class="fas fa-user-tie"></i>
                                            <input type="emai" name="email" value="{{old('email')}}" placeholder="Email" >
                                        </div>
                                        @if($errors?->has('email'))
                                            <div class="invalid-feedback d-block">
                                                {{$errors->get('email')[0]}}
                                            </div>
                                        @endif

                                        <div class="wsus__login_input">
                                            <i class="fas fa-key"></i>
                                            <input type="password" name="password" value="{{old('password')}}" placeholder="Password">
                                        </div>
                                        @if($errors?->has('password'))
                                            <div class="invalid-feedback d-block">
                                                {{$errors->get('password')[0]}}
                                            </div>
                                        @endif

                                        <div class="wsus__login_save">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                       id="flexSwitchCheckDefault" name="remember">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Remember
                                                    me</label>
                                            </div>
                                            <a class="forget_p" href="forget_password.html">forget password ?</a>
                                        </div>
                                        <button class="common_btn" type="submit">login</button>
                                        <p class="social_text">Sign in with social account</p>
                                        <ul class="wsus__login_link">
                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profiles" role="tabpanel"
                                 aria-labelledby="pills-profile-tab2">
                                <div class="wsus__login">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="wsus__login_input">
                                            <i class="fas fa-user-tie"></i>
                                            <input type="text" name="name" value="{{old('name')}}" placeholder="Name" required autofocus autocomplete="name">
                                        </div>
                                        @if($errors?->has('name'))
                                            <div class="invalid-feedback d-block">
                                                {{$errors->get('name')[0]}}
                                            </div>
                                        @endif

                                        <div class="wsus__login_input">
                                            <i class="far fa-envelope"></i>
                                            <input type="text"  name="email" value="{{old('email')}}"  placeholder="Email" required autocomplete="username">
                                        </div>
                                        @if($errors?->has('email'))
                                            <div class="invalid-feedback d-block">
                                                {{$errors->get('email')[0]}}
                                            </div>
                                        @endif

                                        <div class="wsus__login_input">
                                            <i class="fas fa-key"></i>
                                            <input type="password" name="password" placeholder="Password" required autocomplete="new-password">
                                        </div>
                                        @if($errors?->has('password'))
                                            <div class="invalid-feedback d-block">
                                                {{$errors->get('password')[0]}}
                                            </div>
                                        @endif

                                        <div class="wsus__login_input">
                                            <i class="fas fa-key"></i>
                                            <input type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password" >
                                        </div>
                                        @if($errors?->has('password_confirmation'))
                                            <div class="invalid-feedback d-block">
                                                {{$errors->get('email')[0]}}
                                            </div>
                                        @endif

                                        <div class="wsus__login_save">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                       id="flexSwitchCheckDefault03">
                                                <label class="form-check-label" for="flexSwitchCheckDefault03">I consent
                                                    to the privacy policy</label>
                                            </div>
                                        </div>
                                        <button class="common_btn" type="submit">signup</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
       LOGIN/REGISTER PAGE END
    ==============================-->
</div>
