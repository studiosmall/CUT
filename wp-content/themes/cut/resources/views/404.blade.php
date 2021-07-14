@extends('layouts.app')

@section('content')

  @if (!have_posts())
    <section class="section collaborators">
    	<div class="collaborators__inner" data-aos="fade-up">
        @include('partials.page-header')
        {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
      </div>
    </section>
    
  @endif
@endsection
