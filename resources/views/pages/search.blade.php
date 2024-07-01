@extends('layout.master')

@section('title')
	Tìm kiếm | {{ $keyword }}
@endsection

@section('content')
	@include('layout.navigation2')

	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="trang-chu">Trang chủ</a></li>
				<li class="active">Tất cả sản phẩm</li>
			</ul>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<div class="row">
				<div id="aside" class="col-md-3">
					<div class="aside">
						<h3 class="aside-title">Lọc theo giá (triệu VNĐ)</h3>
						<div id="price-slider"></div>
						<button id="btnFilter" class="primary-btn pull-right">Lọc</button>
						<div class="clearfix"></div>
					</div>

					<div class="aside">
						<h3 class="aside-title">Hãng sản xuất</h3>
						<ul class="list-links">
							<li class="active"><a>Tất cả</a></li>
							@foreach ($categories as $item)
								<li><a href="search?txtKeyword={{ $keyword }}&cbbCategory={{ $item->id }}&min={{ $min }}&max={{ $max }}&sort={{ $sort }}&show={{ $show }}">{{ $item->name }}</a></li>
							@endforeach
						</ul>
					</div>

					@include('layout.selling')
					
				</div>

				<div id="main" class="col-md-9">
					<div class="store-filter clearfix">
						<div class="pull-left">
							<div class="row-filter">
								<a class="active"><i class="fa fa-th-large"></i></a>
								<a><i class="fa fa-bars"></i></a>
							</div>
							<div class="sort-filter">
								<span class="text-uppercase">Sắp xếp:</span>
								<select class="input sort">
									<option @if ($sort == 'latest') {{ 'selected' }} @endif value="latest">Mới nhất</option>
									<option @if ($sort == 'oldest') {{ 'selected' }} @endif value="oldest">Cũ nhất</option>
									<option @if ($sort == 'price_asc') {{ 'selected' }} @endif value="price_asc">Giá tăng dần</option>
									<option @if ($sort == 'price_desc') {{ 'selected' }} @endif value="price_desc">Giá giảm dần</option>
									<option @if ($sort == 'rating') {{ 'selected' }} @endif value="rating">Đánh giá</option>
									<option @if ($sort == 'selling') {{ 'selected' }} @endif value="selling">Bán chạy nhất</option>
								</select>
							</div>
						</div>
						<div class="pull-right">
							<div class="page-filter">
								<span class="text-uppercase">Hiện thị:</span>
								<select class="input show-product">
									<option @if ($show == 9) {{ 'selected' }} @endif value="9">9</option>
									<option @if ($show == 18) {{ 'selected' }} @endif value="18">18</option>
									<option @if ($show == 27) {{ 'selected' }} @endif value="27">27</option>
								</select>
							</div>
							<div class="pagination">
								{{ $products->appends(['txtKeyword' => $keyword, 'cbbCategory' => $cbbCategory,'min' => $min, 'max' => $max, 'sort' => $sort, 'show' => $show])->links() }}
							</div>
							
						</div>
					</div>

					<div id="store">
						<div class="row">
							@foreach ($products as $item)
								<div class="col-md-4 col-sm-6 col-xs-6">
									<div class="product product-single">
										<div class="product-thumb">
											<div class="product-label">
												<span>Mới</span>
												@if ($item['promotion_price'] != 0)
													<span class="sale">Giảm giá</span>
												@endif
											</div>
											<a href="{{ $item['slug'] }}.html" class="main-btn quick-view" style="cursor: pointer;"><i class="fa fa-search-plus"></i> Chi tiết</a>
											<img src="../upload/product/{{ $item->imageProduct[1]['name'] }}" alt="" height="200px">
										</div>
										<div class="product-body">
											@php
												printPrice($item['unit_price'], $item['promotion_price']);
											@endphp
											<h2 class="product-name"><a href="{{ $item['slug'] }}.html">{{ $item['name'] }}</a></h2>
											<div class="product-rating text-center">
												@for ($i = 0; $i < round($item['rating']); $i++)
													<i class="fa fa-star"></i>
												@endfor
												@for ($i = 0; $i < (5 - round($item['rating'])); $i++)
													<i class="fa fa-star-o empty"></i>
												@endfor
												
											</div>
											<div class="product-btns text-center">
												<a href="them-gio-hang/{{ $item->id }}/1" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div>

					<div class="store-filter clearfix">
						<div class="pull-left">
							<div class="row-filter">
								<a class="active"><i class="fa fa-th-large"></i></a>
								<a><i class="fa fa-bars"></i></a>
							</div>
							<div class="sort-filter">
								<span class="text-uppercase">Sắp xếp:</span>
								<select class="input sort">
									<option @if ($sort == 'latest') {{ 'selected' }} @endif value="latest">Mới nhất</option>
									<option @if ($sort == 'oldest') {{ 'selected' }} @endif value="oldest">Cũ nhất</option>
									<option @if ($sort == 'price_asc') {{ 'selected' }} @endif value="price_asc">Giá tăng dần</option>
									<option @if ($sort == 'price_desc') {{ 'selected' }} @endif value="price_desc">Giá giảm dần</option>
									<option @if ($sort == 'rating') {{ 'selected' }} @endif value="rating">Đánh giá</option>
									<option @if ($sort == 'selling') {{ 'selected' }} @endif value="selling">Bán chạy nhất</option>
								</select>
							</div>
						</div>
						<div class="pull-right">
							<div class="page-filter">
								<span class="text-uppercase">Hiện thị:</span>
								<select class="input show-product">
									<option @if ($show == 9) {{ 'selected' }} @endif value="9">9</option>
									<option @if ($show == 18) {{ 'selected' }} @endif value="18">18</option>
									<option @if ($show == 27) {{ 'selected' }} @endif value="27">27</option>
								</select>
							</div>
							<div class="pagination">
								{{ $products->appends(['txtKeyword' => $keyword, 'cbbCategory' => $cbbCategory,'min' => $min, 'max' => $max, 'sort' => $sort, 'show' => $show])->links() }}
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.pagination').addClass("store-pages");
		    $('.pagination').removeClass('pagination');

		    $('.noUi-handle-lower').attr('aria-valuetext', <?php echo $min/1000000; ?>);
			$('.noUi-handle-upper').attr('aria-valuetext', <?php echo $max/1000000; ?>);

		    keyword = '{{ $keyword }}'
		    category = '{{ $cbbCategory }}'
		    $('#btnFilter').click(function () {
		    	min = $('.noUi-handle-lower').attr('aria-valuetext')*1000000;
		    	max = $('.noUi-handle-upper').attr('aria-valuetext')*1000000;
		    	sort = $('.sort').val();
		    	show = $('.show-product').val();

		    	currentUrl = window.location.pathname;

		    	window.location.href = currentUrl + '?txtKeyword=' + keyword + '&cbbCategory=' + category + '&min=' + min + '&max=' + max + '&sort=' + sort + '&show=' + show;
		    });

		    $('.sort').change(function () {
		    	min = $('.noUi-handle-lower').attr('aria-valuetext')*1000000;
		    	max = $('.noUi-handle-upper').attr('aria-valuetext')*1000000;
		    	sort = $(this).val();
		    	show = $('.show-product').val();

		    	currentUrl = window.location.pathname;

		    	window.location.href = currentUrl + '?txtKeyword=' + keyword + '&cbbCategory=' + category + '&min=' + min + '&max=' + max + '&sort=' + sort + '&show=' + show;
		    });

		    $('.show-product').change(function () {
		    	min = $('.noUi-handle-lower').attr('aria-valuetext')*1000000;
		    	max = $('.noUi-handle-upper').attr('aria-valuetext')*1000000;
		    	sort = $('.sort').val();
		    	show = $(this).val();

		    	currentUrl = window.location.pathname;

		    	window.location.href = currentUrl + '?txtKeyword=' + keyword + '&cbbCategory=' + category + '&min=' + min + '&max=' + max + '&sort=' + sort + '&show=' + show;
		    });
		});
	</script>
@endsection