@extends("header")

@section("title", "Hasil Pencarian")

@section("search_value", $key)

@section("content")
<style>
  .vc_row {
    margin: 0px;
  }
</style>

<div class="main">
  <div class="wrap" style="padding: 0px">
    <section>
      <article>
        @if ($no_data)
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
                  Pencarian Tidak Ditemukan
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
        @endif

        @if (count($wisata_all) > 0)
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
                  Hasil Pencarian Wisata
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
        @endif

        @if (count($kuliner_all) > 0)
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
                  Hasil Pencarian Kuliner</h1>
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
        @endif

        @if (count($oleholeh_all) > 0)
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
                  Hasil Pencarian Oleh-Oleh</h1>
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
        @endif

        @if (count($kafe_all) > 0)
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
                  Hasil Pencarian Kafe
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
        @endif

        @if (count($workingspace_all) > 0)
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
                  Hasil Pencarian Workingspace
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
        @endif

        <div class="vc_row-full-width vc_clearfix" style="height: 10px"></div>

      </article>
    </section>
  </div>
</div>
@endsection
