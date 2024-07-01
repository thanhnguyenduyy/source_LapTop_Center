@extends('admin.layout.master')

@section('title')
	Cập nhập giới thiệu
@endsection

@section('style')
<link rel="stylesheet" href="../admin_asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
@endsection

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>Giới thiệu</h1>
		<ol class="breadcrumb">
			<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
			<li><a href="admin/slide"><i class="fa fa-image"></i> Giới thiệu</a></li>
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
			<form role="form" method="POST" action="admin/setting/gioi-thieu/{{ $gioiThieu->id }}">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="box-body">
					<div class="form-group">
						<label for="txtName">Tiêu đề</label>
						<input type="text" class="form-control" id="txtName" name="title_gioithieu" placeholder="Nhập tiêu đề" required="" value="{{ $gioiThieu->title_gioithieu }}">
					</div>

					<div class="form-group">
						<label for="txtName">Nội dung</label>
						<textarea id="txtDetail" name="gioithieu" rows="10" cols="80">{{ $gioiThieu->gioithieu }}</textarea>
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
<script src="../admin_asset/bower_components/ckeditor/ckeditor.js"></script>
<script src="../admin_asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="../js/new/new.js"></script>
@endsection