@extends('layout.master')

@section('title')
	Liên hệ
@endsection

@section('content')
	@include('layout.navigation2')

	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="trang-chu">Trang chủ</a></li>
				<li class="active">Liên hệ</li>
			</ul>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3><i class="fa fa-info-circle"></i> {{$lienHe[0]->title_lienhe}}</h3>
						    
	                <div class="break"></div>
				   	<h4><i class= "fa fa-home"></i> Địa chỉ: <small>{{$lienHe[0]->diachi}}</small></h4>

	                <h4><i class="fa fa-envelope"></i> Email : <small>{{$lienHe[0]->email}}</small></h4>

	                <h4><i class="fa fa-phone"></i> Điện thoại: <small>{{$lienHe[0]->phone}}</small></h4>

	                <br><br>
	                <h3><i class="fa fa-globe"></i> Bản đồ</h3>
	                <div class="break"></div><br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.238500337523!2d108.15209511387908!3d16.053108788890885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421930e9abff15%3A0xda4b699602e14db0!2zMjE4IEhvw6BuZyBWxINuIFRow6FpLCBIb8OgIEtow6FuaCBOYW0sIExpw6puIENoaeG7g3UsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1628930323654!5m2!1svi!2s" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
					
			</div>
		</div>
	</div>
@endsection