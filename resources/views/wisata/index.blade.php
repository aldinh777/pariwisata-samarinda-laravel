@extends("header")

@section("title", "Wisata Kota Samarinda")

@section("content")
<div style="text-align: center; min-height: 320px">
  <img src="https://st3.depositphotos.com/2100659/33242/v/1600/depositphotos_332426834-stock-illustration-mega-sale-concept-horizontal-banner.jpg" alt="" style="height: 100%; width: auto">
</div>

<div class="main">
  <div class="wrap">
    <div class="row">
      <section class="">
        <article class="post-46 page type-page status-publish hentry" id="page-46">
          <h1 class="page-title">Destinasi Wisata Kota Samarinda</h1>
        </article>
        <div class="deals">
          <div class="row">
            @foreach ($wisata_all as $wisata)
            <article data-tour-id="{{ $wisata->id }}" class="tour_item one-fourth ">
              <div><a href="/wisata/{{ $wisata->id }}" title="{{ $wisata->nama }}">
                  <figure>
                    <img width="600" height="500" src="{{ $wisata->gambar }}"
                      class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy"
                      title="{{ $wisata->nama }}" /></figure>
                </a>
                <div class="details ">
                  <div class='item-header'>
                    <h3><a href="/wisata/{{ $wisata->id }}" title="{{ $wisata->nama }}">{{ $wisata->nama }}</a></h3>
                    <span class="address"> {{ $wisata->lokasi }} </span>
                  </div>
                  <div class='description'>
                    <p>{{ $wisata->deskripsi_singkat }}</p>
                  </div>
                  <div class='actions'><a href='/wisata/{{ $wisata->id }}' class='gradient-button edit-entity'
                      data-id='{{ $wisata->id }}' title='Pelajari Lebih Lanjut'>Lebih Lanjut</a></div>
                </div>
                <a href="/wisata/{{ $wisata->id }}" class="overlay-link"></a>
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