	<div id="navigation">
		<div class="container">
			<div id="responsive-nav">
				<div class="category-nav">
					<span class="category-header">Hãng sản xuất <i class="fa fa-list"></i></span>
					<ul class="category-list">
						@foreach ($categories as $item)
							<li class="dropdown side-dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{ $item['name'] }} <i class="fa fa-angle-right"></i></a>
								<div class="custom-menu">
									<div class="row">
										<div class="col-md-12">
											<ul class="list-links">
												@foreach ($item->typeProduct as $item2)
													<li><a href="{{ $item['slug'] }}/{{ $item2['slug'] }}">{{ $item2['name'] }}</a></li>
												@endforeach
												<li><a href="{{ $item['slug'] }}"><strong>Xem tất cả</strong></a></li>
											</ul>
											<hr class="hidden-md hidden-lg">
										</div>
									</div>
								</div>
							</li>
						@endforeach
						<li><a href="tat-ca-san-pham">Xem tất cả</a></li>
					</ul>
				</div>

				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="trang-chu">Trang chủ</a></li>
						<li><a href="gioi-thieu">Giới thiệu</a></li>
						<li><a href="lien-he">Liên hệ</a></li>
						<li><a href="tin-tuc">Tin Tức</a></li>
						<li><a href="giao-nhan">Giao & Nhận</a></li>
						<li><a href="faq">FAQ</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>