@extends("header")

@section("title", $workingspace->nama)

@section("content")
<div class="main">
  <div class="wrap">
    <div class="row">
      <!--full-width content-->

      <section class="three-fourth section-tour-content">
        <!--gallery-->
        <div>
          <img src="{{ $workingspace->gambar }}" alt="" style="width: 100%" />
        </div>
        <!--//gallery-->
        <!--inner navigation-->
        <nav class="inner-nav layout-above">
          <ul>
            <li class='description'><a class="explore" href="#description" title="Overview"><span
                  class='material-icons'>explore</span>Deskripsi</a></li>
            <li class='itinerary'><a class="place" href="#itinerary" title="Itinerary"><span
                  class='material-icons'>place</span>Lokasi</a></li>
            <li class='reviews'><a class="insert_emoticon" href="#reviews" title="Reviews"><span
                  class='material-icons'>insert_emoticon</span>Review</a></li>
          </ul>
        </nav>
        <section id="description" class="tab-content initial layout-above" style="display:none">
          <article>

            <h2>{{ $workingspace->nama }}</h2>
            <div class="description">
              <div class="text-wrap">
                <p><strong>{{ $workingspace->alamat }}</strong>
                </p>
                <p>
                  <h6>Jam Buka : </h6>
                  <ul>
                    <li>{{ $workingspace->jam_buka }}</li>
                  </ul>
                </p>
                <p>
                  <h6>Fasilitas : </h6>
                  <ul>
                    <li>Wifi Gratis 600 GB/detik</li>
                    <li>Boardgame untuk mencari inspirasi</li>
                    <li>Ruang rapat premium</li>
                  </ul>
                </p>
                <p style="white-space: pre-wrap;">{{ $workingspace->deskripsi }}</p>
              </div>
            </div>

          </article>
        </section>
        <section id="itinerary" class="tab-content  layout-above" style="display:none">
          <article>
            <h2>Info Lokasi</h2>
            <div class="description">
              <div class="text-wrap">
                <ul>
                  <li>Alamat : {{ $workingspace->alamat }}</li>
                  <li>Latitude : {{ $workingspace->lat }}</li>
                  <li>Longitude : {{ $workingspace->lng }}</li>
                </ul>
              </div>
            </div>
            <h6>Jarak dari bandara (Bandara Internasional Aji Pangeran Tumenggung Pranoto)</h6>
            <p>±10 km</p>
            <h6>Estimasi perjalanan (Menggunakan Kendaraan)</h6>
            <p>±5 menit</p>
            <div id="location-map" style="width: 100%; height: 500px"></div>
          </article>
        </section>
        <section id="reviews" class="tab-content  layout-above" style="display:none">
          <article>
            <h2>Review</h2>

            <div class="item" style="padding: 20px; background:#DEDEDE; border-radius: 10px;">
              <div class="top">
                <div class="container-star starCtn left" style="width: 83.125px; height: 16.625px;"><img class="star"
                    src="//laz-img-cdn.alicdn.com/tfs/TB19ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png"
                    style="width: 16.625px; height: 16.625px;"><img class="star"
                    src="//laz-img-cdn.alicdn.com/tfs/TB19ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png"
                    style="width: 16.625px; height: 16.625px;"><img class="star"
                    src="//laz-img-cdn.alicdn.com/tfs/TB19ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png"
                    style="width: 16.625px; height: 16.625px;"><img class="star"
                    src="//laz-img-cdn.alicdn.com/tfs/TB19ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png"
                    style="width: 16.625px; height: 16.625px;"><img class="star"
                    src="//laz-img-cdn.alicdn.com/tfs/TB19ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png"
                    style="width: 16.625px; height: 16.625px;"></div><span class="title right">12 Oktober 2020
                </span>
              </div>
              <br>

              <div class="middle"><span>oleh : Udin Santoso</span></div>
              <br>

              <div class="item-content">
                <div class="content">pengemasan cepat pengiriman nya pun cuma paket ku kaya nya paling bawah gitu yah soal nya
                  bocor😥 terimakasih hadiah nyaa toko udah langganan ko</div>
                <div class="dialogs"></div>
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
                  <div><a href="/workingspace/{{ $rekomendasi->id }}" title="{{ $rekomendasi->nama }}">
                      <figure><img width="600" height="500" src="{{ $rekomendasi->gambar }}"
                          class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy"
                          title="{{ $rekomendasi->nama }}" /></figure>
                    </a>
                    <div class="details hide-actions hide-description hide-rating ">
                      <div class='item-header'>
                        <h3><a href="/workingspace/{{ $rekomendasi->id }}"
                            title="{{ $rekomendasi->nama }}">{{ $rekomendasi->nama }}</a>
                        </h3>
                        <span class="address">
                          Jam Buka : {{ $rekomendasi->jam_buka }} </span>
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
                    <!--//details--><a href="/workingspace/{{ $rekomendasi->id }}" class="overlay-link"></a>
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
  <script>
    function initMap() {
      var lat = '{{ $workingspace->lat }}';
      var lng = '{{ $workingspace->lng }}';

      var map = new google.maps.Map(document.getElementById('location-map'), {
        center: new google.maps.LatLng(lat, lng),
        zoom: 15
      });
      var marker = new google.maps.Marker({
        map,
        position: new google.maps.LatLng(lat, lng)
      });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3Sis_MBeaSHRKlZIPftutQTXQgz5_m8c&callback=initMap">
  </script>
</div>

@endsection