@extends('admin.layout.master')

@section('title')
Danh sách người quản trị
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
									<th>Tên người dùng</th>
									<th>Email</th>
									<th>Hình đại diện</th>
									<th>Địa chỉ</th>
									<th>Số điện thoại</th>
									<th>Cấp độ</th>
									<th>Chỉnh sửa/Xóa</th>
								</tr>
							</thead>
							<tbody>

								@foreach ($admin as $item)
								<tr>
									<td>{{ $item->name }}</td>
									<td>{{ $item->email }}</td>
									<td><img src="../upload/users/{{ $item->avatar }}" width="80px"></td>
									<td>{{ $item->address }}</td>
									<td>{{ $item->phone }}</td>
									<td class="text-center">
										@if ($item->level == 1)
										<button class="btn btn-default" data-toggle="modal" data-target="#change-level-{{ $item->id }}">
											Cộng tác viên
										</button>

										<div class="modal fade" id="change-level-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
													</div>
													<div class="modal-body">
														Bạn có muốn thay đổi cấp độ của quản trị viên có tên <b>{{ $item->name }}</b>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/quan-tri-vien/doi-cap-do/{{ $item->id }}"><button type="button" class="btn btn-default">Lưu thay đổi</button></a>
													</div>
												</div>
											</div>
										</div>
										@else
										<button class="btn btn-success" data-toggle="modal" data-target="#change-level-{{ $item->id }}">
											Quản trị viên
										</button>

										<div class="modal fade" id="change-level-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
													</div>
													<div class="modal-body">
														Bạn có muốn thay đổi cấp độ của quản trị viên có tên <b>{{ $item->name }}</b>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/quan-tri-vien/doi-cap-do/{{ $item->id }}"><button type="button" class="btn btn-default">Lưu thay đổi</button></a>
													</div>
												</div>
											</div>
										</div>
										@endif
									</td>
									<td class="text-center">
										<a href="admin/quan-tri-vien/sua/{{ $item->id }}"><button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button></a>
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
														Bạn có muốn xóa quản trị viên <b>{{ $item->name }}</b>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/quan-tri-vien/xoa/{{ $item->id }}"><button type="button" class="btn btn-default">Lưu thay đổi</button></a>
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