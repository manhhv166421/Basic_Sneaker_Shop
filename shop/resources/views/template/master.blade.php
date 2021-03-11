<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
   <link rel="stylesheet" href="{{asset('{{asset('source/assets/fonts/fontawesome-free-5.15.1-web/css/all.css)}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('source/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('source/assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('source/assets/css/global.css')}}">
    <link rel="stylesheet" href="{{asset('source/assets/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('source/assets/css/style-login.css')}}">
    <link rel="stylesheet" href="{{asset('source/assets/css/style-register.css')}}">
    <link rel="stylesheet" href="{{asset('source/assets/fonts/fontawesome-free-5.15.1-web/css/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('source/assets/css/shopping-cart/-Login-form-Page-BS4-.css')}}">
    <link rel="stylesheet" href="{{asset('source/assets/css/shopping-cart/Elegant-Registration-Form.css')}}">
    <link rel="stylesheet" href="{{asset('source/assets/css/shopping-cart/Login-Box-En.css')}}">
    <link rel="stylesheet" href="{{asset('source/assets/css/shopping-cart/style-shopping.css')}}">
    <link rel="stylesheet" href="{{asset('source/assets/css/style-order.css')}}">
    <link rel="stylesheet" href="{{asset('source/assets/css/style-info.css')}}">
</head>

<body>
    @include('include.header')
    <!-- End header -->
    @yield('content')
    <!-- End wp-content -->
    @include('include.footer')
    <!-- End footer -->
</body>

</html>
