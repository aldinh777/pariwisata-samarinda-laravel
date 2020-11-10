@extends("header")

@section("title", "Kuliner Kota Samarinda")

@section("content")
<div style="text-align: center; vertical-align: middle">
  <img src="https://st3.depositphotos.com/2100659/33242/v/1600/depositphotos_332426834-stock-illustration-mega-sale-concept-horizontal-banner.jpg" alt="" style="object-fit: contain">
</div>
  
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
                      loading="lazy" title="{{ $kuliner->nama }}" /></figure>
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
