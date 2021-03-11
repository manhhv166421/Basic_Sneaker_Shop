@extends('master')
@section('content')
@include('menu')
<div id="wp-content">
    <div class="container">
        <div class="topNewProduct">
            <h1>THƯƠNG HIỆU ADIDAS</h1>
            <ul class="listNewProduct d-flex">
                @foreach($adidas_product as $adidas)
                    <li>
                        <div class="boxProduct">
                            <div class="productHeader">
                                <a href="ordered">
                                    <img src="source/assets/img/images/{{$adidas->image_1}}" alt="" class="mainImg">
                                    <img src="source/assets/img/images/{{$adidas->image_2}}" alt="" class="subImg">
                                </a>
                            </div>
                            <div class="productBody">
                                <h3>
                                    <a href="ordered">
                                        {{$adidas->name}}
                                    </a>
                                </h3>
                                <span class="price">
                                    {{$adidas->price}}đ
                                </span>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection