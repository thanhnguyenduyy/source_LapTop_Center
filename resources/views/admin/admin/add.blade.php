@extends('admin.layout.master')

@section('title')
	Thêm hãng người quản trị
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
	            <li class="active">Thêm</li>
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

				<form role="form" method="POST" enctype="multipart/form-data" action="admin/quan-tri-vien/them">
			    	<input type="hidden" name="_token" value="{{csrf_token()}}">
			        <div class="box-body">
			            <div class="form-group">
			                <label for="txtName">Tên</label>
			                <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Nhập tên quản trị viên" required="">
			            </div>

			            <div class="form-group">
			                <label for="txtEmail">Email</label>
			                <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Nhập email" required="">
			            </div>

			            <div class="form-group">
			                <label for="txtPassword">Mật khẩu</label>
			                <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Nhập mật khẩu" required="">
			            </div>

			            <div class="form-group">
			                <label for="txtConfirmPassword">Xác nhận mật khẩu</label>
			                <input type="password" class="form-control" id="txtConfirmPassword" name="txtConfirmPassword" placeholder="Nhập lại mật khẩu" required="">
			            </div>

			            <div class="form-group">
			                <label for="txtAddress">Địa chỉ</label>
			                <input type="text" class="form-control" id="txtAddress" name="txtAddress" placeholder="Nhập địa chỉ" required="">
			            </div>

			            <div class="form-group">
			                <label for="txtPhone">Số điện thoại</label>
			                <input type="tel" class="form-control" id="txtPhone" name="txtPhone" placeholder="Nhập số điện thoại" required="">
			            </div>

			            <div class="form-group">
			                <label for="filAvatar">Hình đại diện</label>
			                <input type="file" id="filAvatar" name="filAvatar" required="">
			            </div>

						<div class="form-group">
							<label>Cấp độ</label>
						    <div class="radio">
						        <label>
						        <input type="radio" name="rdoLevel" id="rdoLevel1" value="1" checked>
						        Cộng tác viên
						    	</label>
						    	&nbsp;&nbsp;&nbsp;
						    	<label>
						        <input type="radio" name="rdoLevel" id="rdoLevel2" value="2">
						        Quản trị viên
						        </label>
						    </div>
						</div>

			        </div>

					<div class="box-footer">
			            <button type="submit" class="btn btn-primary">Thêm</button>
			        </div>
			    </form>
			</div>
	    </section>
	</div>
@endsection

