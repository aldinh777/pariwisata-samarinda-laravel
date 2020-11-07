@extends("header")

@section("title", $workingspace->nama)

@section("content")
<div class="main" style="margin-top: 20px">
  <div class="wrap">
    <div class="row">
      <section class="three-fourth section-tour-content">
        <!--gallery-->
        <ul class="post-gallery">
          <li style="list-style-type: none">
            <img width="1000"
              src="{{ $workingspace->gambar }}" alt="" />
          </li>
        </ul>
        <!--//gallery-->
        <!--inner navigation-->
        <section id="description" class="tab-content initial layout-above">
          <article>
            <h2>{{ $workingspace->nama }}</h2>
            <div class="description">
              <div class="text-wrap">
                <p><strong>{{ $workingspace->alamat }}</strong></p>
                <ul>
                  <li>Jam Buka : {{ $workingspace->jam_buka }}</li>
                </ul>
                <p style="white-space: pre-wrap">{{ $workingspace->deskripsi }}</p>
              </div>
            </div>

          </article>
        </section>
      </section>

      <aside id="secondary" class="right-sidebar widget-area one-fourth">
        <ul>
          <li class="widget widget-sidebar full-width">
            <div class="s-title">
              <h4>Lihat Juga</h4>
            </div>
            <div class="deals">
              <div class="row">
                @foreach ($rekomendasi_all as $rekomendasi)
                <article data-tour-id="{{ $rekomendasi->id }}" class="tour_item full-width ">
                  <div><a href=" /workingspace/{{ $rekomendasi->id }} "
                      title="{{ $rekomendasi->nama }}">
                      <figure><img width="600" height="500"
                          src="{{ $rekomendasi->gambar }}"
                          class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                          loading="lazy" title="{{ $rekomendasi->nama }}" /></figure>
                    </a>
                    <div class="details hide-actions hide-description hide-rating ">
                      <div class='item-header'>
                        <h3><a href=" /workingspace/{{ $rekomendasi->id }} "
                            title="{{ $rekomendasi->nama }}">{{ $rekomendasi->nama }}</a></h3>
                            <span class="address">Jam Buka : {{ $rekomendasi->jam_buka }}</span>
                      </div>
                    </div>
                    <!--//details--><a
                      href=" /workingspace/{{ $rekomendasi->id }} "
                      class="overlay-link"></a>
                  </div>
                </article>
                @endforeach
              </div>
              <!--row-->
            </div>
            <!--deals-->
          </li>
        </ul>
      </aside><!-- #secondary -->
    </div>
  </div>
  <!--// .wrap -->
</div>
@endsection
