@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    
    {{-- @include('partials.slider') --}}

  {{-- <div class="videoWrapper"> --}}
   

   {{-- <div class="plyr__video-embed" id="player" data-plyr-provider="vimeo">
      <iframe
        src="https://player.vimeo.com/video/566130862?autoplay=1&amp;loop=true&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;"
        allowfullscreen
        allowtransparency
        allow="autoplay"
      ></iframe>
    </div>
  </div> --}}
{{-- 
  <script> 
    //['captions', 'quality', 'speed', 'loop']
    const player 	= new Plyr('#player', {
      autoplay: true,
    });

    // Expose player so it can be used from the console
    window.player = player;

  jQuery( document ).ready(function() {

      jQuery('body').click();

      setTimeout(function(){
        player.play(); // eslint-disable-line no-undef
      }, 1500)

    });

  </script> --}}

    <div id="first" class="horizontal-container">

      @include('partials.content-blocks')
      @include('partials.last_block')

      {{--
            <section class="section" id="third">
              <div class="section__inner">
                <div class="section__header">
                  <h2 class="section__title">3. Third</h2>
                  <p class="section__lead">This is third content.</p>
                </div>
                <div class="section__body">
                  <ul class="list--inline">
                    <li><button class="btn btn--ghost" data-scroll="#second"><i class="icon-angle-left"></i>Prev page</button></li>
                    <li><button class="btn btn--ghost" data-scroll="#fourth">Next page<i class="icon-angle-right"></i></button></li>
                  </ul>
                </div>
              </div>
            </section> --}}
    </div>

  @endwhile
@endsection
