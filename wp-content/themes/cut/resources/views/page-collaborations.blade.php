@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    {{-- @include('partials.page-header') --}}
    {{-- @include('partials.content-blocks')
    @include('partials.content-page') --}}

      @include('partials.collaboration')
      @include('partials.last_block')

  @endwhile
@endsection
