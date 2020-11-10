@extends("header")

@section("title", "Pariwisata Samarinda")

@section("content")
<div id="hero-sidebar" class="hero-sidebar widget-area">
  <ul>
    <li class="widget widget-sidebar full-width">
      <article class="byt-widget-search hCenter vBottom dOver " style=padding-top:160px;padding-bottom:160px;>
        <div class="byt-widget-search-inner" style=width:45%;>
          <form class="widget-search" method="get"
            action="https://themes.themeenergy.com/bookyourtravel/travel-tours/search-results/">
            <div class="block block-1 full-width block-order-1">
              <div style="display:none;"
                class="filter filter-block-1 filter-order-1 filter-type-what one-sixth"><span
                  class="label">What?</span>
                <div class='radio-wrap'><input checked type="radio"
                    id="bookyourtravel_search_widget-2-what-tour" name="what" value="4"><label
                    for="bookyourtravel_search_widget-2-what-tour">Tour</label></div>
              </div>
              <div
                class="filter filter-group filter-block-1 filter-order-1 filter-type-location-select three-fourth  filter-tour">
                <div class="select"><label for="l_bookyourtravel_search_widget-2_0_l"></label><input
                    type="hidden" id="hl_0_l" name="hl0l" value=""><select class="filter-locations"
                    data-relid="hl_0_l" id="l_bookyourtravel_search_widget-2_0_l" name="l">
                    <option value=""></option>
                    <option value="kota">Samarinda Kota</option>
                    <option value="seberang">Samarinda Seberang</option>
                  </select></div>
              </div>
              <div class="filter filter-block-1 filter-order-10 filter-type-submit one-fourth">
                <input type='submit' value='Cari' class='gradient-button'
                  id='bookyourtravel_search_widget-2_search-submit' /></div>
            </div>
          </form>
        </div>
      </article>
    </li>
    <li class="widget widget-sidebar full-width">
      <!-- START TravelTours REVOLUTION SLIDER 6.2.17 -->
      <p class="rs-p-wp-fix"></p>
      <div class="carousel-slick-slider">
        <div>content 1</div>
        <div>content 2</div>
        <div>content 3</div>
      </div>
      <!-- END REVOLUTION SLIDER -->
    </li>
  </ul>
</div><!-- #hero -->
<div class="main">
  <div class="wrap">
    <section>
      <article>
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1557824355992">
          <div class="wpb_column vc_column_container vc_col-sm-3">
            <div class="vc_column-inner">
              <div class="wpb_wrapper"></div>
            </div>
          </div>
          <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <h1 style="font-size: 37px;text-align: center"
                  class="vc_custom_heading vc_custom_1557824316629">Rekomendasi Pariwisata
                </h1>
              </div>
            </div>
          </div>
          <div class="wpb_column vc_column_container vc_col-sm-3">
            <div class="vc_column-inner">
              <div class="wpb_wrapper"></div>
            </div>
          </div>
        </div>
        <div class="vc_row wpb_row vc_row-fluid">
          <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <div class="widget widget-sidebar ">
                  <div class="s-title">
                    <h2></h2>
                  </div>
                  <div class="deals">
                    <div class="row">
                      @foreach ($wisata_all as $wisata)
                      <article data-tour-id="{{ $wisata->id }}" class="tour_item one-fourth ">
                        <div>
                          <a href="/wisata/{{ $wisata->id }}"
                            title="{{ $wisata->nama }}">
                            <figure>
                              <img src="{{ $wisata->gambar }}"
                                class="attachment-thumbnail size-thumbnail wp-post-image"
                                style="width: 360px; height: 200px" alt=""
                                loading="lazy" title="{{ $wisata->nama }}" /></figure>
                          </a>
                          <div class="details ">
                            <div class='item-header'>
                              <h3><a href="/wisata/{{ $wisata->id }}"
                                  title="{{ $wisata->nama }}">{{ $wisata->nama }}</a></h3>
                              <span class="address"> {{ $wisata->lokasi }} </span>
                            </div>
                            <div class='description'>
                              <p>{{ $wisata->deskripsi_singkat }}</p>
                            </div>
                            <div class='actions'><a
                                href='/wisata/{{ $wisata->id }}'
                                class='gradient-button edit-entity' data-id='436'
                                title='Lebih Lanjut'>Lebih Lanjut</a>
                            </div>
                          </div>
                          <!--//details--><a
                            href="/wisata/{{ $wisata->id }}"
                            class="overlay-link"></a>
                        </div>
                      </article>
                      @endforeach
                    </div>
                    <!--row-->
                  </div>
                  <!--deals-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1557824652572">
          <div class="wpb_column vc_column_container vc_col-sm-3">
            <div class="vc_column-inner">
              <div class="wpb_wrapper"></div>
            </div>
          </div>
          <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <h1 style="font-size: 37px;text-align: center"
                  class="vc_custom_heading vc_custom_1557824467886">Rekomendasi Kuliner</h1>
              </div>
            </div>
          </div>
          <div class="wpb_column vc_column_container vc_col-sm-3">
            <div class="vc_column-inner">
              <div class="wpb_wrapper"></div>
            </div>
          </div>
        </div>
        <div class="vc_row wpb_row vc_row-fluid">
          @foreach ($kuliner_all as $kuliner)
          <div class="wpb_column vc_column_container vc_col-sm-3">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <div class="widget widget-sidebar ">
                  <article class="location_item single-card">
                    <div><a href="/kuliner/{{ $kuliner->id }}"
                        title="{{ $kuliner->nama }}">
                        <figure><img
                            src="{{ $kuliner->gambar }}"
                            class="attachment-thumbnail size-thumbnail wp-post-image"
                            loading="lazy" title="sq3"
                            style="min-width: 200px; height: 200px;"/></figure>
                      </a>
                      <div class="details hide-actions hide-description hide-counts ">
                        <div class='item-header'>
                          <h3><a href="/kuliner/{{ $kuliner->id }}"
                              title="{{ $kuliner->nama }}">{{ $kuliner->nama }}</a></h3>
                        </div>
                        <!--ribbon-->
                      </div>
                      <!--//details--><a
                        href="/kuliner/{{ $kuliner->id }}"
                        class="overlay-link"></a>
                    </div>
                  </article>
                  <!--//location_item-->
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
          class="vc_row wpb_row vc_row-fluid vc_custom_1557848166265 vc_row-has-fill">
          <div class="wpb_column vc_column_container vc_col-sm-3">
            <div class="vc_column-inner">
              <div class="wpb_wrapper"></div>
            </div>
          </div>
          <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <div
                  class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_zoomInUp zoomInUp">
                  <div class="wpb_wrapper">
                    <h5 style="text-align: center;"><span style="color: #ffffff;">“I decided
                        to go skydiving with Travel &amp; Tours, and it was the best
                        decision I ever made. I felt really safe all the time, and it
                        was evident that everyone involved were true professionals. This
                        made my trip to Europe unforgettable!”</span></h5>
                    <p style="text-align: center;"><span style="color: #ffffff;"><strong>&#8211;
                          Jorge B.</strong></span>
                    </p>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="wpb_column vc_column_container vc_col-sm-3">
            <div class="vc_column-inner">
              <div class="wpb_wrapper"></div>
            </div>
          </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
      </article>
    </section>
  </div>
</div>
@endsection
