@extends("header")

@section("title", "Kafe Kota Samarinda")

@section("content")
<div style="text-align: center; min-height: 320px">
  <img src="https://st3.depositphotos.com/2100659/33242/v/1600/depositphotos_332426834-stock-illustration-mega-sale-concept-horizontal-banner.jpg" alt="" style="height: 100%; width: auto">
</div>

<div class="main">
  <div class="wrap">
    <div class="row">
      <section>        
        <article class="post-46 page type-page status-publish hentry" id="page-46">
          <h1 class="page-title">Kafe Kota Samarinda</h1>
        </article>
        <div class="deals">
          <div class="row">
            @foreach ($kafe_all as $kafe)
            <article data-tour-id="{{ $kafe->id }}" class="tour_item one-third ">
              <div><a href="/kafe/{{ $kafe->id }}"
                  title="{{ $kafe->nama }}">
                  <figure>
                    <img width="600" src="{{ $kafe->gambar }}"
                      class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                      loading="lazy" title="{{ $kafe->nama }}"
                      style="height: 350px" /></figure>
                </a>
                <div class="details ">
                  <div class='item-header'>
                    <h3><a href="/kafe/{{ $kafe->id }}"
                      title="{{ $kafe->nama }}">{{ $kafe->nama }}</a></h3>
                      <span class="address"> {{ $kafe->alamat }} </span>
                  </div>
                  <div class='description'>
                    <p>Jam Buka : {{ $kafe->jam_buka }}</p>
                  </div>
                  <div class='actions'><a
                      href='/kafe/{{ $kafe->id }}'
                      class='gradient-button edit-entity' data-id='{{ $kafe->id }}'
                      title='Pelajari Lebih Lanjut'>Lebih Lanjut</a></div>
                </div>
                <a href="/kafe/{{ $kafe->id }}"
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
