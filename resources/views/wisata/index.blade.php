@extends("header")

@section("title", "Wisata Kota Samarinda")

@section("content")
<div class="byt-widget-search-inner" style="background-color:#003580;color:#ffffff;width:100%; text-align: left">
  <form class="widget-search" method="get" action="/wisata/filter">
    <div class="block block-1 full-width block-order-1">
      <div class="filter filter-group filter-block-1 filter-order-1 filter-type-location-select filter-tour"
        style="width: 400px">
        <div class="select">
          <label for="l_bookyourtravel_search_widget-1_0_l">Cari</label>
          <input type="text" id="hl_0_l" name="key" value="" />
        </div>
      </div>
      <div
        class="filter filter-group filter-block-1 filter-order-1 filter-type-location-select full-width  filter-tour">

      </div>
      <div class="filter filter-block-1 filter-order-10 filter-type-submit">
        <input type="submit" value="Telusuri" class="gradient-button" id="bookyourtravel_search_widget-1_search-submit">
      </div>
    </div>
  </form>
</div>

<div class="main">
  <style>
    .header {
      margin-bottom: 0px;
    }
  </style>
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