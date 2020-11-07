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
      <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery"
        style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module id="rev_slider_1_1" style="" data-version="6.2.17">
          <rs-slides>
            <rs-slide data-key="rs-1" data-title="Slide" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
              <img src="/img/islamic-center.jpg" title="Home Travel Tours"
                data-panzoom="d:40000;ss:100;se:150;" class="rev-slidebg" data-no-retina>
              <!--
							-->
              <rs-layer id="slider-1-slide-1-layer-1" data-type="text" data-rsp_ch="on"
                data-xy="x:c;y:t,t,m,m;yo:165px,165px,-30px,-30px;"
                data-text="s:51;l:51;fw:600;a:center;" data-frame_0="tp:600;"
                data-frame_1="tp:600;st:0;" data-frame_999="o:0;tp:600;st:w;sR:8700;"
                style="z-index:5;font-family:Montserrat;">Mau pergi kemana yang mulia?
              </rs-layer>
              <!--

							-->
              <rs-layer id="slider-1-slide-1-layer-2" data-type="text"
                data-color="rgba(255, 255, 255, 0.85)" data-rsp_ch="on"
                data-xy="x:c;y:t,t,m,m;yo:220px,220px,10px,10px;" data-text="l:20;a:center;"
                data-frame_0="tp:600;" data-frame_1="tp:600;st:0;"
                data-frame_999="o:0;tp:600;st:w;sR:8700;" style="z-index:6;font-family:Montserrat;">
                Nikmati indahnya kota samarinda
                layaknya seorang raja
              </rs-layer>
              <!---->
            </rs-slide>
          </rs-slides>
        </rs-module>
        <script type="text/javascript">
          setREVStartSize({
            c: 'rev_slider_1_1',
            rl: [1240, 1240, 778, 778],
            el: [],
            gw: [1240, 1240, 778, 778],
            gh: [600, 600, 300, 300],
            type: 'standard',
            justify: '',
            layout: 'fullwidth',
            mh: "0"
          });
          var revapi1,
            tpj;
          jQuery(function () {
            tpj = jQuery;
            revapi1 = tpj("#rev_slider_1_1");
            if (revapi1 == undefined || revapi1.revolution == undefined) {
              revslider_showDoubleJqueryError("rev_slider_1_1");
            } else {
              revapi1.revolution({
                sliderLayout: "fullwidth",
                visibilityLevels: "1240,1240,778,778",
                gridwidth: "1240,1240,778,778",
                gridheight: "600,600,300,300",
                perspectiveType: "local",
                responsiveLevels: "1240,1240,778,778",
                progressBar: {
                  disableProgressBar: true
                },
                navigation: {
                  onHoverStop: false
                },
                fallbacks: {
                  allowHTML5AutoPlayOnAndroid: true
                },
              });
            }

          });

        </script>
      </rs-module-wrap>
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
