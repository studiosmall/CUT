<section class="section product">
	<div class="product__inner" data-aos="fade-up">

			<div class="product__top">

				<div class="product__image">
					@if($c['product_link'])
						<a href="{{ $c['product_link'] }}" target="blank">
					@endif
					<img src="{{ $c['product_image'] }}" alt="{!! $c['product_title'] !!}">
					@if($c['product_link'])
						</a>
					@endif
				</div>

				@if($c['product_title'])<h2>{!! $c['product_title'] !!}</h2>@endif

				{!! $c['product_description'] !!}

{{-- 
				<button class="btn btn--ghost" data-scroll="#second" data-aos="fade-up">Next page<i class="icon-angle-right"></i></button> --}}

			</div>

			<div class="bottom">
				@if($c['product_link'])
					<a class="btn-alt" href="{{ $c['product_link'] }}" target="blank" data-aos="fade-up">ORDER ONLINE</a>
				@endif
			</div>

	</div>
</section>