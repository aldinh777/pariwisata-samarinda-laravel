@extends("header")

@section("title", $wisata->nama)

@section("content")
<div class="main">
  <div class="wrap">
    <div class="row">
      <!--full-width content-->

      <section class="three-fourth section-tour-content">
        <!--gallery-->
        <div>
          <img src="{{ $wisata->gambar }}" alt="" style="width: 100%" />
        </div>
        <!--//gallery-->
        <!--inner navigation-->
        <nav class="inner-nav layout-above">
          <ul>
            <li class='description'><a class="explore" href="#description" title="Overview"><span
                  class='material-icons'>explore</span>Deskripsi</a></li>
            <li class='itinerary'><a class="place" href="#itinerary" title="Itinerary"><span
                  class='material-icons'>place</span>Lokasi</a></li>
            <li class='accommodation'><a class="business" href="#accommodation" title="Accommodation"><span
                  class='material-icons'>business</span>Akomodasi</a></li>
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
            <h2>Info Lokasi</h2>
            <div id="location-map" style="width: 100%; height: 240px"></div>
            <br>
            <p>
              <ul>
                <li>Alamat : {{ $wisata->lokasi }}</li>
                <li>Latitude : {{ $wisata->lat }}</li>
                <li>Longitude : {{ $wisata->lng }}</li>
              </ul>
            </p>
            <h6>Jarak dari bandara (Bandara Internasional Aji Pangeran Tumenggung Pranoto)</h6>
            <p>±10 km</p>
            <h6>Estimasi perjalanan (Menggunakan Kendaraan)</h6>
            <p>±5 menit</p>
          </article>
        </section>
        <section id="accommodation" class="tab-content  layout-above" style="display:none">
          <article>
            <h2>Hotel Terdekat</h2>

            <div id="hotel-map" style="width: 100%; height: 240px; margin-bottom: 10px"></div>

            <div style="border: 1px solid #D3D3D3; padding: 5px; padding-bottom: 0px; margin-bottom: 10px;">
              <a class="RecommendedPropertyCard" target="_blank"
                href="/id-id/ibis-samarinda/hotel/samarinda-id.html?finalPriceView=0&amp;isShowMobileAppPrice=false&amp;cid=1844104&amp;numberOfBedrooms=&amp;familyMode=false&amp;isAgMse=false&amp;ccallout=false&amp;defdate=false&amp;voucherMode=false&amp;adults=2&amp;children=0&amp;rooms=1&amp;maxRooms=9&amp;checkIn=2020-11-19&amp;childAges=&amp;defaultChildAge=8&amp;travellerType=1&amp;tspTypes=8&amp;los=1&amp;searchrequestid=c86c8125-1aa3-4ea6-b065-aa9b2d8d6bde"
                data-element-name="personalized-recommendations-hotel-card" data-element-index="0"
                data-element-value="14676920" data-recommendation-type="4" data-suggestion-type="1">
                <div class="RecommendedPropertyCard__Image"
                  style="background-image: url(&quot;//pix5.agoda.net/hotelImages/14676920/-1/5df9429057bb51c034996915f0a3a3b1.jpg?s=450x450&quot;); width: 120px;">
                </div>
                <div class="RecommendedPropertyCard__Info">
                  <div class="RecommendedPropertyCard__Name">Ibis Samarinda</div>
                  <div class="RecommendedPropertyCard__Starrating"><span class="star-rating display-inline"><i
                        class="ficon ficon-star-3 orange-yellow" title="{0} star" aria-label="{0} star"
                        data-selenium="hotel-star-rating"></i></span></div>
                  <div class="RecommendedPropertyCard__Review">
                    <div class="ReviewSection-item">
                      <div class="ReviewScore ReviewScore--flipped ReviewSection-score ReviewSection-score--flipped"><i
                          class="ficon ficon-review-icon ReviewScore-Icon"></i><span
                          class="ReviewScore-Number">8.9</span></div>
                    </div>
                    <div class="ReviewSection-item">
                      <div class="ReviewSection-scoreText">Luar biasa</div>
                      <div class="ReviewSection-count"><strong>16 </strong><span>Ulasan</span></div>
                    </div>
                  </div>
                  <div class="RecommendedPropertyCard__Price">
                    <div class="RecommendedPropertyCard__PernightText">Harga per malam mulai dari</div>
                    <div class="RecommendedPropertyCard__PriceText">Rp 333.680</div>
                  </div>
                </div>
              </a>
            </div>

            <div style="border: 1px solid #D3D3D3; padding: 5px; padding-bottom: 0px; margin-bottom: 10px;">
              <a class="RecommendedPropertyCard" target="_blank"
                href="https://www.agoda.com/id-id/aston-samarinda-hotel/hotel/samarinda-id.html?finalPriceView=0&amp;isShowMobileAppPrice=false&amp;cid=1763318&amp;tag=a999a908-8107-4564-880a-98ced32d3848&amp;numberOfBedrooms=&amp;familyMode=false&amp;isAgMse=false&amp;ccallout=false&amp;defdate=false&amp;voucherMode=false&amp;adults=2&amp;children=0&amp;rooms=1&amp;maxRooms=9&amp;checkIn=2020-11-19&amp;childAges=&amp;defaultChildAge=8&amp;travellerType=-1&amp;tspTypes=2&amp;los=1&amp;searchrequestid=afca33e7-8838-4393-b9d9-156c103a30f6"
                data-element-name="personalized-recommendations-hotel-card" data-element-index="0"
                data-element-value="230554" data-recommendation-type="4" data-suggestion-type="1">
                <div class="RecommendedPropertyCard__Image"
                  style="background-image: url(&quot;//pix6.agoda.net/hotelImages/230/230554/230554_15063008430031232970.jpg?s=450x450&quot;); width: 120px;">
                </div>
                <div class="RecommendedPropertyCard__Info">
                  <div class="RecommendedPropertyCard__Name">Aston Samarinda Hotel</div>
                  <div class="RecommendedPropertyCard__Starrating">
                    <span class="star-rating display-inline">
                      <i class="ficon ficon-star-4 orange-yellow" title="{0} star" aria-label="{0} star"
                        data-selenium="hotel-star-rating"></i>
                    </span>
                  </div>
                  <div class="RecommendedPropertyCard__Review">
                    <div class="ReviewSection-item">
                      <div class="ReviewScore ReviewScore--flipped ReviewSection-score ReviewSection-score--flipped">
                        <i class="ficon ficon-review-icon ReviewScore-Icon"></i>
                        <span class="ReviewScore-Number">7.9</span>
                      </div>
                    </div>
                    <div class="ReviewSection-item">
                      <div class="ReviewSection-scoreText">Sangat baik</div>
                      <div class="ReviewSection-count"><strong>625
                        </strong><span>Ulasan</span></div>
                    </div>
                  </div>
                  <div class="RecommendedPropertyCard__Price">
                    <div class="RecommendedPropertyCard__PernightText">Harga per malam mulai
                      dari</div>
                    <div class="RecommendedPropertyCard__PriceText">Rp 658.000</div>
                  </div>
                </div>
              </a>
            </div>

            <div style="border: 1px solid #D3D3D3; padding: 5px; padding-bottom: 0px; margin-bottom: 10px;">
              <a class="RecommendedPropertyCard" target="_blank"
                href="/en-us/bumi-senyiur-hotel/hotel/samarinda-id.html?finalPriceView=0&amp;isShowMobileAppPrice=false&amp;cid=1830697&amp;tag=1068_102c93fb1efde0eb216eb0e9c0a1e4&amp;numberOfBedrooms=&amp;familyMode=false&amp;isAgMse=false&amp;ccallout=false&amp;defdate=false&amp;voucherMode=false&amp;adults=2&amp;children=0&amp;rooms=1&amp;maxRooms=9&amp;checkIn=2020-11-19&amp;childAges=&amp;defaultChildAge=8&amp;travellerType=1&amp;tspTypes=2,8&amp;los=1&amp;searchrequestid=34bcc6cc-f9a8-494a-a73f-6c6686893d3a"
                data-element-name="personalized-recommendations-hotel-card" data-element-index="0"
                data-element-value="90145" data-recommendation-type="4" data-suggestion-type="1">
                <div class="RecommendedPropertyCard__Image"
                  style="background-image: url(&quot;//pix5.agoda.net/hotelImages/90145/-1/b133ead972496772f45543d8ff1fc1e1.jpg?s=450x450&quot;); width: 120px;">
                </div>
                <div class="RecommendedPropertyCard__Info">
                  <div class="RecommendedPropertyCard__Name">Bumi Senyiur Hotel</div>
                  <div class="RecommendedPropertyCard__Starrating"><span class="star-rating display-inline"><i
                        class="ficon ficon-star-4 orange-yellow" title="{0} star" aria-label="{0} star"
                        data-selenium="hotel-star-rating"></i></span>
                  </div>
                  <div class="RecommendedPropertyCard__Review">
                    <div class="ReviewSection-item">
                      <div class="ReviewScore ReviewScore--flipped ReviewSection-score ReviewSection-score--flipped">
                        <i class="ficon ficon-review-icon ReviewScore-Icon"></i><span
                          class="ReviewScore-Number">7.8</span></div>
                    </div>
                    <div class="ReviewSection-item">
                      <div class="ReviewSection-scoreText">Sangat Baik</div>
                      <div class="ReviewSection-count"><strong>223
                        </strong><span>Ulasan</span></div>
                    </div>
                  </div>
                  <div class="RecommendedPropertyCard__Price">
                    <div class="RecommendedPropertyCard__PernightText">Harga per malam mulai
                    </div>
                    <div class="RecommendedPropertyCard__PriceText">Rp 507,889</div>
                  </div>
                </div>
              </a>
            </div>
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
                  <div><a href="/wisata/{{ $rekomendasi->id }}" title="{{ $rekomendasi->nama }}">
                      <figure><img width="600" height="500" src="{{ $rekomendasi->gambar }}"
                          class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy"
                          title="{{ $rekomendasi->nama }}" /></figure>
                    </a>
                    <div class="details hide-actions hide-description hide-rating ">
                      <div class='item-header'>
                        <h3><a href="/wisata/{{ $rekomendasi->id }}"
                            title="{{ $rekomendasi->nama }}">{{ $rekomendasi->nama }}</a>
                        </h3>
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
                    <!--//details--><a href="/wisata/{{ $rekomendasi->id }}" class="overlay-link"></a>
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
      var lat = '{{ $wisata->lat }}';
      var lng = '{{ $wisata->lng }}';

      var map = new google.maps.Map(document.getElementById('location-map'), {
        center: new google.maps.LatLng(lat, lng),
        zoom: 15
      });
      var marker = new google.maps.Marker({
        map,
        position: new google.maps.LatLng(lat, lng)
      });

      var hotels = [
        {lat: -0.502999, lng: 117.1498923},
        {lat: -0.5026361, lng: 117.1526781},
        {lat: -0.4994576, lng: 117.1467443}
      ];

      var hotelMap = new google.maps.Map(document.getElementById('hotel-map'), {
        center: new google.maps.LatLng(hotels[0].lat, hotels[0].lng),
        zoom: 15
      });
      hotels.forEach(function(hotel) {
        new google.maps.Marker({
          map: hotelMap,
          position: new google.maps.LatLng(hotel.lat, hotel.lng)
        })
      });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3Sis_MBeaSHRKlZIPftutQTXQgz5_m8c&callback=initMap">
  </script>
</div>

@endsection