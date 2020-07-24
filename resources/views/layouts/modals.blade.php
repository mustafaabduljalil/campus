<!-- ModalLogin Box >>> Login as Student -->
<div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <div class="wm-modallogin-form wm-login-popup">
                    <span class="wm-color">Login</span>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <ul>
                            <li>
                                <input type="text" value="{{old('email')}}" name="email" placeholder="Enter Your E-mail">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </li>
                            <li>
                                <input type="password" name="password" placeholder="Enter Your Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </li>
{{--                            <li> <a href="#" class="wm-forgot-btn">Forgot Password?</a> </li>--}}
                            <li> <input type="submit" value="Login"> </li>
                        </ul>
                    </form>
{{--                    <span class="wm-color">or try our socials</span>--}}
{{--                    <ul class="wm-login-social-media">--}}
{{--                        <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>--}}
{{--                        <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>--}}
{{--                        <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>--}}
{{--                    </ul>--}}
{{--                    <p>Not a member yet? <a href="#">Sign-up Now!</a></p>--}}
                </div>
{{--                <div class="wm-modallogin-form wm-register-popup">--}}
{{--                    <span class="wm-color">create Your Account today</span>--}}
{{--                    <form>--}}
{{--                        <ul>--}}
{{--                            <li> <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>--}}
{{--                            <li> <input type="text" value="Your E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }"> </li>--}}
{{--                            <li> <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>--}}
{{--                            <li> <input type="text" value="Confirm Password" onblur="if(this.value == '') { this.value ='Confirm Password'; }" onfocus="if(this.value =='Confirm Password') { this.value = ''; }"> </li>--}}
{{--                            <li> <input type="submit" value="Create Account"> </li>--}}
{{--                        </ul>--}}
{{--                    </form>--}}
{{--                    <span class="wm-color">or signup with your socials:</span>--}}
{{--                    <ul class="wm-login-social-media">--}}
{{--                        <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>--}}
{{--                        <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>--}}
{{--                        <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>--}}
{{--                    </ul>--}}
{{--                    <p>Already a member? <a href="#">Sign-in Here!</a></p>--}}
{{--                </div>--}}

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- ModalLogin Box -->
<!-- ModalLogin Box >>> Login as Doctor -->
{{--<div class="modal fade" id="ModalLoginTwo" tabindex="-1" role="dialog">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-body">--}}

{{--                <div class="wm-modallogin-form wm-login-popup">--}}
{{--                    <span class="wm-color">Login as Instructor</span>--}}
{{--                    <form>--}}
{{--                        <ul>--}}
{{--                            <li> <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>--}}
{{--                            <li> <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>--}}
{{--                            <li> <a href="#" class="wm-forgot-btn">Forgot Password?</a> </li>--}}
{{--                            <li> <input type="submit" value="Sign In"> </li>--}}
{{--                        </ul>--}}
{{--                    </form>--}}
{{--                    <span class="wm-color">or try our socials</span>--}}
{{--                    <ul class="wm-login-social-media">--}}
{{--                        <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>--}}
{{--                        <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>--}}
{{--                        <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>--}}
{{--                    </ul>--}}
{{--                    <p>Not a member yet? <a href="#">Sign-up Now!</a></p>--}}
{{--                </div>--}}
{{--                <div class="wm-modallogin-form wm-register-popup">--}}
{{--                    <span class="wm-color">create Your Account today</span>--}}
{{--                    <form>--}}
{{--                        <ul>--}}
{{--                            <li> <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>--}}
{{--                            <li> <input type="text" value="Your E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }"> </li>--}}
{{--                            <li> <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>--}}
{{--                            <li> <input type="text" value="Confirm Password" onblur="if(this.value == '') { this.value ='Confirm Password'; }" onfocus="if(this.value =='Confirm Password') { this.value = ''; }"> </li>--}}
{{--                            <li> <input type="submit" value="Create Account"> </li>--}}
{{--                        </ul>--}}
{{--                    </form>--}}
{{--                    <span class="wm-color">or signup with your socials:</span>--}}
{{--                    <ul class="wm-login-social-media">--}}
{{--                        <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>--}}
{{--                        <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>--}}
{{--                        <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>--}}
{{--                    </ul>--}}
{{--                    <p>Already a member? <a href="#">Sign-in Here!</a></p>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="clearfix"></div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- ModalLogin Box -->
<div class="btn to-top-btn hidden-xs hidden-sm">
    <i class="wmicon-arrows5"></i>
</div>
