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
            <li><a href="tin-tuc">Tin tức</a></li>
            <li class="active">Chi tiết tin tức</li>
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
                            <a href="#"> <img src="../img/new-bgg.png" alt=""></a>
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
                        <h3>{{$detailNew[0]->title}}</h3>
                        <p style="float: left; text-transform: uppercase; font-style: italic; font-weight: bold;color:#cd1818;padding-right: 10px;">Thanh Duy</p>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> {{-- {{$detailNew[0]->date}} ngày trước --}}
                            {{ date('d-m-Y',strtotime($detailNew[0]->created_at))}}
                        </p>
                        <h4>{{$detailNew[0]->info}}</h4>
                        {!! $detailNew[0]->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection