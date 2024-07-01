@extends('admin.layout.master')

@section('title')
Cập nhập dóng sản phẩm
@endsection

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Dòng sản phẩm
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
			<li><a href="admin/dong-san-pham"><i class="fa fa-database"></i> Dòng sản phẩm</a></li>
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

			<form role="form" method="POST" enctype="multipart/form-data" action="admin/dong-san-pham/sua/{{ $typeProduct->id }}">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="box-body">
					<div class="form-group">
						<select name="lstIDCategory" class="form-control" required="">
							@foreach ($category as $item)
							<option value="{{ $item->id }}" @if ($item->id == $typeProduct->id_category)
								{{ 'selected' }}
								@endif
								>{{ $item->name }}
							</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="txtName">Tên dòng sản phẩm</label>
						<input type="text" class="form-control" id="txtName" name="txtName" placeholder="Nhập tên dòng sản phẩm" required="" value="{{ $typeProduct->name }}">
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