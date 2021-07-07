@foreach($articles['articles'] as $item)
  <section class="section collaborations__item" style="background-image:url({{ $item['thumbnail'] }})">
    <div class="collaborations__inner" data-aos="fade-up">

      <div class="collaborations__bottom">
        <h1>{{ $item['title'] }}</h1>
      </div>

      <a class="collaborations__link" href="{{ $item['slug'] }}"></a>

    </div>
  </section>
@endforeach