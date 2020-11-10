@extends("header")

@section("title", $oleholeh->nama)

@section("content")
<div style="margin: 10px"></div>

<div class="main">
  <div class="wrap">
    <div class="row">
      <!--full-width content-->

      <section class="three-fourth section-tour-content">
        <!--gallery-->
        <div>
          <img src="{{ $oleholeh->gambar }}" alt="" style="width: 100%" />
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

            <h2>{{ $oleholeh->nama }}</h2>
            <div class="description">
              <div class="text-wrap">
                <p><strong>{{ $oleholeh->lokasi }}</strong>
                </p>
                <p style="white-space: pre-wrap;">{{ $oleholeh->deskripsi }}</p>
              </div>
            </div>

          </article>
        </section>
        <section id="itinerary" class="tab-content  layout-above" style="display:none">
          <article>
            <h2>Lokasi Ditemukan</h2>

            <div id="oleholeh-map" style="width: 100%; height: 240px; margin-bottom: 10px"></div>

            <div class="Tu970R9Q _1FPHoAYb">
              <div class="_1m-zmplc _2dSbfHm2">
                <div class="_4XSC4VsR">
                  <div class="_1HwoWvBJ">
                    <div class="_15aaPtHM D1m_VFgO _2a-PzfE-"><span class="_1YkiZl2_ _2geKhlYH"><span
                          class="_1tvInqmQ _1T_s6QZp"><svg viewBox="0 0 24 24" width="1em" height="1em" class="_2HBN-k68 _2JndpOur">
                            <path
                              d="M12 2C6.487 2 2 6.487 2 12c0 5.515 4.487 10 10 10 5.515 0 10-4.485 10-10 0-5.513-4.485-10-10-10zm4.688 10.911c-.975 1.188-4.687 4.434-4.687 4.434S8.258 14.1 7.29 12.903c-1.14-1.411-1.12-3.241.049-4.351.611-.58 1.42-.898 2.279-.898s1.668.318 2.279.898l.096.092.09-.087a3.296 3.296 0 012.278-.897c.86 0 1.669.318 2.277.897 1.201 1.139 1.219 2.929.05 4.354z">
                            </path>
                          </svg></span><span class="_1tvInqmQ xIyKWMUr"><svg viewBox="0 0 24 24" width="1em" height="1em"
                            class="_2HBN-k68 _2JndpOur">
                            <path
                              d="M14.361 8.768c-.574 0-1.111.211-1.516.594l-.854.812-.861-.819c-.401-.382-.939-.592-1.513-.592s-1.111.21-1.514.593c-.876.832-.589 2.059.048 2.847.726.896 2.961 2.89 3.845 3.667.878-.779 3.098-2.771 3.831-3.665.662-.808.936-2 .047-2.844a2.182 2.182 0 00-1.513-.593z">
                            </path>
                            <path
                              d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.688 10.911c-.975 1.188-4.687 4.435-4.687 4.435s-3.743-3.247-4.711-4.442c-1.141-1.411-1.12-3.241.049-4.351.61-.58 1.419-.898 2.279-.898s1.668.319 2.278.898l.096.091.09-.086a3.291 3.291 0 012.278-.897c.86 0 1.668.317 2.279.897 1.2 1.138 1.218 2.927.049 4.353z">
                            </path>
                          </svg></span></span></div>
                  </div><a
                    href="/Restaurant_Review-g317102-d10626885-Reviews-RM_Ayam_Gepuk_Asli_Ponorogo-Samarinda_East_Kalimantan_Kalimantan.html">
                    <div class="YAmFZwDA">
                      <div class="ZVAUHZqh" style="height: 100%; width: 100%; position: relative;"><img class="_1a4WY7aS"
                          src="https://media-cdn.tripadvisor.com/media/photo-f/11/d9/9d/c5/ayam-gepuk.jpg" alt=""
                          style="background-position: center center; background-size: cover; height: 100%; width: 100%; object-fit: cover;">
                        <div class="_1a4WY7aS"></div>
                      </div>
                    </div>
                  </a>
                  <div class="_2zpBCQF-"><a
                      href="/Restaurant_Review-g317102-d10626885-Reviews-RM_Ayam_Gepuk_Asli_Ponorogo-Samarinda_East_Kalimantan_Kalimantan.html"
                      class="_3ghemSIy">RM. Ayam Gepuk Asli Ponorogo</a><a
                      href="/Restaurant_Review-g317102-d10626885-Reviews-RM_Ayam_Gepuk_Asli_Ponorogo-Samarinda_East_Kalimantan_Kalimantan.html">
                    </a>
                    <div class="_2aNTqajR"><span class="_1EJwJc7S">Asia, Indonesia</span></div><a
                      href="/Restaurant_Review-g317102-d10626885-Reviews-RM_Ayam_Gepuk_Asli_Ponorogo-Samarinda_East_Kalimantan_Kalimantan.html">
                      <div class="_6V39QIvi"><button class="_1JOGv2rJ _32M3JNKp _3Ffza2n4 _3fiJJkxX" type="button">Info Lebih Lanjut</button></div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="_1m-zmplc _2dSbfHm2">
                <div class="_4XSC4VsR">
                  <div class="_1HwoWvBJ">
                    <div class="_15aaPtHM D1m_VFgO _2a-PzfE-"><span class="_1YkiZl2_ _2geKhlYH"><span
                          class="_1tvInqmQ _1T_s6QZp"><svg viewBox="0 0 24 24" width="1em" height="1em" class="_2HBN-k68 _2JndpOur">
                            <path
                              d="M12 2C6.487 2 2 6.487 2 12c0 5.515 4.487 10 10 10 5.515 0 10-4.485 10-10 0-5.513-4.485-10-10-10zm4.688 10.911c-.975 1.188-4.687 4.434-4.687 4.434S8.258 14.1 7.29 12.903c-1.14-1.411-1.12-3.241.049-4.351.611-.58 1.42-.898 2.279-.898s1.668.318 2.279.898l.096.092.09-.087a3.296 3.296 0 012.278-.897c.86 0 1.669.318 2.277.897 1.201 1.139 1.219 2.929.05 4.354z">
                            </path>
                          </svg></span><span class="_1tvInqmQ xIyKWMUr"><svg viewBox="0 0 24 24" width="1em" height="1em"
                            class="_2HBN-k68 _2JndpOur">
                            <path
                              d="M14.361 8.768c-.574 0-1.111.211-1.516.594l-.854.812-.861-.819c-.401-.382-.939-.592-1.513-.592s-1.111.21-1.514.593c-.876.832-.589 2.059.048 2.847.726.896 2.961 2.89 3.845 3.667.878-.779 3.098-2.771 3.831-3.665.662-.808.936-2 .047-2.844a2.182 2.182 0 00-1.513-.593z">
                            </path>
                            <path
                              d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.688 10.911c-.975 1.188-4.687 4.435-4.687 4.435s-3.743-3.247-4.711-4.442c-1.141-1.411-1.12-3.241.049-4.351.61-.58 1.419-.898 2.279-.898s1.668.319 2.278.898l.096.091.09-.086a3.291 3.291 0 012.278-.897c.86 0 1.668.317 2.279.897 1.2 1.138 1.218 2.927.049 4.353z">
                            </path>
                          </svg></span></span></div>
                  </div><a
                    href="/Restaurant_Review-g317102-d6532982-Reviews-Golden_Rama_Restaurant-Samarinda_East_Kalimantan_Kalimantan.html">
                    <div class="YAmFZwDA">
                      <div class="ZVAUHZqh" style="height: 100%; width: 100%; position: relative;"><img class="_1a4WY7aS"
                          src="https://media-cdn.tripadvisor.com/media/photo-i/0f/cc/f2/3a/burger-archipelago.jpg" alt=""
                          style="background-position: center center; background-size: cover; height: 100%; width: 100%; object-fit: cover;">
                        <div class="_1a4WY7aS"></div>
                      </div>
                    </div>
                  </a>
                  <div class="_2zpBCQF-"><a
                      href="/Restaurant_Review-g317102-d6532982-Reviews-Golden_Rama_Restaurant-Samarinda_East_Kalimantan_Kalimantan.html"
                      class="_3ghemSIy">Golden Rama Restaurant</a><a
                      href="/Restaurant_Review-g317102-d6532982-Reviews-Golden_Rama_Restaurant-Samarinda_East_Kalimantan_Kalimantan.html">
                    </a>
                    <div class="_2aNTqajR"><span class="_1EJwJc7S">Cina, Internasional, Asia, Indonesia</span></div><a
                      href="/Restaurant_Review-g317102-d6532982-Reviews-Golden_Rama_Restaurant-Samarinda_East_Kalimantan_Kalimantan.html">
                      <div class="_6V39QIvi"><button class="_1JOGv2rJ _32M3JNKp _3Ffza2n4 _3fiJJkxX" type="button">Info Lebih Lanjut</button></div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="_1m-zmplc _2dSbfHm2">
                <div class="_4XSC4VsR">
                  <div class="_1HwoWvBJ">
                    <div class="_15aaPtHM D1m_VFgO _2a-PzfE-"><span class="_1YkiZl2_ _2geKhlYH"><span
                          class="_1tvInqmQ _1T_s6QZp"><svg viewBox="0 0 24 24" width="1em" height="1em" class="_2HBN-k68 _2JndpOur">
                            <path
                              d="M12 2C6.487 2 2 6.487 2 12c0 5.515 4.487 10 10 10 5.515 0 10-4.485 10-10 0-5.513-4.485-10-10-10zm4.688 10.911c-.975 1.188-4.687 4.434-4.687 4.434S8.258 14.1 7.29 12.903c-1.14-1.411-1.12-3.241.049-4.351.611-.58 1.42-.898 2.279-.898s1.668.318 2.279.898l.096.092.09-.087a3.296 3.296 0 012.278-.897c.86 0 1.669.318 2.277.897 1.201 1.139 1.219 2.929.05 4.354z">
                            </path>
                          </svg></span><span class="_1tvInqmQ xIyKWMUr"><svg viewBox="0 0 24 24" width="1em" height="1em"
                            class="_2HBN-k68 _2JndpOur">
                            <path
                              d="M14.361 8.768c-.574 0-1.111.211-1.516.594l-.854.812-.861-.819c-.401-.382-.939-.592-1.513-.592s-1.111.21-1.514.593c-.876.832-.589 2.059.048 2.847.726.896 2.961 2.89 3.845 3.667.878-.779 3.098-2.771 3.831-3.665.662-.808.936-2 .047-2.844a2.182 2.182 0 00-1.513-.593z">
                            </path>
                            <path
                              d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.688 10.911c-.975 1.188-4.687 4.435-4.687 4.435s-3.743-3.247-4.711-4.442c-1.141-1.411-1.12-3.241.049-4.351.61-.58 1.419-.898 2.279-.898s1.668.319 2.278.898l.096.091.09-.086a3.291 3.291 0 012.278-.897c.86 0 1.668.317 2.279.897 1.2 1.138 1.218 2.927.049 4.353z">
                            </path>
                          </svg></span></span></div>
                  </div><a
                    href="/Restaurant_Review-g317102-d13398619-Reviews-Bebek_Caping-Samarinda_East_Kalimantan_Kalimantan.html">
                    <div class="YAmFZwDA">
                      <div class="ZVAUHZqh" style="height: 100%; width: 100%; position: relative;"><img class="_1a4WY7aS"
                          src="https://media-cdn.tripadvisor.com/media/photo-i/15/1f/77/46/outlet-pusat-bebek-caping.jpg" alt=""
                          style="background-position: center center; background-size: cover; height: 100%; width: 100%; object-fit: cover;">
                        <div class="_1a4WY7aS"></div>
                      </div>
                    </div>
                  </a>
                  <div class="_2zpBCQF-"><a
                      href="/Restaurant_Review-g317102-d13398619-Reviews-Bebek_Caping-Samarinda_East_Kalimantan_Kalimantan.html"
                      class="_3ghemSIy">Bebek Caping</a><a
                      href="/Restaurant_Review-g317102-d13398619-Reviews-Bebek_Caping-Samarinda_East_Kalimantan_Kalimantan.html">
                    </a>
                    <div class="_2aNTqajR"><span class="_1EJwJc7S">Asia, Indonesia</span></div><a
                      href="/Restaurant_Review-g317102-d13398619-Reviews-Bebek_Caping-Samarinda_East_Kalimantan_Kalimantan.html">
                      <div class="_6V39QIvi"><button class="_1JOGv2rJ _32M3JNKp _3Ffza2n4 _3fiJJkxX" type="button">Info Lebih Lanjut</button></div>
                    </a>
                  </div>
                </div>
              </div>
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
                  <div><a href="/oleholeh/{{ $rekomendasi->id }}" title="{{ $rekomendasi->nama }}">
                      <figure><img width="600" height="500" src="{{ $rekomendasi->gambar }}"
                          class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy"
                          title="{{ $rekomendasi->nama }}" /></figure>
                    </a>
                    <div class="details hide-actions hide-description hide-rating ">
                      <div class='item-header'>
                        <h3><a href="/oleholeh/{{ $rekomendasi->id }}"
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
                    <!--//details--><a href="/oleholeh/{{ $rekomendasi->id }}" class="overlay-link"></a>
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
      var lat = -0.502999;
      var lng = 117.1498923;

      var map = new google.maps.Map(document.getElementById('oleholeh-map'), {
        center: new google.maps.LatLng(lat, lng),
        zoom: 15
      });
      new google.maps.Marker({
        map,
        position: new google.maps.LatLng(lat, lng)
      });
      new google.maps.Marker({
        map,
        position: new google.maps.LatLng(lat + 0.002, lng + 0.002)
      });
      new google.maps.Marker({
        map,
        position: new google.maps.LatLng(lat - 0.003, lng + 0.002)
      });
    }
  </script>
</div>
@endsection