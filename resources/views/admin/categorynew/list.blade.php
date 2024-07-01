@extends('admin.layout.master')

@section('title')
Danh sách danh mục tin tức
@endsection

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Danh mục tin tức
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
			<li><a href="admin/hang-san-xuat"><i class="fa fa-industry"></i> Danh mục tin tức</a></li>
			<li class="active">Danh sách</li>
		</ol>
		@if (session('success'))
		<div class="alert alert-success">
			{{Session('success')}}
		</div>
		@endif
	</section>

	<section class="content container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Tên danh mục</th>
									<th>Thứ tự</th>
									<th>Trạng thái</th>
									<th>Chỉnh sửa/Xóa</th>
								</tr>
							</thead>
							<tbody>

								@foreach ($categoryNews as $item)
								<tr>
									<td>{{ $item->name }}</td>
									<td>{{ $item->sort_order }}</td>
									<td class="text-center">
										@if ($item->status == 1)
										<button class="btn btn-success" data-toggle="modal" data-target="#change-active-{{ $item->id }}">
											Hoạt động
										</button>

										<div class="modal fade" id="change-active-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
													</div>
													<div class="modal-body">
														Bạn có muốn thay đổi trạng thái của danh mục có tên <b>{{ $item->name }}</b>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/danh-muc-tin-tuc/doi-trang-thai/{{ $item->id }}"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
													</div>
												</div>
											</div>
										</div>
										@else
										<button class="btn btn-default" data-toggle="modal" data-target="#change-active-{{ $item->id }}">
											Không hoạt động
										</button>

										<div class="modal fade" id="change-active-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
													</div>
													<div class="modal-body">
														Bạn có muốn thay đổi trạng thái của hãng có tên <b>{{ $item->name }}</b>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/danh-muc-tin-tuc/doi-trang-thai/{{ $item->id }}"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
													</div>
												</div>
											</div>
										</div>
										@endif
									</td>
									<td class="text-center">
										<a href="admin/danh-muc-tin-tuc/sua/{{ $item->id }}"><button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button></a>
										<button class="btn btn-default" data-toggle="modal" data-target="#delete-{{ $item->id }}"><i class="fa fa-times">
											</i></button>

										<div class="modal fade" id="delete-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
													</div>
													<div class="modal-body">
														Bạn có muốn xóa hãng <b>{{ $item->name }}</b>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/danh-muc-tin-tuc/xoa/{{ $item->id }}"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
													</div>
												</div>
											</div>
										</div>
									</td>
								</tr>
								@endforeach

							</tbody>
						</table>
					</div>
				</div>

			</div>

		</div>
	</section>
</div>
@endsection