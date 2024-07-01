@extends('admin.layout.master')

@section('title')
Bảng điều khiển
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Bảng điều khiển
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard active"></i> Bảng điều khiểu</li>
        </ol>
        @if (session('error'))
        <div class="alert alert-error">
            {{Session('error')}}
        </div>
        @endif
    </section>

    <section class="content">
        <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-user"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Tổng nhà cung cấp</span>
                        <span class="info-box-number">{{$nhacungcap[0]->nhacungcap_count}}</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-line-chart"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Dữ liệu:</span>
                        <span class="info-box-text" style="float: left; margin-top: 5px;">Tổng sản phẩm:</span>
                        <span class="info-box-number" style="margin-top: 2px;margin-left: 115px;">{{$product[0]->product_count}}</span>
                        <span class="info-box-text" style="float: left; margin-top: 5px;">Tổng số bài viết:</span>
                        <span class="info-box-number" style="margin-top: 2px;margin-left: 120px;">{{$new[0]->new_count}}</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Tổng số khách hàng</span>
                        <span class="info-box-number">{{$user[0]->user_count}}</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Doanh thu:</span>
                        <span class="info-box-text" style="float: left; margin-top: 5px;">Đã xử lý:</span>
                        <span class="info-box-number" style="margin-top: 2px;margin-left: 65px;">{{$dathanhtoan[0]->sum_bill}} đ</span>
                        <span class="info-box-text" style="float: left; margin-top: 5px;">Chưa xử lý:</span>
                        <span class="info-box-number" style="margin-top: 2px;margin-left: 75px;">{{$dangxuly[0]->sum_bill}} đ</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container-fluid">
                <img style="width: 100%;height: 100%;" src="/public/upload/backgroud-laptop.png" alt="">
            </div>
        </div>

    </section>
</div>
@endsection