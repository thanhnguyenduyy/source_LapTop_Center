@extends('layout.master')

@section('title')
Giới thiệu
@endsection

@section('content')
@include('layout.navigation2')

<div id="breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="trang-chu">Trang chủ</a></li>
			<li class="active">Giới thiệu</li>
		</ul>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 style="margin-bottom: -10px;">{{$gioiThieu[0]->title_gioithieu}}</h1><br><br><br>
				{!! $gioiThieu[0]->gioithieu !!}
			</div>
		</div>
	</div>
</div>
@endsection