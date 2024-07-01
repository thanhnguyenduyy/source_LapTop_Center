@extends('layout.master')

@section('title')
Đơn hàng
@endsection

@section('content')
@include('layout.navigation2')

<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="trang-chu">Trang chủ</a></li>
            <li class="active">Đơn hàng</li>
        </ul>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="order-summary clearfix">
                    @if(isset($donHang) >1)
                    <table class="shopping-cart-table table">
                        <thead>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Số lượng</th>
                                <th>Giá tiền</th>
                                <th>Tổng cộng</th>
                                <th>Trạng thái</th>
                                <th>Ngày mua hàng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($donHang as $value)
                            <tr>
                                <td class="thumb"><?php echo \App\Product::find($value->id_product)->name ?></td>
                                <td class="thumb"><img src="../upload/product/<?php echo \App\ImageProduct::find($value->id_product)->name ?>" alt=""></td>
                                <td class="details">{{$value->quantity}}</td>
                                <td>{{$value->unit_price}}</td>
                                <td>{{$value->total}}</td>
                                <td>
                                    @if($value->status == 0)
                                    Đang xử lý
                                    @else
                                    Đang giao hàng
                                    @endif
                                </td>
                                <td>{{date('d-m-Y', strtotime($value->created_at))}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <p style="text-align: center; font-size: 18px; font-weight: bold;">Bạn chưa có sản phẩm trong giỏ hàng.</p>
                    @endif

                    <div class="pull-right">
                        <a href="/" class="primary-btn" style="cursor: pointer;">Tiếp tục mua hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection