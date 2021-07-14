{{-- <article @php post_class() @endphp>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article> --}}

@php
  $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');

@endphp

<section class="section news__item" style="background-image:url({{ $featured_img_url }})">
  <div class="news__inner" data-aos="fade-up">

    <div class="news__bottom">
      <h1>{{ get_the_title() }}</h1>
      <span>{{ get_the_date('F Y') }}</span>
    </div>

    <a class="news__link" href="{{ get_permalink() }}"></a>

  </div>
</section>

{{-- @include('partials.content-blocks') --}}