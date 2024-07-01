@extends('admin.layout.master')

@section('title')
Danh sách hóa đơn
@endsection

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Hóa đơn
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
			<li><a href="admin/hoa-don"><i class="fa fa-list-alt"></i> Hóa đơn</a></li>
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
									<th>Khách hàng</th>
									<th>Ngày đặt hàng</th>
									<th>Tổng tiền</th>
									<th>Cách thức giao hàng</th>
									<th>Cách thức thanh toán</th>
									<th>Trạng thái</th>
									<th>Chi tiết</th>
									<th>Chỉnh sửa/Xóa</th>
								</tr>
							</thead>
							<tbody>

								@foreach ($bill as $item)
								<tr>
									<td>{{ $item->users->name }}</td>
									<td>{{ $item->date_order }}</td>
									<td>{{ formatPrice($item->total) }}</td>
									<td>{{ $item->shipping }}</td>
									<td>{{ $item->payment }}</td>
									<td class="text-center">
										@if ($item->status == 0)
										<button class="btn btn-default" data-toggle="modal" data-target="#change-status-{{ $item->id }}">
											Chưa xử lý
										</button>

										<div class="modal fade" id="change-status-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
													</div>
													<div class="modal-body">
														Bạn có muốn thay đổi độ trạng thái của hóa đơn này?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/hoa-don/doi-trang-thai/{{ $item->id }}"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
													</div>
												</div>
											</div>
										</div>
										@else
										<button class="btn btn-success" disabled="">
											Đã xử lý
										</button>

										@endif
									</td>
									<td>
										<button class="btn btn-default" data-toggle="modal" data-target="#view-information-{{ $item->id }}" style="cursor: pointer;">
											Xem thêm
										</button>

										<div class="modal fade" id="view-information-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Chi tiết hóa đơn</h4>
													</div>
													<div class="modal-body">

														<div class="panel panel-default">
															<div class="panel-heading">
																<h3 class="panel-title">Chi tiết:</h3>
															</div>
															<div class="panel-body">
																<table id="review" class="table table-bordered table-hover">
																	<thead>
																		<tr>
																			<th>Tên sản phẩm</th>
																			<th>Hình ảnh</th>
																			<th>Số lượng</th>
																			<th>Giá gốc:</th>
																			<th>Giá khuyến mãi (nếu khác 0):</th>
																		</tr>
																	</thead>
																	<tbody>
																		@foreach ($item->billDetail as $itemDetail)
																		<tr>
																			<td>{{ $itemDetail->product->name }}</td>
																			<td><img width="150px" src="../upload/product/{{ $itemDetail->product->imageProduct[0]->name }}" </td>
																			<td>{{ $itemDetail->quantity }}</td>
																			<td>{{ formatPrice($itemDetail->unit_price) }}</td>
																			<td>{{ formatPrice($itemDetail->promotion_price) }}</td>
																		</tr>
																		@endforeach
																	</tbody>
																</table>
															</div>
														</div>

													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
													</div>
												</div>
											</div>
										</div>
									</td>

									<td class="text-center">

										<button class="btn btn-default" data-toggle="modal" data-target="#delete-{{ $item->id }}" @if ($item->status == 1)
											{{ 'disabled' }}
											@endif
											><i class="fa fa-times">
											</i></button>

										<div class="modal fade" id="delete-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
													</div>
													<div class="modal-body">
														Bạn có muốn xóa hóa đơn này?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/hoa-don/xoa/{{ $item->id }}"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
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