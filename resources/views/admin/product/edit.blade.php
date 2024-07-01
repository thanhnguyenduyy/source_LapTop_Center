@extends('admin.layout.master')

@section('title')
Cập nhập sản phẩm
@endsection

@section('style')
<link rel="stylesheet" href="../admin_asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
@endsection

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Sản phẩm
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
			<li><a href="admin/san-pham"><i class="fa fa-laptop"></i> Sản phẩm</a></li>
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

			<form role="form" method="POST" enctype="multipart/form-data" action="admin/san-pham/sua/{{ $product->id }}">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="box-body">
					<div class="form-group">
						<label for="lstIDCategory">Tên hãng sản xuất</label>
						<select name="lstIDCategory" id="lstIDCategory" class="form-control" required="">
							@foreach ($category as $item)
							<option value="{{ $item->id }}" @if ($item->id == $product->typeProduct->id_category)
								{{ 'selected' }}
								@endif
								>{{ $item->name }}
							</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="lstIDType">Tên dòng sản phẩm</label>
						<select name="lstIDType" id="lstIDType" class="form-control" required="">
							@foreach ($typeProduct as $item)
							<option value="{{ $item->id }}" @if ($item->id == $product->id_type)
								{{ 'selected' }}
								@endif
								>{{ $item->name }}
							</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="txtName">Tên sản phẩm</label>
						<input type="text" class="form-control" id="txtName" name="txtName" placeholder="Nhập tên sản phẩm" required="" value="{{ $product->name }}">
					</div>

					<div class="form-group">
						<label for="txtUnitPrice">Giá sản phẩm</label>
						<input type="number" class="form-control" id="txtUnitPrice" name="txtUnitPrice" placeholder="Nhập giá sản phẩm" required="" value="{{ $product->unit_price }}">
					</div>

					<div class="form-group">
						<label for="txtPromotionPrice">Giá khuyến mãi (nếu khác 0):</label>
						<input type="number" class="form-control" id="txtPromotionPrice" name="txtPromotionPrice" placeholder="Nhập giá sản phẩm" required="" value="{{ $product->promotion_price }}">
					</div>

					<div class="form-group">
						<label for="txtQuantity">Số lượng</label>
						<input type="number" class="form-control" id="txtQuantity" name="txtQuantity" placeholder="Nhập số lượng sản phẩm" required="" value="{{ $product->quantity }}">
					</div>

					<div class="form-group" id="divImage">

						@foreach ($product->imageProduct as $item)
						<div class="form-group col-md-5 text-center">
							<img src="../upload/product/{{ $item->name }}" height="250px">
							<p><input type="checkbox" name="chkDeleteImage[]" value="{{ $item->id }}"> Xóa ảnh này</p>
						</div>
						@endforeach
						<div class="clearfix"></div>
						<div class="form-group">
							<label for="filImage">Hình ảnh</label>
							<input type="file" id="filImage[]" name="filImage[]">
							{{-- <p class="help-block">Example block-level help text here.</p> --}}
						</div>
					</div>
					<button type="button" class="btn btn-default" id="btnAddImage">Thêm ảnh</button>

					<div class="form-group">
						<label for="txtDescription">Mô tả</label>
						<input type="text" class="form-control" id="txtDescription" name="txtDescription" placeholder="Nhập mô tả của sản phẩm" required="" value="{{ $product->description }}">
					</div>
					<div class="form-group">
						<label for="txtDescription">Chi tiết</label>
						<textarea id="txtDetail" name="txtDetail" rows="10" cols="80">{{ $product->detail }}</textarea>
					</div>

					<div class="form-group">
						<div class="radio">
							<label>
								<input type="radio" name="rdoHot" id="rdoHot1" value="1" @if ($product->hot == 1)
								{{ 'checked' }}
								@endif
								>
								Hot
							</label>
							&nbsp;&nbsp;&nbsp;
							<label>
								<input type="radio" name="rdoHot" id="rdoHot0" value="0" @if ($product->hot == 0)
								{{ 'checked' }}
								@endif
								>
								Bình thường
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
<script src="../admin_asset/bower_components/ckeditor/ckeditor.js"></script>
<script src="../admin_asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="../js/product/product.js"></script>
@endsection