@extends('master')
@section('content')
@include('menu')
<div id="wp-content">
    <div class="container">
        <div class="topNewProduct">
            <h1>THƯƠNG HIỆU OTHERS</h1>
            <ul class="listNewProduct d-flex">
                @foreach($others_product as $others)
                    <li>
                        <div class="boxProduct">
                            <div class="productHeader">
                                <a href="ordered">
                                    <img src="source/assets/img/images/{{$others->image_1}}" alt="" class="mainImg">
                                    <img src="source/assets/img/images/{{$others->image_2}}" alt="" class="subImg">
                                </a>
                            </div>
                            <div class="productBody">
                                <h3>
                                    <a href="ordered">
                                        {{$others->name}}
                                    </a>
                                </h3>
                                <span class="price">
                                    {{$others->price}}đ
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