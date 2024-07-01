@extends('admin.layout.master')

@section('title')
Cập nhập người quản trị
@endsection

@section('content')
<div class="content-wrapper">

	<section class="content-header">
		<h1>
			Quản trị viên
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
			<li><a href="admin/quan-tri-vien"><i class="fa fa-user-secret"></i> Quản trị viên</a></li>
			<li class="active">Sửa</li>
		</ol>
	</section>

	<section class="content container-fluid">

		<div class="box box-primary">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				@foreach ($errors->all() as $err)
				{{$err}}<br>
				@endforeach
			</div>
			@endif

			@if (session('success'))
			<div class="alert alert-success">
				{{Session('success')}}
			</div>
			@endif
			@if (session('error'))
			<div class="alert alert-danger">
				{{Session('error')}}
			</div>
			@endif

			<form role="form" method="POST" enctype="multipart/form-data" action="admin/quan-tri-vien/sua/{{ $admin->id }}">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="box-body">
					<div class="form-group">
						<label for="txtName">Tên</label>
						<input type="text" class="form-control" id="txtName" name="txtName" placeholder="Nhập tên quản trị viên" required="" value="{{ $admin->name }}">
					</div>

					<div class="form-group">
						<label for="txtEmail">Email</label>
						<input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Nhập email" required="" value="{{ $admin->email }}" disabled="">
					</div>

					<div class="form-group">
						<input type="checkbox" name="chkChangePassword" id="chkChangePassword"> Đổi mật khẩu
					</div>
					<div class="form-group">
						<label for="txtPassword">Mật khẩu</label>
						<input type="password" class="form-control password" id="txtPassword" name="txtPassword" placeholder="Nhập mật khẩu" required="" disabled="">
					</div>

					<div class="form-group">
						<label for="txtConfirmPassword">Xác nhận mật khẩu</label>
						<input type="password" class="form-control password" id="txtConfirmPassword" name="txtConfirmPassword" placeholder="Nhập lại mật khẩu" required="" disabled="">
					</div>

					<div class="form-group">
						<label for="txtAddress">Địa chỉ</label>
						<input type="text" class="form-control" id="txtAddress" name="txtAddress" placeholder="Nhập địa chỉ" required="" value="{{ $admin->address }}">
					</div>

					<div class="form-group">
						<label for="txtPhone">Số điện thoại</label>
						<input type="tel" class="form-control" id="txtPhone" name="txtPhone" placeholder="Nhập số điện thoại" required="" value="{{ $admin->phone }}">
					</div>

					<div class="form-group">
						<label for="filAvatar">Hình đại diện</label>
						<p><img src="../upload/users/{{ $admin->avatar }}" width="300px"></p>
						<input type="file" id="filAvatar" name="filAvatar">
					</div>

					<div class="form-group">
						<label>Cấp độ</label>
						<div class="radio">
							<label>
								<input type="radio" name="rdoLevel" id="rdoLevel1" value="1" @if ($admin->level == 1)
								{{ 'checked' }}
								@endif
								>
								Cộng tác viên
							</label>
							&nbsp;&nbsp;&nbsp;
							<label>
								<input type="radio" name="rdoLevel" id="rdoLevel2" value="2" @if ($admin->level == 2)
								{{ 'checked' }}
								@endif
								>
								Quản trị viên
							</label>
						</div>
					</div>


				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Sửa</button>
				</div>
			</form>
		</div>

	</section>
</div>
@endsection

@section('script')
<script src="../js/admin/admin.js"></script>
@endsection