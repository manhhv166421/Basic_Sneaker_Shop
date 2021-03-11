@extends('master')
@section('content')
@include('menu')
<div id="wp-content">
    <div id="order">
        <div class="tool-bar">
            <nav>
                <a href="./index.html">Trang chủ</a>
                <i class="fas fa-chevron-right"></i>
                <a href="">Giày</a>
                <i class="fas fa-chevron-right"></i>
                <a href="">Giày khi click</a>
            </nav>
        </div>
        <div id="main-ordered">
            <div class="product">
                <div class="sub-thumbnail-product">
                    <div class="sub-thumnail">

                    </div>
                    <div class="sub-thumnail">

                    </div>
                    <div class="sub-thumnail">

                    </div>
                    <div class="sub-thumnail">

                    </div>
                    <div class="sub-thumnail">

                    </div>
                </div>
                <div class="main-thumbnal-product">
                    <div class="main-thumbnail">

                    </div>
                </div>
            </div>
            <div class="product-order">
                <div class="variations_form-cart">
                    <h1 class="title-product">
                        Giày Thể Thao XSPORT Yeezy Boost REP
                    </h1>
                    <p class="detail-product">
                        Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ
                        bền cao. Dễ phối đồ.
                    </p>
                    <div class="price">
                        <del>
                            <span class="old-price">8.000.000đ</span>
                        </del>
                        <ins>
                            <span class="new-price">500.000đ</span>
                        </ins>
                    </div>
                    <div class="color-product">
                        <h3>Màu sắc</h3>
                        <div class="box-color">
                            <div class="color"></div>
                            <div class="color"></div>
                            <div class="color"></div>
                        </div>
                    </div>
                    <div class="size-product">
                        <h3>Kích cỡ</h3>
                        <div class="box-size">
                            <div class="size">
                                <label for="">36</label>
                            </div>
                            <div class="size">37</div>
                            <div class="size">38</div>
                            <div class="size">39</div>
                            <div class="size">40</div>
                            <div class="size">41</div>
                            <div class="size">42</div>
                        </div>
                    </div>
                    <div class="buy">
                        <a href="shopping-cart.html">
                            <button type="submit" class="buy-now">
                                <p>Mua ngay</p>
                                <span>Giao hàng tận nhà - Đổi trả dễ dàng</span>
                            </button>
                        </a>

                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion-body">
                        <h2>
                            Chính sách giao hàng đổi trả
                        </h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection