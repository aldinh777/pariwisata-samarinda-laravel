@extends("header")

@section("title", "Pariwisata Samarinda")

@section("content")

<style>
  /* Extra small devices (phones, 600px and down) */
  @media only screen and (max-width: 600px) {
    .mainx {
      display: none;
    }
  }

  /* Medium devices (landscape tablets, 768px and up) */
  @media only screen and (min-width: 768px) {
    .swiper-mobile {
      display: none;
    }
  }

  /* Large devices (laptops/desktops, 992px and up) */
  @media only screen and (min-width: 992px) {
    .swiper-mobile {
      display: none;
    }
  }

  /* Extra large devices (large laptops and desktops, 1200px and up) */
  @media only screen and (min-width: 1200px) {
    .swiper-mobile {
      display: none;
    }
  }

  .containerx {
    max-width: 99rem;
    width: 100%;
    margin: 0 auto;
  }

  .arrow-icon::before {
    content: none;
  }

  .mainx .container .swiper-container .swiper-wrapper .swiper-slide .card-image {
    background: #ffffff;
    border: none;
    outline: none;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 3px rgba(0, 0, 0, 0.24);
    border-radius: 2px;
  }

  .mainx .container .swiper-container .swiper-wrapper .swiper-slide .card-image img {
    display: block;
    position: relative;
    left: 0;
    bottom: 0;
    width: 100%;
    height: auto;
    -o-object-fit: cover;
    object-fit: cover;
  }

  .mainx .container .swiper-container .swiper-pagination-bullet {
    opacity: 0.8;
    background: #252a32;
  }

  .mainx .container .swiper-container .swiper-pagination-bullet-active {
    background: #ffffff;
  }

  .mainx .container .swiper-container .swiper-button-next,
  .mainx .container .swiper-container .swiper-button-prev {
    background-image: none;
    background-size: 0;
    background-repeat: no-repeat;
    background-position: 0;
    margin-top: -1rem;
  }

  .mainx .container .swiper-container .swiper-button-next .arrow-icon,
  .mainx .container .swiper-container .swiper-button-prev .arrow-icon {
    font-size: 2rem;
    color: #ffffff;
  }
</style>
<div class="mainx">
  <div class="containerx">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="card-image">
            <img src="https://source.unsplash.com/1280x720/?nature" alt="Image Slider">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-image">
            <img src="https://source.unsplash.com/1280x720/?nature,water,animal" alt="Image Slider">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-image">
            <img src="https://source.unsplash.com/1280x720/?water" alt="Image Slider">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-image">
            <img src="https://source.unsplash.com/1280x720/?animal" alt="Image Slider">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-image">
            <img src="https://source.unsplash.com/1280x720/?travel" alt="Image Slider">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-image">
            <img src="https://source.unsplash.com/1280x720/?flower" alt="Image Slider">
          </div>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Scrollbar -->
      <div class="swiper-button-next">
        <i class="fas fa-chevron-circle-right arrow-icon"></i>
      </div>
      <div class="swiper-button-prev">
        <i class="fas fa-chevron-circle-left arrow-icon"></i>
      </div>
    </div>
  </div>
</div>

<div class="swiper-mobile" style="width: 100%; height: 320px; overflow: hidden">
  <div class="swiper-wrapper">
    <div class="swiper-slide"
      style="background: url('/img/islamic-center.jpg'); background-position: center; background-size: cover">
    </div>
    <div class="swiper-slide"
      style="background: url('https://kaltimtoday.co/wp-content/uploads/2019/09/zAIRIN-sAROWON.jpeg'); background-position: center; background-size: cover">
    </div>
    <div class="swiper-slide"
      style="background: url('https://akcdn.detik.net.id/visual/2020/07/06/naruto-1_169.png?w=650'); background-position: center; background-size: cover">
    </div>
  </div>
</div>

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
                <h1 style="font-size: 37px;text-align: center" class="vc_custom_heading vc_custom_1557824316629">
                  Rekomendasi Pariwisata
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
                          <a href="/wisata/{{ $wisata->id }}" title="{{ $wisata->nama }}">
                            <figure>
                              <img src="{{ $wisata->gambar }}" class="attachment-thumbnail size-thumbnail wp-post-image"
                                style="width: 360px; height: 200px" alt="" loading="lazy" title="{{ $wisata->nama }}" />
                            </figure>
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
                            <div class='actions'><a href='/wisata/{{ $wisata->id }}' class='gradient-button edit-entity'
                                data-id='436' title='Lebih Lanjut'>Lebih Lanjut</a>
                            </div>
                          </div>
                          <!--//details--><a href="/wisata/{{ $wisata->id }}" class="overlay-link"></a>
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
                <h1 style="font-size: 37px;text-align: center" class="vc_custom_heading vc_custom_1557824467886">
                  Rekomendasi Kuliner</h1>
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
                    <div><a href="/kuliner/{{ $kuliner->id }}" title="{{ $kuliner->nama }}">
                        <figure><img src="{{ $kuliner->gambar }}"
                            class="attachment-thumbnail size-thumbnail wp-post-image" loading="lazy" title="sq3"
                            style="min-width: 200px; height: 200px;" /></figure>
                      </a>
                      <div class="details hide-actions hide-description hide-counts ">
                        <div class='item-header'>
                          <h3><a href="/kuliner/{{ $kuliner->id }}"
                              title="{{ $kuliner->nama }}">{{ $kuliner->nama }}</a></h3>
                        </div>
                        <!--ribbon-->
                      </div>
                      <!--//details--><a href="/kuliner/{{ $kuliner->id }}" class="overlay-link"></a>
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
                <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_zoomInUp zoomInUp">
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

<script>
  // Swiper Configuration
  var swiper = new Swiper(".swiper-container", {
    slidesPerView: 1.5,
    spaceBetween: 10,
    centeredSlides: true,
    freeMode: true,
    grabCursor: true,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    breakpoints: {
      500: {
        slidesPerView: 1
      },
      700: {
        slidesPerView: 1.5
      }
    }
  });

  var swiperMobile = new Swiper('.swiper-mobile', {
    direction: 'horizontal',
    loop: true,
  });
</script>
@endsection