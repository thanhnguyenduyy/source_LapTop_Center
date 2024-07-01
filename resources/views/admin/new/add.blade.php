@extends('admin.layout.master')

@section('title')
	Thêm tin tức
@endsection

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Tin tức
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
			<li><a href="admin/tin-tuc"><i class="fa fa-industry"></i> tin tức</a></li>
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

			<form role="form" method="POST" enctype="multipart/form-data" action="admin/tin-tuc/them">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="box-body">
					<div class="form-group">
						<label for="txtName">Tiêu đề</label>
						<input type="text" class="form-control" id="txtName" name="title" placeholder="Nhập tiêu đề" required="">
					</div>

					<div class="form-group">
						<label for="filImage">Hình ảnh</label>
						<input type="file" id="filImage" name="filImage" required="">
					</div>

					<div class="form-group">
						<label for="exampleFormControlSelect1">Danh mục</label>
						<select class="form-control" name="id_category_new" id="exampleFormControlSelect1">
							@foreach($categoryNews as $nd => $categoryNew)
							<option value="{{$nd}}">{{$categoryNew}}</option>
							@endforeach
						</select>
					</div>


					<div class="form-group">
						<label for="txtName">Giới thiệu</label>
						<input type="text" class="form-control" id="txtName" name="info" placeholder="Nhập giới thiệu" required="">
					</div>

					<div class="form-group">
						<label for="txtName">Nội dung</label>
						<textarea id="txtDetail" name="content" rows="10" cols="80"></textarea>
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
@section('script')
<script src="../admin_asset/bower_components/ckeditor/ckeditor.js"></script>
<script src="../admin_asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="../js/new/new.js"></script>
@endsection