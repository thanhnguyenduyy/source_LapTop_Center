	<div id="home">
		<div class="container">
			<div class="home-wrap">
				<div id="home-slick">
					
					@foreach ($slides as $item)
						<a href="{{ $item['link'] }}" class="banner banner-1">
							<img src="../upload/slide/{{ $item['image'] }}" alt="">
						</a>
					@endforeach
					
				</div>
			</div>
		</div>
	</div>