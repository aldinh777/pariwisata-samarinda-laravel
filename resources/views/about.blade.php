@extends("header")

@include("search_bar")

@section("title", "Tentang Kami")

@section("content")
<style>
  @media only screen and (max-width: 600px) {
    .about div {
      padding: 0 10%;
    }
  }

  @media only screen and (min-width: 768px) {
    .about div {
      padding: 0 20%;
    }
  }

  @media only screen and (min-width: 992px) {
    .about div {
      padding: 0 30%;
    }
  }

  @media only screen and (min-width: 1200px) {
    .about div {
      padding: 0 30%;
    }
  }
</style>

<div class="vc_row-full-width vc_clearfix" style="height: 40px; background: #e2e2e2;"></div>
<div>
  <div class="about" style="margin-top: 40px; font-size: 25px;">
    <h1 style="font-size: 50px; padding: 0 10%">Tentang Kami</h1>
    <div style="text-align: justify">
      <p>Kami adalah perusahaan yang bergerak di bidang perminyakan
        PT. Industri Minyak Melimpah Indonesia yang tersebar di seluruh penjuru negeri. <br>
      </p>
      <br>
    </div>
  </div>
</div>
<div class="vc_row-full-width vc_clearfix" style="height: 40px; background: #e2e2e2;"></div>
<div>
  <div class="about" style="margin-top: 50px; font-size: 25px">
    <h1 style="font-size: 50px">Visi : </h1>
    <div style="text-align: justify">
      <p>Menyediakan energi yang melimpah kepada masyarakat mampu dan menengah keatas</p>
      <br>
      <p>Monopoli minyak dunia dan mengadu domba negara agar ikut perang dunia</p>
      <br>
    </div>
  </div>
</div>
<div class="vc_row-full-width vc_clearfix" style="height: 40px; background: #e2e2e2;"></div>
<div>
  <div class="about" style="margin-top: 50px; font-size: 25px">
    <h1 style="font-size: 50px">Misi : </h1>
    <div style="text-align: justify">
      <p>Menyatukan rakyat dengan menggabungkan Pertalite dan Pertamina hingga menjadi Pertalitemina</p>
      <br>
      <p>Mampu memberikan pelayanan yang baik kepada masyarakat yang membayar</p>
      <br>
    </div>
  </div>
</div>
<div class="vc_row-full-width vc_clearfix" style="height: 40px; background: #e2e2e2;"></div>
@endsection
