@extends("header")

@include("search_bar")

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

  .vc_row {
    margin: 0px;
  }
</style>

<div class="mainx">
  <div class="vc_row-full-width vc_clearfix" style="height: 10px;"></div>
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
  <div class="wrap" style="padding: 0px">
    <section>
      <article>
        <!-- Rekomendasi Wisata -->
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
        <div class="vc_row wpb_row vc_row-fluid" style="padding: 0 15px">
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
        <div class="vc_row-full-width vc_clearfix" style="height: 40px; background: #e2e2e2;"></div>

        <!-- Rekomendasi Kuliner -->
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
        <div class="vc_row wpb_row vc_row-fluid" style="padding: 0px 15px">
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
        <div class="vc_row-full-width vc_clearfix" style="height: 40px; background: #e2e2e2;"></div>

        <!-- Banner -->
        <div style="text-align: center; margin-top: 10px; padding: 20px">
          <img src="https://st3.depositphotos.com/2100659/33242/v/1600/depositphotos_332426834-stock-illustration-mega-sale-concept-horizontal-banner.jpg" alt="" style="object-fit: contain">
        </div>
        <div class="vc_row-full-width vc_clearfix" style="height: 40px; background: #e2e2e2;"></div>

        <!-- Rekomendasi Oleh-Oleh -->
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
                  Rekomendasi Oleh-Oleh</h1>
              </div>
            </div>
          </div>
          <div class="wpb_column vc_column_container vc_col-sm-3">
            <div class="vc_column-inner">
              <div class="wpb_wrapper"></div>
            </div>
          </div>
        </div>
        <div class="vc_row wpb_row vc_row-fluid" style="padding: 0px 15px">
          @foreach ($oleholeh_all as $oleholeh)
          <div class="wpb_column vc_column_container vc_col-sm-3">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <div class="widget widget-sidebar ">
                  <article class="location_item single-card">
                    <div><a href="/oleholeh/{{ $oleholeh->id }}" title="{{ $oleholeh->nama }}">
                        <figure><img src="{{ $oleholeh->gambar }}"
                            class="attachment-thumbnail size-thumbnail wp-post-image" loading="lazy" title="sq3"
                            style="min-width: 200px; height: 200px;" /></figure>
                      </a>
                      <div class="details hide-actions hide-description hide-counts ">
                        <div class='item-header'>
                          <h3><a href="/oleholeh/{{ $oleholeh->id }}"
                              title="{{ $oleholeh->nama }}">{{ $oleholeh->nama }}</a></h3>
                        </div>
                        <!--ribbon-->
                      </div>
                      <!--//details--><a href="/oleholeh/{{ $oleholeh->id }}" class="overlay-link"></a>
                    </div>
                  </article>
                  <!--//location_item-->
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="vc_row-full-width vc_clearfix" style="height: 40px; background: #e2e2e2;"></div>

        <!-- Rekomendasi Kafe -->
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
                  Rekomendasi Kafe
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
        <div class="vc_row wpb_row vc_row-fluid" style="padding: 0 15px">
          <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <div class="widget widget-sidebar ">
                  <div class="s-title">
                    <h2></h2>
                  </div>
                  <div class="deals">
                    <div class="row">
                      @foreach ($kafe_all as $kafe)
                      <article data-tour-id="{{ $kafe->id }}" class="tour_item one-fourth ">
                        <div>
                          <a href="/kafe/{{ $kafe->id }}" title="{{ $kafe->nama }}">
                            <figure>
                              <img src="{{ $kafe->gambar }}" class="attachment-thumbnail size-thumbnail wp-post-image"
                                style="width: 360px; height: 200px" alt="" loading="lazy" title="{{ $kafe->nama }}" />
                            </figure>
                          </a>
                          <div class="details ">
                            <div class='item-header'>
                              <h3><a href="/kafe/{{ $kafe->id }}"
                                  title="{{ $kafe->nama }}">{{ $kafe->nama }}</a></h3>
                              <span class="address"> {{ $kafe->lokasi }} </span>
                            </div>
                            <div class='description'>
                              <p>Jam Buka : {{ $kafe->jam_buka }}</p>
                            </div>
                            <div class='actions'><a href='/kafe/{{ $kafe->id }}' class='gradient-button edit-entity'
                                data-id='436' title='Lebih Lanjut'>Lebih Lanjut</a>
                            </div>
                          </div>
                          <!--//details--><a href="/kafe/{{ $kafe->id }}" class="overlay-link"></a>
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
        <div class="vc_row-full-width vc_clearfix" style="height: 40px; background: #e2e2e2;"></div>

        <!-- Banner -->
        <div style="text-align: center; margin-top: 10px; padding: 20px">
          <img src="https://st4.depositphotos.com/6188090/19830/v/1600/depositphotos_198308926-stock-illustration-super-sale-discount-horizontal-banner.jpg" alt="" style="object-fit: contain">
        </div>
        <div class="vc_row-full-width vc_clearfix" style="height: 40px; background: #e2e2e2;"></div>

        <!-- Rekomendasi workingspace -->
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
                  Rekomendasi Workingspace
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
        <div class="vc_row wpb_row vc_row-fluid" style="padding: 0 15px">
          <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <div class="widget widget-sidebar ">
                  <div class="s-title">
                    <h2></h2>
                  </div>
                  <div class="deals">
                    <div class="row">
                      @foreach ($workingspace_all as $workingspace)
                      <article data-tour-id="{{ $workingspace->id }}" class="tour_item one-fourth ">
                        <div>
                          <a href="/workingspace/{{ $workingspace->id }}" title="{{ $workingspace->nama }}">
                            <figure>
                              <img src="{{ $workingspace->gambar }}" class="attachment-thumbnail size-thumbnail wp-post-image"
                                style="width: 360px; height: 200px" alt="" loading="lazy" title="{{ $workingspace->nama }}" />
                            </figure>
                          </a>
                          <div class="details ">
                            <div class='item-header'>
                              <h3><a href="/workingspace/{{ $workingspace->id }}"
                                  title="{{ $workingspace->nama }}">{{ $workingspace->nama }}</a></h3>
                              <span class="address"> {{ $workingspace->lokasi }} </span>
                            </div>
                            <div class='description'>
                              <p>Jam Buka : {{ $workingspace->jam_buka }}</p>
                            </div>
                            <div class='actions'><a href='/workingspace/{{ $workingspace->id }}' class='gradient-button edit-entity'
                                data-id='436' title='Lebih Lanjut'>Lebih Lanjut</a>
                            </div>
                          </div>
                          <!--//details--><a href="/workingspace/{{ $workingspace->id }}" class="overlay-link"></a>
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
        <div class="vc_row-full-width vc_clearfix" style="height: 40px; background: #e2e2e2;"></div>
        <div class="vc_row-full-width vc_clearfix" style="height: 10px"></div>

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