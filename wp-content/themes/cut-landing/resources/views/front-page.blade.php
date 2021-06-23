@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    {{-- @include('partials.slider') --}}

  <div class="videoWrapper">
   

   <div class="plyr__video-embed" id="player" data-plyr-provider="vimeo">
      <iframe
        src="https://player.vimeo.com/video/566130862?autoplay=1&amp;loop=true&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;"
        allowfullscreen
        allowtransparency
        allow="autoplay"
      ></iframe>
    </div>
    {{-- <iframe class="home-video" id="player_1" src="https://player.vimeo.com/video/566130862?background=?api=1&player_id=player_1" width="100%" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> --}}
  </div>

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

</script>

  @endwhile
@endsection
