@extends("header")

@include("search")

@section("title", "Oleh-Oleh Kota Samarinda")

@section("content")
<div class="main">
  <div class="wrap">
    <div class="row">
      <section>
        <article class="post-46 page type-page status-publish hentry" id="page-46">
          <h1 class="page-title">Oleh-Oleh Kota Samarinda</h1>
        </article>
        <div class="deals">
          <div class="row">
            @foreach ($oleholeh_all as $oleholeh)
            <article data-tour-id="{{ $oleholeh->id }}" class="tour_item one-third ">
              <div><a href="/oleholeh/{{ $oleholeh->id }}"
                  title="{{ $oleholeh->nama }}">
                  <figure>
                    <img width="600" height="500" src="{{ $oleholeh->gambar }}"
                      class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                      loading="lazy" title="{{ $oleholeh->nama }}" /></figure>
                </a>
                <div class="details ">
                  <div class='item-header'>
                    <h3><a href="/oleholeh/{{ $oleholeh->id }}"
                      title="{{ $oleholeh->nama }}">{{ $oleholeh->nama }}</a></h3>
                  </div>
                  <div class='description'>
                    <p>{{ $oleholeh->deskripsi_singkat }}</p>
                  </div>
                  <div class='actions'><a
                      href='/oleholeh/{{ $oleholeh->id }}'
                      class='gradient-button edit-entity' data-id='{{ $oleholeh->id }}'
                      title='Pelajari Lebih Lanjut'>Lebih Lanjut</a></div>
                </div>
                <a href="/oleholeh/{{ $oleholeh->id }}"
                  class="overlay-link"></a>
              </div>
            </article>
            @endforeach
          </div>
          <!--row-->
        </div>
        <!--deals-->
      </section>
    </div>
  </div>
</div>
@endsection
