<style type="text/css">
    .iti {
        position: relative;
        display: ;
    }
</style>
<link rel="stylesheet" href="{{ asset('userarea/build/css/intlTelInput.css') }}">
<div class="modal fade loginModal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header loginModalHeader">
                <h4>Log In / Sign Up</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-material" id="loginform" action="#">
                    <label class="label label-danger text-danger d-none error_message" style="margin-left: 20px">Wrong credentials</label>
                    <div class="loginForm">
                        <div class="fieldLog">
                            <p>Email</p>
                            <input class="form-control" type="text" name="email" required placeholder="Your email">
                        </div>
                        <div class="fieldLog">
                            <p class="forgotPassForm" id="forgotPassForm">Passwod <a href="#" style="color:#fece14;"><span>Forgot Password?</span></a></p>
                            <input class="form-control" type="password" name="password" required placeholder="Password">
                        </div>
                        <button class="btn btn-primary mt-2 login_button">
                            Login
                        </button>
                        <div class="fieldLog">
                            <p>Don't have an account? <a href="#" class="showSignUp" style="color:#fece14;"><b>Sign Up</b></a></p>
                        </div>
                    </div>
                </form>

                <form class="form-horizontal form-material d-none" id="signupform" action="#">
                    <label class="label label-danger text-danger reg_error_message" style="margin-left: 20px"></label>
                    <div class="loginForm">
                        <div class="fieldLog mb-2">
                          
                            <input class="form-control" type="text" required name="first_name" placeholder="Your name" required>
                        </div>
                        <div class="fieldLog mb-2">
                            
                            <input class="form-control" type="text" name="email" required placeholder="Your email">
                        </div>
                        <div class="fieldLog mb-2">
                            
                            <input class="form-control" id="phone" name="phone" type="tel" style="padding-left: 14%;" maxlength="18" required>
                        </div>
                        <div class="fieldLog mb-2">
                       
                            <input class="form-control" type="password" name="password" minlength="6" required placeholder="Password" required>
                        </div>
                        <div class="fieldLog mb-2">
                            
                            <input class="form-control" type="password" name="password" minlength="6" required placeholder="Confirm Password" required>
                        </div>
                        <button class="btn btn-primary loginButton mt-2 register">
                            Sign Up
                        </button>
                        <div class="fieldLog">
                            <p>Already have an account? <a href="#" class="showSignIn" style="color:#fece14;"><b>Sign In</b></a></p>
                        </div>
                    </div>
                </form>

                <form class="form-horizontal form-material d-none" id="forgotform" action="{{ route('userarea.register') }}" method="post">
                    @csrf
                    <div class="loginForm">
                        <div class="fieldLog">
                            <p>Email</p>
                            <input class="form-control" type="email" name="email" required placeholder="Your email">
                        </div>
                        <button class="loginButton mt-2" type="submit">Send Email</button>
                        <div class="fieldLog">
                            <p><a href="#" class="showSignIn" style="color:#fece14;"><b>Sign In</b></a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>