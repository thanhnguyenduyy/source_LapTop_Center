@extends('admin.layout.master')

@section('title')
Cập nhập hãng sản xuất
@endsection

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Hãng sản xuất
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
			<li><a href="admin/hang-san-xuat"><i class="fa fa-industry"></i> Hãng sản xuất</a></li>
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

			<form role="form" method="POST" enctype="multipart/form-data" action="admin/hang-san-xuat/sua/{{ $category->id }}">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="box-body">
					<div class="form-group">
						<label for="txtName">Tên hãng</label>
						<input type="text" class="form-control" id="txtName" name="txtName" placeholder="Nhập tên hãng" required="" value="{{ $category->name }}">
					</div>

					<div class="form-group">
						<label for="filImage">Hình ảnh</label>
						<p><img src="../upload/category/{{ $category->image }}" width="300px"></p>
						<input type="file" id="filImage" name="filImage">
					</div>


					<div class="form-group">
						<div class="radio">
							<label>
								<input type="radio" name="rdoActive" id="rdoActive1" value="1" @if ($category->active == 1)
								{{ 'checked' }}
								@endif
								>
								Hoạt động
							</label>
							&nbsp;&nbsp;&nbsp;
							<label>
								<input type="radio" name="rdoActive" id="rdoActive0" value="0" @if ($category->active == 0)
								{{ 'checked' }}
								@endif
								>
								Không hoạt động
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