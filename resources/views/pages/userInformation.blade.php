@extends('layout.master')

@section('title')
Thông tin người dùng
@endsection

@section('content')
@include('layout.navigation2')

<div id="breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="trang-chu">Trang chủ</a></li>
			<li class="active">Thông tin người dùng</li>
		</ul>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
			<form class="clearfix" action="thong-tin-nguoi-dung" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Thông tin người dùng</h3>
						</div>

						@if(count($errors) > 0)
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-show="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myModalLabel"><span style="color: #F8694A; border-color: #F8694A; border-bottom: 5px solid; font-size: 24px;">Thông báo</span></h4>
									</div>
									<div class="modal-body">
										<span style="font-size: 18px;">
											@foreach ($errors->all() as $item)
											{{$item}}<br />
											@endforeach
										</span>
									</div>
									<div class="modal-footer">
										<button type="button" class="primary-btn" data-dismiss="modal">Đóng</button>
									</div>
								</div>
							</div>
						</div>
						<div class="alert alert-danger">
							@foreach ($errors->all() as $item)
							{{$item}}<br />
							@endforeach
						</div>
						@endif

						<div class="form-group">
							<label for="txtName">Họ tên:</label>
							<input class="input" type="text" id="txtName" name="txtName" value="{{ Auth::user()->name }}" placeholder="Nhập họ tên" required="">
						</div>
						<div class="form-group">
							<label for="txtEmail">Email:</label>
							<input class="input" type="email" id="txtEmail" name="txtEmail" value="{{ Auth::user()->email }}" disabled="" placeholder="Nhập email" required="">
						</div>
						<div class="form-group">
							<label for="txtName">Ảnh đại diện:</label><br />
							<img src="/public/upload/users/{{ Auth::user()->avatar }}" width="150px">
							<input class="input" type="file" id="fileAvatar" name="fileAvatar" required="">
						</div>
						<div class="form-group">
							<label for="txtName">Địa chỉ:</label>
							<input class="input" type="text" id="txtAddress" name="txtAddress" value="{{ Auth::user()->address }}" placeholder="Nhập địa chỉ" required="">
						</div>
						<div class="form-group">
							<label for="txtName">Số điện thoại:</label>
							<input class="input" type="tel" id="txtPhone" name="txtPhone" value="{{ Auth::user()->phone }}" placeholder="Nhập số điện thoại" required="">
						</div>
						<div class="form-group text-center">
							<button class="primary-btn" type="submit">Thay đổi</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection