<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="source/assets/fonts/fontawesome-free-5.15.1-web/css/all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="source/assets/css/reset.css">
    <link rel="stylesheet" href="source/assets/css/global.css">
    <link rel="stylesheet" href="source/assets/css/main.css">
</head>

<body>
    <div id="wrapper">
        @include('header')
        <!-- End header -->
        @yield('content')
    </div>
    <!-- End wp-content -->
        @include('footer')
    <!-- End footer -->
</body>

</html>