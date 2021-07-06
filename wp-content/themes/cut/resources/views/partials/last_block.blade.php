<section class="section last-block">
	<div class="last-block__inner">
			<div class="last-block__top">
				<a href="#" data-scroll="#first">
					<span class="ico-arrow"></span> Back to Start
				</a>
			</div>

			<div class="last-block__logo">
				<svg width="44px" height="34px" viewBox="0 0 44 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<defs>
								<polygon id="path-1" points="0 0.0641485215 18.9660858 0.0641485215 18.9660858 33.8034448 0 33.8034448"></polygon>
								<polygon id="path-3" points="0.0568923077 0.0641485215 18.9462308 0.0641485215 18.9462308 33.8034448 0.0568923077 33.8034448"></polygon>
						</defs>
						<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g id="Homepage-Scroll" transform="translate(-7405.000000, -382.000000)">
										<g id="Group-11" transform="translate(7257.000000, 77.000000)">
												<g id="Group-7-Copy" transform="translate(148.000000, 305.000000)">
														<g id="Group-3">
																<mask id="mask-2" fill="white">
																		<use xlink:href="#path-1"></use>
																</mask>
																<g id="Clip-2"></g>
																<path d="M18.9563541,33.8034448 L4.44861829,19.3727208 L3.0355126,17.9443876 C-1.01187358,13.8548706 -1.01187358,7.22220857 3.0355126,3.1312863 C7.0814313,-0.958230739 13.6433825,-0.958230739 17.6906915,3.1312863 L18.9660858,4.42182933 L18.9563541,33.8034448 Z" id="Fill-1" fill="#000000" mask="url(#mask-2)"></path>
														</g>
														<g id="Group-6" transform="translate(25.000000, 0.000000)">
																<mask id="mask-4" fill="white">
																		<use xlink:href="#path-3"></use>
																</mask>
																<g id="Clip-5"></g>
																<path d="M0.0665846154,33.8034448 L14.5156615,19.3727208 L15.9230462,17.9443876 C19.9539692,13.8548706 19.9539692,7.22220857 15.9230462,3.1312863 C11.8934308,-0.958230739 5.35804615,-0.958230739 1.32712308,3.1312863 L0.0568923077,4.42182933 L0.0665846154,33.8034448 Z" id="Fill-4" fill="#000000" mask="url(#mask-4)"></path>
														</g>
												</g>
										</g>
								</g>
						</g>
				</svg>
			</div>

			<div class="last-block__bottom">
				@if($options['email'])
				<span>
					Contact — <a href="mailto:{!! $options['email'] !!}">{!! $options['email'] !!}</a>
				</span>
				@endif
				@if($options['phone'])
					<a href="tel:{!! $options['phone'] !!}">{!! $options['phone'] !!}</a>
				@endif

				<div class="newsletter">
					<h4>SIGN UP TO THE NEWSLETTER</h4>
				</div>

			</div>

	</div>
</section>