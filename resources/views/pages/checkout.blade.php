@extends('layout.master')

@section('title')
	Thanh toán
@endsection

@section('content')
	@include('layout.navigation2')

	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="trang-chu">Trang chủ</a></li>
				<li><a href="gio-hang">Giỏ hàng</a></li>
				<li class="active">Thanh toán</li>
			</ul>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<div class="row">
				@if (!isset($cart))
					<div class="col-md-12 text-center">
						<p>Bạn chưa có sản phẩm trong giỏ hàng.</p>
						<a href="trang-chu" class="primary-btn">Tiếp tục mua hàng</a>
					</div>
				@else
					<form id="checkout-form" class="clearfix" action="thanh-toan" method="post">
						{{ csrf_field() }}
						<div class="col-md-6">
							<div class="billing-details">
								@if (!Auth::user())
									<p>Khách hàng cũ? <a class="dang-nhap" style="cursor: pointer;">Đăng nhập</a></p>
									<p>Khách hàng mới? Vui lòng nhập thông tin bên dưới.</p>
								@endif
								<div class="section-title">
									<h3 class="title">Thông tin</h3>
								</div>
								<div class="form-group">
									<input class="input" type="text" name="txtName" @if (Auth::user()) value="{{ Auth::user()->name }}" disabled="" @endif placeholder="Họ tên">
								</div>
								<div class="form-group">
									<input class="input" type="email" @if (Auth::user()) value="{{ Auth::user()->email }}" disabled="" @endif name="txtEmail" placeholder="Email" required="">
								</div>
								<div class="form-group">
									<input class="input" type="text" @if (Auth::user()) value="{{ Auth::user()->address }}" disabled="" @endif name="txtAddress" placeholder="Địa chỉ" required="">
								</div>
								<div class="form-group">
									<input class="input" type="tel" @if (Auth::user()) value="{{ Auth::user()->phone }}" disabled="" @endif name="txtPhone" placeholder="Số điện thoại" required="">
								</div>
								@if (!Auth::user())
									<div class="form-group">
										<input class="input" type="password" name="txtPassword" placeholder="Mật khẩu" required="">
									</div>
									<div class="form-group">
										<input class="input" type="password" name="txtPassword" placeholder="Nhập lại mật khẩu" required="">
									</div>
								@endif	
							</div>
						</div>

						<div class="col-md-6">
							<div class="shiping-methods">
								<div class="section-title">
									<h4 class="title">Hình thức giao hàng</h4>
								</div>
								<div class="input-checkbox">
									<input type="radio" name="rdoShipping" id="rdoShipping-0" value="Free" checked>
									<label for="rdoShipping-0">Miễn phí -  0 VNĐ</label>
									<div class="caption">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
											<p>
									</div>
								</div>
								<div class="input-checkbox">
									<input type="radio" name="rdoShipping" id="rdoShipping-1" value="Standard">
									<label for="rdoShipping-1">Chuẩn - 30.000 VNĐ</label>
									<div class="caption">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
											<p>
									</div>
								</div>
							</div>

							<div class="payments-methods">
								<div class="section-title">
									<h4 class="title">Hình thức thanh toán</h4>
								</div>
								<div class="input-checkbox">
									<input type="radio" name="rdoPayment" id="rdoPayment-0" value="COD" checked>
									<label for="rdoPayment-0">Thanh toán khi nhận hàng</label>
									<div class="caption">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
											<p>
									</div>
								</div>
								<div class="input-checkbox">
									<input type="radio" name="rdoPayment" id="rdoPayment-1" value="ATM">
									<label for="rdoPayment-1">Chuyển khoản</label>
									<div class="caption">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
											<p>
									</div>
								</div>
							</div>
							<div class="order-summary clearfix">
								<div class="section-title">
									<h4 class="title">Đơn hàng</h4>
								</div>
								<table class="shopping-cart-table table">
									<thead>
										<th>Sản phẩm</th>
										<th>Giá</th>
									</thead>
									<tbody>
										@foreach ($productCart as $item)
											<tr>
												<td><img width="100px" src="../upload/product/{{ $item['item']->imageProduct[0]->name }}"> <a href="{{ $item['item']->slug }}.html"> {{ $item['item']->name }}</a></td>
												<td>{{ printPrice($item['item']->unit_price, $item['item']->promotion_price) }} x {{ $item['qty'] }}</td>
											</tr>
										@endforeach
											
									</tbody>
									<tfoot>
										<tr>
											<th>Tổng cộng</th>
											<th colspan="2" class="total">{{ formatPrice($totalPrice) }}</th>
										</tr>
									</tfoot>
								</table>
								<div class="pull-right">
									<button class="primary-btn" type="submit">Thanh toán</button>
								</div>
							</div>
						</div>
					</form>
				@endif
			</div>
		</div>
	</div>
@endsection