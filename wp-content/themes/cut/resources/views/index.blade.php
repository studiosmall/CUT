@extends('layouts.app')

@section('content')
  {{-- @include('partials.page-header') --}}

  @if (!have_posts())
    
    <section class="section collaborators">
    	<div class="collaborators__inner" data-aos="fade-up">
        @include('partials.page-header')
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
    </section>
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())

  @endwhile

  @include('partials.last_block')

  {{-- {!! get_the_posts_navigation() !!} --}}
@endsection
