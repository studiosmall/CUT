<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap" role="document">
      {{-- <div class="wrap__inner"> --}}
        <div class="content">
          <main id="main" class="main">
            <div id="first" class="horizontal-container">
              @yield('content')
            </div>
          </main>
        </div>
      {{-- </div> --}}
    </div>
    @php do_action('get_footer') @endphp
    {{-- @include('partials.footer') --}}
    @php wp_footer() @endphp
  </body>
</html>
