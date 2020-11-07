@extends("header")

@section("title", "Wisata Kota Samarinda")

@section("content")
<div class="main">
  <div class="wrap">
    <div class="row">
      <aside id="secondary" class="left-sidebar widget-area one-fourth" style="margin-top: 20px">
        <ul>
          <li class="widget widget-sidebar full-width">
            <article class="byt-widget-search hCenter vMiddle dOver ">
              <div class="byt-widget-search-inner"
                style=background-color:#003580;color:#ffffff;width:100%;>
                <form class="widget-search" method="get"
                  action="https://themes.themeenergy.com/bookyourtravel/travel-tours/search-results/">
                  <div class="block block-1 full-width block-order-1">
                    <div style="display:none;"
                      class="filter filter-block-1 filter-order-1 filter-type-what one-sixth">
                      <span class="label">What?</span>
                      <div class='radio-wrap'><input checked type="radio"
                          id="bookyourtravel_search_widget-1-what-tour" name="what"
                          value="4"><label
                          for="bookyourtravel_search_widget-1-what-tour">Tour</label>
                      </div>
                    </div>
                    <div
                      class="filter filter-group filter-block-1 filter-order-1 filter-type-location-select full-width  filter-tour">
                      <div class="select"><label
                          for="l_bookyourtravel_search_widget-1_0_l">Kategori</label><input
                          type="hidden" id="hl_0_l" name="hl0l" value=""><select
                          class="filter-locations" data-relid="hl_0_l"
                          id="l_bookyourtravel_search_widget-1_0_l" name="l">
                          <option value=""></option>
                          <option value="150">Religi</option>
                          <option value="118">Lokal</option>
                        </select></div>
                    </div>
                    <div
                      class="filter filter-group filter-block-1 filter-order-1 filter-type-location-select full-width  filter-tour">
                      <div class="select"><label
                          for="l_bookyourtravel_search_widget-1_0_l">Daerah</label><input
                          type="hidden" id="hl_0_l" name="hl0l" value=""><select
                          class="filter-locations" data-relid="hl_0_l"
                          id="l_bookyourtravel_search_widget-1_0_l" name="l">
                          <option value=""></option>
                          <option value="118">Samarinda Seberang</option>
                          <option value="112">Samarinda Ulu</option>
                          <option value="121">Samarinda Utara</option>
                          <option value="121">Samarinda Timur</option>
                          <option value="121">Samarinda Selatan</option>
                          <option value="121">Samarinda Barat</option>
                        </select></div>
                    </div>
                    <div
                      class="filter filter-block-1 filter-order-10 filter-type-submit full-width">
                      <input type='submit' value='Terapkan filter' class='gradient-button'
                        id='bookyourtravel_search_widget-1_search-submit' /></div>
                  </div>
                </form>
              </div>
            </article>
          </li>
        </ul>
      </aside><!-- #secondary -->

      <section class="three-fourth">
        <article class="post-46 page type-page status-publish hentry" id="page-46">
          <h1 class="page-title">Destinasi Wisata Kota Samarinda</h1>
        </article>
        <div class="deals">
          <div class="row">
            @foreach ($wisata_all as $wisata)
            <article data-tour-id="{{ $wisata->id }}" class="tour_item one-third ">
              <div><a href="/wisata/{{ $wisata->id }}"
                  title="{{ $wisata->nama }}">
                  <figure>
                    <img width="600" height="500" src="{{ $wisata->gambar }}"
                      class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                      loading="lazy" title="tac5" /></figure>
                </a>
                <div class="details ">
                  <div class='item-header'>
                    <h3><a href="/wisata/{{ $wisata->id }}"
                        title="{{ $wisata->nama }}">{{ $wisata->nama }}</a></h3> <span
                      class="address"> {{ $wisata->lokasi }} </span>
                  </div>
                  <div class='description'>
                    <p>{{ $wisata->deskripsi_singkat }}</p>
                  </div>
                  <div class='actions'><a
                      href='/wisata/{{ $wisata->id }}'
                      class='gradient-button edit-entity' data-id='{{ $wisata->id }}'
                      title='Pelajari Lebih Lanjut'>Lebih Lanjut</a></div>
                </div>
                <a href="/wisata/{{ $wisata->id }}"
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
