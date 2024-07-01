@extends('layout.master')

@section('title')
Tin Tức
@endsection

@section('content')
@include('layout.navigation2')
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="trang-chu">Trang chủ</a></li>
            <li class="active">Tin tức</li>
        </ul>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="order-summary clearfix">
                    <div class="section-title">
                        <h4 class="title">Danh mục tin tức</h4>
                    </div>
                    <div class="news-container">
                        <ul class="news-ul">
                            @foreach($categoryNews as $categoryNew)
                            <li><a href="tin-tuc/danh-muc/{{$categoryNew->id}}">{{$categoryNew->name}}</a></li>
                            @endforeach
                        </ul>
                        <div class="cell-bg">
                            <a href="#"> <img src="../img/new-bg.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-xs-12">
                <div class="order-summary clearfix">
                    <div class="section-title">
                        <h4 style="margin-top: 12px;" class="title"></h4>
                    </div>

                    <div class="news-container-second">
                        @foreach($new as $value)
                        <div class="row">
                            <div class="col-md-4 col-sm-5 col-xs-12 new-col-img">
                                <a href="tin-tuc/chi-tiet/{{$value->id}}"> <img src="../upload/new/{{$value->image}}" alt=""></a>
                            </div>
                            <div class="col-md-8 col-sm-7 col-xs-12 new-col-p">
                                <a href="tin-tuc/chi-tiet/{{$value->id}}">
                                    <h3>{{$value->title}}</h3>
                                </a>
                                <div class="new-widt">
                                    <p class="knswli-right">{{$value->info}}</p>
                                    <span>Đăng ngày</a> - <span>{{ date('d-m-Y',strtotime($value->created_at))}}</span>
                                        <p class="next-p"><a href="tin-tuc/chi-tiet/{{$value->id}}">Xem tiếp >></a></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection