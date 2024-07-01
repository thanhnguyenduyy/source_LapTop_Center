<header>
	<div id="top-header">
		<div class="container">
			<div class="pull-left">
				<span>Chào mừng bạn đến với LapTop-CenTre!</span>
			</div>
			<div class="pull-right">
				<ul class="header-top-links">
					<li><a href="gioi-thieu">Giới thiệu</a></li>
					<li><a href="lien-he">Liên hệ</a></li>
					<li><a href="tin-tuc">Tin tức</a></li>
					<li class="dropdown default-dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Việt Nam (VN) <i class="fa fa-caret-down"></i></a>
						<ul class="custom-menu">
							<li><a>Việt Nam (VN)</a></li>
							<li><a>English (ENG)</a></li>
						</ul>
					</li>
					<li class="dropdown default-dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">VND <i class="fa fa-caret-down"></i></a>
						<ul class="custom-menu">
							<li><a>VND (d)</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div id="header">
		<div class="container">
			<div class="pull-left">
				<div class="header-logo">
					<a class="logo" href="#">
						<img src="../img/log.jpg" alt="">
					</a>
				</div>

				<!-- Search -->
				<div class="header-search">
					<form action="tim-kiem" method="GET">
						<input name="txtKeyword" class="input search-input" type="text" placeholder="Nhập từ khóa">
						<select name="cbbCategory" class="input search-categories">
							<option value="*">Tất cả</option>
							@foreach ($categories as $item)
							<option value="{{ $item->id }}">{{ $item->name }}</option>
							@endforeach
						</select>
						<button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
					</form>
				</div>
				<!-- /Search -->

			</div>
			<div class="pull-right">
				<ul class="header-btns">
					<!-- Account -->
					<li class="header-account dropdown default-dropdown" style="min-width: 140px">
						@if (Auth::user())
						<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
							<div class="header-btns-icon">
								<img width="40px" height="40px" src="/public/upload/users/{{ Auth::user()->avatar }}" />
							</div>
							<strong class="text-uppercase">{{ Auth::user()->name }} <i class="fa fa-caret-down"></i></strong>
						</div>
						<ul class="custom-menu">
							<li><a href="thong-tin-nguoi-dung"><i class="fa fa-user-o"></i> Thông tin</a></li>
							<li><a href="don-hang/{{$user->id}}"><i class="fa fa-shopping-cart"></i> Đơn hàng</a></li>
							<li><a href="doi-mat-khau"><i class="fa fa-unlock-alt"></i> Đổi mật khẩu</a></li>
						</ul>
						<a class="text-uppercase dang-xuat" style="cursor: pointer;">Đăng xuất</a>
						@else
						<a class='text-uppercase dang-nhap' style="cursor: pointer;">Đăng nhập</a><br><a href="dang-ky" class="text-uppercase">Đăng ký</a>
						@endif
					</li>
					<!-- /Account -->

					<!-- Cart -->
					<li class="header-cart dropdown default-dropdown" style="min-width: 170px">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">

							<div class="header-btns-icon">
								<i class="fa fa-shopping-cart"></i>
								@if (isset($cart))
								<span class="qty">{{ $totalQty }}</span>
								@endif
							</div>
							<strong class="text-uppercase">Giỏ hàng:</strong>
							<br>
							@if (isset($cart))
							<span>{{ formatPrice($totalPrice) }}</span>
							@endif

						</a>
						<div class="custom-menu">
							<div id="shopping-cart">
								<div class="shopping-cart-list">
									@if (isset($productCart))
									@foreach ($productCart as $item)
									<div class="product product-widget">
										<div class="product-thumb">
											<img src="../upload/product/{{ $item['item']->imageProduct[0]->name }}" alt="">
										</div>
										<div class="product-body">
											<h3 class="product-price">
												@if ($item['item']['promotion_price'] != 0)
												{{ $item['item']['promotion_price'] }}
												@else
												{{ $item['item']['unit_price'] }}
												@endif
												<span class="qty">x{{ $item['qty'] }}</span>
											</h3>
											<h2 class="product-name"><a href="#">{{ $item['item']['name'] }}</a></h2>
										</div>
										<a href="xoa-san-pham-gio-hang/{{ $item['item']['id'] }}" class="cancel-btn"><i class="fa fa-trash"></i></a>
									</div>
									@endforeach
									<div class="shopping-cart-btns">
										<a href="gio-hang" class="main-btn"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>
										<a href="thanh-toan" class="primary-btn">Thanh toán <i class="fa fa-arrow-circle-right"></i></a>
									</div>
									@else
									<p style="text-align: center; margin-top: 10px;color: #cd1818;">Chưa có sản phẩm</p>
									@endif

								</div>
							</div>
						</div>
					</li>
					<!-- /Cart -->

					<li class="nav-toggle">
						<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>