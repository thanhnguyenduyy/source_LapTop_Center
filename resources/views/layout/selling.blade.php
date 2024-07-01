<div class="aside">
	<h3 class="aside-title">Sản phẩm bán chạy</h3>
	@foreach ($sellingProducts as $item)
		<div class="product product-widget">
			<div class="product-thumb">
				<img src="../upload/product/{{ $item->imageProduct[0]['name'] }}" alt="">
			</div>
			<div class="product-body">
				<h2 class="product-name"><a href="{{ $item['slug'] }}.html">{{ $item['name'] }}</a></h2>
				@php
					printPrice($item['unit_price'], $item['promotion_price']);
				@endphp
				<div class="product-rating text-center">
					@for ($i = 0; $i < round($item['rating']); $i++)
						<i class="fa fa-star"></i>
					@endfor
					@for ($i = 0; $i < (5 - round($item['rating'])); $i++)
						<i class="fa fa-star-o empty"></i>
					@endfor
				</div>
			</div>
		</div>
	@endforeach
</div>