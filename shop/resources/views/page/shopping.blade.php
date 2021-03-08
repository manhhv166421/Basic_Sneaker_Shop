@extends('master')
@section('content')
@include('menu')
<div id="wrapper">
	<div id="wp-content">
	    <div class="shopping-cart">
	        <div class="px-4 px-lg-0">
	            <div class="pb-5">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

	                            <!-- Shopping cart table -->
	                            <div class="table-responsive">
	                                <table class="table">
	                                    <thead>
	                                        <tr>
	                                            <th scope="col" class="border-0 bg-light">
	                                                <div class="p-2 px-3 text-uppercase">Sản phẩm</div>
	                                            </th>
	                                            <th scope="col" class="border-0 bg-light">
	                                                <div class="py-2 text-uppercase">Giá</div>
	                                            </th>
	                                            <th scope="col" class="border-0 bg-light">
	                                                <div class="py-2 text-uppercase">Số lượng</div>
	                                            </th>
	                                            <th scope="col" class="border-0 bg-light">
	                                                <div class="py-2 text-uppercase">Xoá</div>
	                                            </th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                            <th scope="row" class="border-0">
	                                                <div class="p-2">
	                                                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-1_zrifhn.jpg"
	                                                        alt="" width="70" class="img-fluid rounded shadow-sm">
	                                                    <div class="ml-3 d-inline-block align-middle">
	                                                        <h5 class="mb-0"> <a href="#"
	                                                                class="text-dark d-inline-block align-middle">Timex
	                                                                Unisex
	                                                                Originals</a></h5><span
	                                                            class="text-muted font-weight-normal font-italic d-block">Category:
	                                                            Watches</span>
	                                                    </div>
	                                                </div>
	                                            </th>
	                                            <td class="border-0 align-middle"><strong>$79.00</strong></td>
	                                            <td class="border-0 align-middle quantity"><strong>3</strong></td>
	                                            <td class="border-0 align-middle"><a href="#" class="text-dark"><i
	                                                        class="fa fa-trash"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr>
	                                            <th scope="row">
	                                                <div class="p-2">
	                                                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-3_cexmhn.jpg"
	                                                        alt="" width="70" class="img-fluid rounded shadow-sm">
	                                                    <div class="ml-3 d-inline-block align-middle">
	                                                        <h5 class="mb-0"><a href="#"
	                                                                class="text-dark d-inline-block">Lumix camera
	                                                                lense</a></h5>
	                                                        <span
	                                                            class="text-muted font-weight-normal font-italic">Category:
	                                                            Electronics</span>
	                                                    </div>
	                                                </div>
	                                            </th>
	                                            <td class="align-middle"><strong>$79.00</strong></td>
	                                            <td class="align-middle quantity"><strong>3</strong></td>
	                                            <td class="align-middle"><a href="#" class="text-dark"><i
	                                                        class="fa fa-trash"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr>
	                                            <th scope="row">
	                                                <div class="p-2">
	                                                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-2_qxjis2.jpg"
	                                                        alt="" width="70" class="img-fluid rounded shadow-sm">
	                                                    <div class="ml-3 d-inline-block align-middle">
	                                                        <h5 class="mb-0"> <a href="#"
	                                                                class="text-dark d-inline-block">Gray Nike
	                                                                running shoe</a>
	                                                        </h5><span
	                                                            class="text-muted font-weight-normal font-italic">Category:
	                                                            Fashion</span>
	                                                    </div>
	                                                </div>
	                                            <td class="align-middle"><strong>$79.00</strong></td>
	                                            <td class="align-middle"><strong>3</strong></td>
	                                            <td class="align-middle"><a href="#" class="text-dark"><i
	                                                        class="fa fa-trash"></i></a>
	                                            </td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                            </div>
	                            <!-- End -->
	                        </div>
	                    </div>

	                    <div class="row py-5 p-4 bg-white rounded shadow-sm">
	                        <div class="col-lg-6">
	                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Mã giảm
	                                giá</div>
	                            <div class="p-4">
	                                <p class="font-italic mb-4">Nếu bạn có mã giảm giá, xin hãy điền mã giảm giá vào
	                                    ô bên dưới</p>
	                                <div class="input-group mb-4 border rounded-pill p-2">
	                                    <input type="text" placeholder="Điền mã giảm giá"
	                                        aria-describedby="button-addon3" class="form-control border-0 ">
	                                    <div class="input-group-append border-0">
	                                        <button id="button-addon3" type="button"
	                                            class="btn btn-dark px-4 rounded-pill apply-coupon"><i
	                                                class="fa fa-gift mr-2"></i>Điền mã giảm giá</button>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-lg-6">
	                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Đơn
	                                hàng </div>
	                            <div class="p-4">
	                                <p class="font-italic mb-4">Phí vận chuyển và chi phí bổ sung được tính dựa trên
	                                    các giá trị bạn đã
	                                    nhập.</p>
	                                <ul class="list-unstyled mb-4">
	                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong
	                                            class="text-muted">Tạm tính
	                                        </strong><strong>$390.00</strong></li>
	                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong
	                                            class="text-muted">Phí giao
	                                            hàng</strong><strong>$10.00</strong></li>
	                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong
	                                            class="text-muted">Thuế</strong><strong>$0.00</strong></li>
	                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong
	                                            class="text-muted">Tổng
	                                            tiền</strong>
	                                        <h5 class="font-weight-bold">$400.00</h5>
	                                    </li>
	                                </ul><a href="#"
	                                    class="btn btn-dark rounded-pill py-2 btn-block check-out">Thanh toán
	                                    nè!!!!!!</a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div
@endsection