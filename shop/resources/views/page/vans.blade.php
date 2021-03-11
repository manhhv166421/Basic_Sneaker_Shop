@extends('master')
@section('content')
@include('menu')
<div id="wp-content">
    <div class="container">
        <div class="topNewProduct">
            <h1>THƯƠNG HIỆU VANS</h1>
            <ul class="listNewProduct d-flex">
                @foreach($vans_product as $vans)
                    <li>
                        <div class="boxProduct">
                            <div class="productHeader">
                                <a href="ordered">
                                    <img src="source/assets/img/images/{{$vans->image_1}}" alt="" class="mainImg">
                                    <img src="source/assets/img/images/{{$vans->image_2}}" alt="" class="subImg">
                                </a>
                            </div>
                            <div class="productBody">
                                <h3>
                                    <a href="ordered">
                                        {{$vans->name}}
                                    </a>
                                </h3>
                                <span class="price">
                                    {{$vans->price}}đ
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