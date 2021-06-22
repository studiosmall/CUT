@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    {{-- @include('partials.slider') --}}

  <div class="videoWrapper">
    <div class="plyr__video-embed" id="player">
      <iframe
        src="https://www.youtube.com/watch?v=4gtJc53CXsM"
        allowtransparency
        allow="autoplay"
      ></iframe>
    </div>
  </div>

<script> 
  //['captions', 'quality', 'speed', 'loop']
  const player 	= new Plyr('#player', {
    autoplay: true,
  });

  // Expose player so it can be used from the console
  window.player = player;
</script>

  @endwhile
@endsection
