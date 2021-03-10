@extends('master')
@section('content')
@include('menu')
<div id="wp-content">
    <div id="info" class="container">
        <div class="box">
            <h1>Thông tin cá nhân</h1>
            <form action="" class="info">
                <div class="form-group">
                    <label for="" class="right">
                        Họ và tên
                    </label>
                    <input type="text" name="" id="" class="userName">
                </div>
                <div class="form-group">
                    <label for="" class="right">
                        Email
                    </label>
                    <input type="emial" name="" id="" class="email">
                </div>
                <div class="form-group">
                    <label for="" class="right">
                        Số điện thoại
                    </label>
                    <input type="text" name="" id="" class="phoneNumber">
                </div>
                <div class="form-group">
                    <label for="" class="right">
                        Địa chỉ
                    </label>
                    <input type="text" name="" id="" class="address">
                </div>
                <div class="form-group">
                    <label for="" class="right"></label>
                    <button type="submit">
                        Cập nhật
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
    <!-- End wp-content -->
@endsection