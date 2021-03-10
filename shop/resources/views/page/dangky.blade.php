@extends('master')
@section('content')
        <div id="wp-content">
            <div id="register">
                <div class="box-register">
                    <div class="register">
                        <h1 class="regis-header">Đăng ký tài khoản</h1>
                        <form action="" id="regis-body">
                            <input type="text" name="user-name" id="name" placeholder="Fullname">
                            <input type="email" name="email" id="email" placeholder="Email">
                            <div class="pass">
                                <input type="password" name="pass" id="pass" placeholder="Password">
                                <input type="password" name="confirm-pass" id="confirm-pass"
                                    placeholder="Confirm password">
                            </div>
                            <button type="submit">
                                Đăng ký tài khoản
                            </button>
                        </form>
                        <div class="regis-footer">
                            <p>Bạn đã có tài khoản???</p>
                            <a href="./login.html">Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
        