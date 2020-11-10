@extends("header")

@section("title", "Working Space Kota Samarinda")

@section("content")
<div style="text-align: center; vertical-align: middle">
  <img src="https://st3.depositphotos.com/2100659/33242/v/1600/depositphotos_332426834-stock-illustration-mega-sale-concept-horizontal-banner.jpg" alt="" style="object-fit: contain">
</div>

<div class="main">
  <div class="wrap">
    <div class="row">
      <section>
        <article class="post-46 page type-page status-publish hentry" id="page-46">
          <h1 class="page-title">Working Space Kota Samarinda</h1>
        </article>
        <div class="deals">
          <div class="row">
            @foreach ($workingspace_all as $workingspace)
            <article data-tour-id="{{ $workingspace->id }}" class="tour_item one-third ">
              <div><a href="/workingspace/{{ $workingspace->id }}"
                  title="{{ $workingspace->nama }}">
                  <figure>
                    <img width="600" src="{{ $workingspace->gambar }}"
                      class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                      loading="lazy" title="{{ $workingspace->nama }}"
                      style="height: 350px" /></figure>
                </a>
                <div class="details ">
                  <div class='item-header'>
                    <h3><a href="/workingspace/{{ $workingspace->id }}"
                      title="{{ $workingspace->nama }}">{{ $workingspace->nama }}</a></h3>
                      <span class="address"> {{ $workingspace->alamat }} </span>
                  </div>
                  <div class='description'>
                    <p>Jam Buka : {{ $workingspace->jam_buka }}</p>
                  </div>
                  <div class='actions'><a
                      href='/workingspace/{{ $workingspace->id }}'
                      class='gradient-button edit-entity' data-id='{{ $workingspace->id }}'
                      title='Pelajari Lebih Lanjut'>Lebih Lanjut</a></div>
                </div>
                <a href="/workingspace/{{ $workingspace->id }}"
                  class="overlay-link"></a>
              </div>
            </article>
            @endforeach
          </div>
          <!--row-->
        </div>
        <!--deals-->
      </section>
    </div>
  </div>
</div>
@endsection
