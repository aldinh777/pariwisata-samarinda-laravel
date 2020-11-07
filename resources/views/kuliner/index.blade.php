@extends("header")

@section("title", "kuliner Kota Samarinda")

@section("content")
<div class="main">
  <div class="wrap">
    <div class="row">
      <section>
        <article class="post-46 page type-page status-publish hentry" id="page-46">
          <h1 class="page-title">Kuliner Kota Samarinda</h1>
        </article>
        <div class="deals">
          <div class="row">
            @foreach ($kuliner_all as $kuliner)
            <article data-tour-id="{{ $kuliner->id }}" class="tour_item one-third ">
              <div><a href="/kuliner/{{ $kuliner->id }}"
                  title="{{ $kuliner->nama }}">
                  <figure>
                    <img width="600" height="500" src="{{ $kuliner->gambar }}"
                      class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                      loading="lazy" title="tac5" /></figure>
                </a>
                <div class="details ">
                  <div class='item-header'>
                    <h3><a href="/kuliner/{{ $kuliner->id }}"
                      title="{{ $kuliner->nama }}">{{ $kuliner->nama }}</a></h3>
                  </div>
                  <div class='description'>
                    <p>{{ $kuliner->deskripsi_singkat }}</p>
                  </div>
                  <div class='actions'><a
                      href='/kuliner/{{ $kuliner->id }}'
                      class='gradient-button edit-entity' data-id='{{ $kuliner->id }}'
                      title='Pelajari Lebih Lanjut'>Lebih Lanjut</a></div>
                </div>
                <a href="/kuliner/{{ $kuliner->id }}"
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
