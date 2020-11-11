@section('search')
<div class="byt-widget-search-inner" style="background-color:#003580;color:#ffffff;width:100%;">
  <form class="widget-search" method="get" action="/cari">
    <div class="block block-1 full-width block-order-1">
      <div class="filter filter-group filter-block-1 filter-order-1 filter-type-location-select filter-tour"
        style="width: 80%">
        <div class="select">
          <input type="text" id="hl_0_l" name="key" value="@yield('search_value')" placeholder="Temukan Tujuan Wisata" />
        </div>
      </div>
      <!-- <div
        class="filter filter-group filter-block-1 filter-order-1 filter-type-location-select full-width  filter-tour">

      </div> -->
      <div class="filter filter-block-1 filter-order-10 filter-type-submit" style="width: 20%">
        <input type="submit" value="Telusuri" class="gradient-button" id="bookyourtravel_search_widget-1_search-submit">
      </div>
    </div>
  </form>
</div>
@endsection
