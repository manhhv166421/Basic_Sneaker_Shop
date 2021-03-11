@extends('master')
@section('content')
@include('menu')
<div class="container">
    <div class="banner">
        <img src="source/assets/img/banner.png" alt="">
    </div>
    <div class="policy">
        <div class="boxPolicyItem d-flex justify-content-between">
            <div class="policyItem">
                <img src="source/assets/img/iconfinder_truck_1291768-1.png" alt="">
                <h3>Giao hàng toàn quốc</h3>
                <p>Vận Chuyển khắp Việt Nam</p>
            </div>
            <div class="policyItem">
                <img src="source/assets/img/iconfinder_payment_1954199-3.png" alt="">
                <h3>Thanh toán khi nhận hàng</h3>
                <p>Nhận hàng tại nhà rồi thanh toán</p>
            </div>
            <div class="policyItem">
                <img src="source/assets/img/iconfinder_service_repair_phone_mobile_wrench_screw_driver_4014703-1.png"
                    alt="">
                <h3>Bảo hành dài hạn</h3>
                <p>Bảo hành lên đến 60 ngày</p>
            </div>
            <div class="policyItem">
                <img src="source/assets/img/iconfinder_refresh_3017918-1.png" alt="">
                <h3>Đổi trả dễ dàng</h3>
                <p>Đổi hàng thoải mái trong 30 ngày </p>
            </div>
        </div>
    </div>
</div>
  <!-- End banner -->
<div id="wp-content">
    <div class="container">
        <div class="topNewProduct">
            <h1>Top những sản phẩm mới</h1>
            <ul class="listNewProduct d-flex">
                @foreach($new_product as $new)
                    <li>
                        <div class="boxProduct">
                            <div class="productHeader">
                                <a href="ordered">
                                    <img src="source/assets/img/images/{{$new->image_1}}" alt="" class="mainImg">
                                    <img src="source/assets/img/images/{{$new->image_2}}" alt="" class="subImg">
                                </a>
                            </div>
                            <div class="productBody">
                                <h3>
                                    <a href="ordered">
                                       {{$new->name}}
                                    </a>
                                </h3>
                                <span class="price">
                                    {{$new->price}}đ
                                </span>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <!--<div class="row">{{$new_product->links()}}</div>-->
        </div>
        <div class="topSellProduct">
            <h1>Top sản phẩm hot</h1>
            <ul class="listNewProduct d-flex">
                @foreach($top_product as $top) 
                <li>
                    <div class="boxProduct">
                        <div class="productHeader">
                            <a href="ordered">
                                <img src="source/assets/img/images/{{$top->image_1}}" alt="" class="mainImg">
                                <img src="source/assets/img/images/{{$top->image_2}}" alt="" class="subImg">
                            </a>
                        </div>
                        <div class="productBody">
                            <h3>
                                <a href="ordered">
                                    {{$top->name}}
                                </a>
                            </h3>
                            <span class="price">
                                {{$top->price}}đ
                            </span>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- End product -->
@endsection
