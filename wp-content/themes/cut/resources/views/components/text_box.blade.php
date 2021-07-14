<section class="section textbox">
	<div class="textbox__inner" data-aos="fade-up">

			<div class="top">
				{!! $c['textarea'] !!}
{{-- 
				<button class="btn btn--ghost" data-scroll="#second" data-aos="fade-up">Next page<i class="icon-angle-right"></i></button> --}}

				@if($c['button_ratio'] == 'enable')
					<a class="btn" href="{{ $c['button_url'] }}" target="blank" data-aos="fade-up">{{ $c['button_text'] }}</a>
				@endif

			</div>

			<div class="bottom">
				@if(is_single())
					<h2>{!! get_the_title() !!} — {{ get_the_date('F Y') }}</h2>
				@else
					<h2>{!! $c['title'] !!}</h2>
				@endif
			</div>

	</div>
</section>