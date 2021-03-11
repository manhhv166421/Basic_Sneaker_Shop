@extends('master')
@section('content')
    <div id="wp-content">
        <div id="login">
            <div class="box-login">
                <h1 class="login">Login</h1>
                <div class="login-box-content">
                    <div class="login-social">
                        <div class="facebook">
                            <a href="" class="facebook-link">
                                <i class="fab fa-facebook-f "></i>Đăng nhập bằng Facebook
                            </a>
                        </div>
                        <div class="google">
                            <a href="" class="google-link">
                                <i class="fab fa-google"></i>Đăng nhập bằng Google
                            </a>
                        </div>
                    </div>
                    <form action="" id="form-login">
                        <input type="email" name="email" id="email" placeholder="Email">
                        <input type="password" name="password" id="password" placeholder="Password">
                        <button type="submit">Login</button>
                        <div class="sub">
                            <div class="remember">
                                <input type="checkbox" name="remember" id="remember"> Remember
                            </div>
                            <a href="" class="forgot">Forgot password?</a>
                        </div>
                    </form>
                </div>
                <div class="login-box-footer">
                    <p>Don't you have an account?</p>
                    <a href="./register.html">Register</a>
                </div>
            </div>
        </div>
    </div>
@endsection