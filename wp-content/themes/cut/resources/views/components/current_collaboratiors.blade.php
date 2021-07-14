<section class="section collaborators">
	<div class="collaborators__inner" data-aos="fade-up">
		<div class="top">
			<h2>CURRENT COLLABORATORS</h2>

			@foreach($c['collaborators'] as $item)
				<div class="collaborators__item">
					<h3>{{ $item['collaboration_title'] }}</h3>

					<a class="btn" href="{{ $item['button_url'] }}" target="_blank">
						{{ $item['button_text'] }}
					</a>
				</div>
			@endforeach
		</div>
	</div>
</section>