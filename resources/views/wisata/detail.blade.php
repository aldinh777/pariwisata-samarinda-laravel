@extends("header")

@section("title", $wisata->nama)

@section("content")
<div class="main">
  <div class="wrap">
    <div class="row">
      <!--full-width content-->

      <section class="three-fourth section-tour-content">
        <!--gallery-->
        <ul class="post-gallery">
          <li><img src="{{ $wisata->gambar }}"
              alt="" width="100%" /></li>
        </ul>
        <!--//gallery-->
        <!--inner navigation-->
        <nav class="inner-nav layout-above">
          <ul>
            <li class='description'><a class="explore" href="#description" title="Overview"><span
                  class='material-icons'>explore</span>Overview</a></li>
            <li class='itinerary'><a class="place" href="#itinerary" title="Itinerary"><span
                  class='material-icons'>place</span>Lokasi</a></li>
            <li class='accommodation'><a class="business" href="#accommodation" title="Accommodation"><span
                  class='material-icons'>business</span>Penginapan</a></li>
            <li class='reviews'><a class="insert_emoticon" href="#reviews" title="Reviews"><span
                  class='material-icons'>insert_emoticon</span>Review</a></li>
          </ul>
        </nav>
        <section id="description" class="tab-content initial layout-above" style="display:none">
          <article>

            <h2>{{ $wisata->nama }}</h2>
            <div class="description">
              <div class="text-wrap">
                <p><strong>{{ $wisata->lokasi }}</strong>
                </p>
                <p style="white-space: pre-wrap;">{{ $wisata->deskripsi }}</p>
              </div>
            </div>

          </article>
        </section>
        <section id="itinerary" class="tab-content  layout-above" style="display:none">
          <article>

            <div class='text-wrap activities'>
              <h2>Itinerary</h2>
              <p><img class="alignleft size-full wp-image-106"
                  src="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/sample_media/sites/26/2019/04/sq5-400x400.jpg"
                  alt="" width="400" height="400" /></p>
              <p>&nbsp;</p>
              <p><strong>Day 1</strong></p>
              <p>Tingling of the spine of brilliant syntheses worldlets vastness is bearable only
                through love citizens of distant epochs <strong>rich in mystery</strong>. With
                pretty stories for which there's little good evidence a still more glorious dawn
                awaits star stuff harvesting star light a mote of dust suspended in a sunbeam
              </p>
              <p>Of brilliant syntheses invent the universe citizens of distant epochs are
                creatures of the cosmos rich in mystery. How far away <strong>vanquish the
                  possible network</strong> of wormholes inconspicuous motes of rock and gas
                concept of the number one Apollonius of Perga.</p>
              <hr />
              <p><img class="alignleft size-full wp-image-103"
                  src="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/sample_media/sites/26/2019/04/sq2-400x400.jpg"
                  alt="" width="400" height="400" /></p>
              <p>&nbsp;</p>
              <p><strong>Day 2</strong></p>
              <p>Tingling of the spine of brilliant syntheses worldlets vastness is bearable only
                through love citizens of distant epochs <strong>rich in mystery</strong>. With
                pretty stories for which there's little good evidence a still more glorious dawn
                awaits star stuff harvesting star light a mote of dust suspended in a sunbeam
              </p>
              <p>Of brilliant syntheses invent the universe citizens of distant epochs are
                creatures of the cosmos rich in mystery. How far away <strong>vanquish the
                  possible network</strong> of wormholes inconspicuous motes of rock and gas
                concept of the number one Apollonius of Perga.</p>
              <hr />
              <p><img class="alignleft size-full wp-image-104"
                  src="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/sample_media/sites/26/2019/04/sq3-400x400.jpg"
                  alt="" width="400" height="400" /></p>
              <p>&nbsp;</p>
              <p><strong>Day 3</strong></p>
              <p>Tingling of the spine of brilliant syntheses worldlets vastness is bearable only
                through love citizens of distant epochs <strong>rich in mystery</strong>. With
                pretty stories for which there's little good evidence a still more glorious dawn
                awaits star stuff harvesting star light a mote of dust suspended in a sunbeam
              </p>
              <p>Of brilliant syntheses invent the universe citizens of distant epochs are
                creatures of the cosmos rich in mystery. How far away <strong>vanquish the
                  possible network</strong> of wormholes inconspicuous motes of rock and gas
                concept of the number one Apollonius of Perga.</p>
              <hr />
              <p><img class="alignleft size-full wp-image-105"
                  src="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/sample_media/sites/26/2019/04/sq4-400x400.jpg"
                  alt="" width="400" height="400" /></p>
              <p>&nbsp;</p>
              <p><strong>Day 4</strong></p>
              <p>Tingling of the spine of brilliant syntheses worldlets vastness is bearable only
                through love citizens of distant epochs <strong>rich in mystery</strong>. With
                pretty stories for which there's little good evidence a still more glorious dawn
                awaits star stuff harvesting star light a mote of dust suspended in a sunbeam
              </p>
              <p>Of brilliant syntheses invent the universe citizens of distant epochs are
                creatures of the cosmos rich in mystery. How far away <strong>vanquish the
                  possible network</strong> of wormholes inconspicuous motes of rock and gas
                concept of the number one Apollonius of Perga.</p>
            </div>

          </article>
        </section>
        <section id="accommodation" class="tab-content  layout-above" style="display:none">
          <article>

            <div class='text-wrap accommodation_1'>
              <h2>Accommodation</h2>
              <p>Muse about Orion's sword consciousness hearts of the stars tingling of the spine
                realm of the galaxies. Two ghostly white figures in coveralls and helmets are
                soflty dancing great turbulent clouds with pretty stories for which there's
                little good evidence paroxysm of global death citizens of distant epochs
                vastness is bearable only through love. </p>
              <div id='gallery-1' class='gallery galleryid-434 gallery-columns-3 gallery-size-full'>
                <figure class='gallery-item'>
                  <div class='gallery-icon landscape'>
                    <img width="400" height="400"
                      src="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/sq9.jpg"
                      class="attachment-full size-full" alt="" loading="lazy"
                      srcset="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/sq9.jpg 400w, https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/sq9-300x300.jpg 300w, https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/sq9-100x100.jpg 100w"
                      sizes="(max-width: 400px) 100vw, 400px" />
                  </div>
                </figure>
                <figure class='gallery-item'>
                  <div class='gallery-icon landscape'>
                    <img width="400" height="400"
                      src="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/sq8.jpg"
                      class="attachment-full size-full" alt="" loading="lazy"
                      srcset="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/sq8.jpg 400w, https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/sq8-300x300.jpg 300w, https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/sq8-100x100.jpg 100w"
                      sizes="(max-width: 400px) 100vw, 400px" />
                  </div>
                </figure>
                <figure class='gallery-item'>
                  <div class='gallery-icon landscape'>
                    <img width="400" height="400"
                      src="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/sq7.jpg"
                      class="attachment-full size-full" alt="" loading="lazy"
                      srcset="https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/sq7.jpg 400w, https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/sq7-300x300.jpg 300w, https://themes.themeenergy.com/bookyourtravel/travel-tours/wp-content/uploads/sites/26/2019/04/sq7-100x100.jpg 100w"
                      sizes="(max-width: 400px) 100vw, 400px" />
                  </div>
                </figure>
              </div>

              <h3>Rooms</h3>
              <p>Of brilliant syntheses invent the universe citizens of distant epochs are
                creatures of the cosmos cosmos rich in mystery. How far away vanquish the
                impossible network of wormholes inconspicuous motes of rock and gas concept of
                the number one Apollonius of Perga.</p>
            </div>

          </article>
        </section>
        <section id="reviews" class="tab-content  layout-above" style="display:none">
          <article>
            <p>We are sorry, there are no reviews yet for this tour.</p>
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
                  <div><a href="/wisata/{{ $rekomendasi->id }}"
                      title="{{ $rekomendasi->nama }}">
                      <figure><img width="600" height="500"
                          src="{{ $rekomendasi->gambar }}"
                          class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                          loading="lazy" title="{{ $rekomendasi->nama }}" /></figure>
                    </a>
                    <div class="details hide-actions hide-description hide-rating ">
                      <div class='item-header'>
                        <h3><a href="/wisata/{{ $rekomendasi->id }}"
                            title="{{ $rekomendasi->nama }}">{{ $rekomendasi->nama }}</a></h3>
                        <span class="address">
                          {{ $rekomendasi->lokasi }} </span>
                      </div>
                      <div class="item_price" style="display:none">
                        From <span class="price">
                          <em>
                            <span class="curr">&#036;</span>
                            <span class="amount"></span>
                          </em>
                        </span>
                      </div>
                    </div>
                    <!--//details--><a
                      href="/wisata/{{ $rekomendasi->id }}"
                      class="overlay-link"></a>
                  </div>
                </article>
                @endforeach
                <!--//tour_item-->
              </div>
              <!--row-->
            </div>
            <!--deals-->
          </li>
        </ul>
      </aside><!-- #secondary -->
    </div>
  </div>
</div>

@endsection
