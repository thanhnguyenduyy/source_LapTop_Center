@extends('admin.layout.master')

@section('title')
Cập nhập slide
@endsection

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Slide
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
			<li><a href="admin/slide"><i class="fa fa-image"></i> Slide</a></li>
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

			<form role="form" method="POST" enctype="multipart/form-data" action="admin/slide/sua/{{ $slide->id }}">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="box-body">
					<div class="form-group">
						<label for="txtLink">Liên kết</label>
						<input type="text" class="form-control" id="txtLink" name="txtLink" placeholder="Nhập liên kết" required="" value="{{ $slide->link }}">
					</div>

					<div class="form-group">
						<label for="filImage">Hình ảnh</label>
						<img src="../upload/slide/{{ $slide->image }}" width="300px">
						<input type="file" id="filImage" name="filImage">
					</div>

					<div class="form-group">
						<div class="radio">
							<label>
								<input type="radio" name="rdoActive" id="rdoActive1" value="1" @if ($slide->active == 1)
								{{ 'checked' }}
								@endif
								>
								Hoạt động
							</label>
							&nbsp;&nbsp;&nbsp;
							<label>
								<input type="radio" name="rdoActive" id="rdoActive0" value="0" @if ($slide->active == 0)
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