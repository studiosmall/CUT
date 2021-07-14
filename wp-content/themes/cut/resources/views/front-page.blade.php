@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  
    {{-- @include('partials.slider') --}}
    {{-- <div class="videoWrapper"> --}}
   
    <section class="section video @if(is_front_page()) logo-active @endif">

      {{-- <div class="video__logo">
          <svg width="480px" height="158px" viewBox="0 0 480 158" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <polygon id="path-1" points="0 0.467029412 129.208254 0.467029412 129.208254 157.771829 0 157.771829"></polygon>
                <polygon id="path-3" points="0.439207627 0.467029412 133.970225 0.467029412 133.970225 157.999535 0.439207627 157.999535"></polygon>
                <polygon id="path-5" points="0.17595 0.467261765 152.250985 0.467261765 152.250985 157.772526 0.17595 157.772526"></polygon>
            </defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Homepage-Landing" transform="translate(-363.000000, -313.000000)">
                    <g id="Group-2" transform="translate(22.000000, 165.000000)">
                        <g id="Group-10-Copy" transform="translate(341.000000, 148.000000)">
                            <g id="Group-3">
                                <mask id="mask-2" fill="white">
                                    <use xlink:href="#path-1"></use>
                                </mask>
                                <g id="Clip-2"></g>
                                <path d="M77.6689561,157.771829 L129.208254,105.493579 L129.208254,157.771829 L77.6689561,157.771829 Z M129.208254,52.7459765 L77.6689561,0.466564706 L129.208254,0.466564706 L129.208254,52.7459765 Z M42.1584298,5.83391765 L42.1584298,152.632182 C16.7240439,134.899006 -0.000342105262,111.100256 -0.000342105262,79.1261676 C-0.000342105262,47.1509176 16.7240439,23.5682559 42.1584298,5.83391765 L42.1584298,5.83391765 Z" id="Fill-1" fill="#FFFFFF" mask="url(#mask-2)"></path>
                            </g>
                            <g id="Group-6" transform="translate(163.000000, 0.000000)">
                                <mask id="mask-4" fill="white">
                                    <use xlink:href="#path-3"></use>
                                </mask>
                                <g id="Clip-5"></g>
                                <path d="M133.970225,104.328329 C133.970225,131.405579 119.958826,148.670565 95.5890381,157.999535 L95.5890381,0.466564706 L133.970225,0.466564706 L133.970225,104.328329 Z M0.439207627,0.466564706 L38.8215381,0.466564706 L38.8215381,157.999535 C14.4631907,148.670565 0.439207627,131.405579 0.439207627,104.328329 L0.439207627,0.466564706 Z" id="Fill-4" fill="#FFFFFF" mask="url(#mask-4)"></path>
                            </g>
                            <g id="Group-9" transform="translate(327.000000, 0.000000)">
                                <mask id="mask-6" fill="white">
                                    <use xlink:href="#path-5"></use>
                                </mask>
                                <g id="Clip-8"></g>
                                <path d="M152.251099,52.7455118 L103.172353,0.467261765 L152.251099,0.467261765 L152.251099,52.7455118 Z M57.0668306,157.772526 L95.1364276,157.772526 L95.1364276,0.467261765 L57.0668306,0.467261765 L57.0668306,157.772526 Z M49.2661142,0.467261765 L0.17595,52.2773206 L0.17595,0.467261765 L49.2661142,0.467261765 Z" id="Fill-7" fill="#FFFFFF" mask="url(#mask-6)"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
      </div> --}}


      <div class="plyr__video-embed" id="player" data-plyr-provider="vimeo">
          <iframe
            src="https://player.vimeo.com/video/566130862?autoplay=1&amp;loop=true&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;"
            allowfullscreen
            allowtransparency
            allow="autoplay"
          ></iframe>
      </div>

      <script> 
        //['captions', 'quality', 'speed', 'loop']
        const player 	= new Plyr('#player', {
          autoplay: true,
        });

        // Expose player so it can be used from the console
        window.player = player;
      </script>

    </section>

    @include('partials.content-blocks')
    @include('partials.last_block')

  @endwhile
@endsection