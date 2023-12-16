@extends('layout.main')
  
@section('container')

<div id="HomeSlider" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators mb-5">
        <button type="button" data-bs-target="#HomeSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#HomeSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#HomeSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner d-flex">
    <div class="carousel-item active">
        <img src="img/home slider.jpg" class="d-block w-100" alt="Gambar 1">        
    </div>
    <div class="carousel-item">
        <img src="img/home slider 2.jpg" class="d-block w-100" alt="Gambar 2">        
    </div>
    <div class="carousel-item">
        <img src="img/home slider 3.jpg" class="d-block w-100" alt="Gambar 3">        
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#HomeSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#HomeSlider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<h3 class="text-success my-3 mx-4"><strong>Promo Menarik</strong></h3>
<div class="row">
<div id="Promo" class="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="card" style="width:18em" >
      <img-wrapper>
        <img src="img/home/promo/promo.jpg" class="img-fluid">
      </img-wrapper>
      <div class="card-body">
        <h5 class="card-title" style="color:teal"><strong>DESEMBER HAPPY 1</strong></h5>
        <p class="card-text" style="color:grey"><small>*Syarat dan Ketentuan Promo Berlaku</small></p>
        <p class="card-text" style="color:teal">Berlaku Hingga 30 Desember 2023</p>
      </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="card" style="width:18em">
      <img-wrapper>
        <img src="img/home/promo/promo.jpg" class="img-fluid">
      </img-wrapper>
      <div class="card-body">
        <h5 class="card-title" style="color:teal"><strong>DESEMBER HAPPY 2</strong></h5>
        <p class="card-text" style="color:grey"><small>*Syarat dan Ketentuan Promo Berlaku</small></p>
        <p class="card-text" style="color:teal">Berlaku Hingga 30 Desember 2023</p>
      </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="card" style="width:18em">
      <img-wrapper>
        <img src="img/home/promo/promo.jpg" class="img-fluid">
      </img-wrapper>
      <div class="card-body">
        <h5 class="card-title" style="color:teal"><strong>DESEMBER HAPPY 3</strong></h5>
        <p class="card-text" style="color:grey"><small>*Syarat dan Ketentuan Promo Berlaku</small></p>
        <p class="card-text" style="color:teal">Berlaku Hingga 30 Desember 2023</p>
      </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="card" style="width:18em">
      <img-wrapper>
        <img src="img/home/promo/promo.jpg" class="img-fluid">
      </img-wrapper>
      <div class="card-body">
        <h5 class="card-title" style="color:teal"><strong>DESEMBER HAPPY 4</strong></h5>
        <p class="card-text" style="color:grey"><small>*Syarat dan Ketentuan Promo Berlaku</small></p>
        <p class="card-text" style="color:teal">Berlaku Hingga 30 Desember 2023</p>
      </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card" style="width:18em">
      <img-wrapper>
        <img src="img/home/promo/promo.jpg" class="img-fluid">
      </img-wrapper>
      <div class="card-body">
        <h5 class="card-title" style="color:teal"><strong>DESEMBER HAPPY 5</strong></h5>
        <p class="card-text" style="color:grey"><small>*Syarat dan Ketentuan Promo Berlaku</small></p>
        <p class="card-text" style="color:teal">Berlaku Hingga 30 Desember 2023</p>
      </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card" style="width:18em">
      <img-wrapper>
        <img src="img/home/promo/promo.jpg" class="img-fluid">
      </img-wrapper>
      <div class="card-body">
        <h5 class="card-title" style="color:teal"><strong>DESEMBER HAPPY 6</strong></h5>
        <p class="card-text" style="color:grey"><small>*Syarat dan Ketentuan Promo Berlaku</small></p>
        <p class="card-text" style="color:teal">Berlaku Hingga 30 Desember 2023</p>
      </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#Promo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#Promo" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="d-grid gap-2 col-4 mx-auto my-5">
  <button class="btn btn-success" type="button">Promo Menarik</button> 
</div>
</div>

<h4 class="text-success my-5 mx-4"><strong>Keuntungan Kemitraan Java</strong></h4>
<div class="d-flex flex-row mb-4">
    <div class="btn-group col-md-4 mx-auto" role="group" aria-label="Basic radio toggle button group">      
      <label class="btn btn-outline-success p-2 rounded-pill" for="btnradio1">Petani</label>        
    </div>
</div>
<div class="row row-cols-1 row-cols-md-2 g-4 text-center">
<div class="col">
    <div class="card">
      <img src="img/home/grafik.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Akses Informasi Pertanian</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/home/grafik.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Meningkatakan Pendapatan</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/home/grafik.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Pasar Online</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/home/grafik.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Pelayanan Perizinan</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt-5">
  <div class="p-5 mb-4 bg-body-tertiary text-center">
    <h4><strong>Visi Javawangi Untuk Meningkatkan Agrikultur Indonesia</strong></h4>
    <p>Mewujudkan hilirisasi inovasi rempah organik yang berkelanjutan berbasis teknologi</p>

    <h4 class="mt-5"><strong>Misi Javawangi Untuk Meningkatkan Agrikultur Indonesia</strong></h4>

    <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
    <div class="col">
      <div class="card h-100">
        <img src="img/home/farmer.png" class="card-img-top w-75 h-50 mx-auto">
        <div class="card-body">
          
          <p class="card-text fw-bold">Mewujudkan Kapasistas SDM mitra petani rempah yang terintegrasi</p>
        </div>
        
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="img/home/farmer.png" class="card-img-top w-75 h-50 mx-auto">
        <div class="card-body">
          
          <p class="card-text fw-bold">Mewujudkan Komoditas dan produktivitas rempah organik dengan melakikan hilirisasi berbasis nilai tambah</p>
        </div>
        
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="img/home/farmer.png" class="card-img-top w-75 h-50 mx-auto">
        <div class="card-body">
          
          <p class="card-text fw-bold">Mengoptimalkan Transformasi digital dengan mengikuti perkembangan zaman</p>
        </div>
        
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="img/home/farmer.png" class="card-img-top w-75 h-50 mx-auto">
        <div class="card-body">
          
          <p class="card-text fw-bold">Membangun daring pemasaran lokal maupun internasional</p>
        </div>
        
      </div>
    </div>
  </div>
  </div>
</div>

<h3 class="text-success my-3 mx-4"><strong>Supported By</strong></h3>

<div class="row">
<div id="sponsor" class="carousel">
  <div class="carousel-inner d-flex" >
    <div class="carousel-item active">
      <img-wrapper>
        <img src="img/home/promo/promo.jpg" class="rounded" width="100" height="100">
      </img-wrapper>
    </div>
    <div class="carousel-item">
      <img-wrapper>
        <img src="img/home/promo/promo.jpg" class="rounded" width="100" height="100">
      </img-wrapper>
    </div>
    <div class="carousel-item">
      <img-wrapper>
        <img src="img/home/promo/promo.jpg" class="rounded" width="100" height="100">
      </img-wrapper>
    </div>
    <div class="carousel-item">
      <img-wrapper>
        <img src="img/home/promo/promo.jpg" class="rounded" width="100" height="100">
      </img-wrapper>
    </div>
    <div class="carousel-item">
      <img-wrapper>
        <img src="img/home/promo/promo.jpg" class="rounded" width="100" height="100">
      </img-wrapper>
    </div>
  </div> 
  

  <button class="carousel-control-prev" type="button" data-bs-target="#sponsor" data-bs-slide="prev" style="background-color: teal;  width: 6vh;  height: 6vh;  border-radius: 50%;  top: 50%;transform: translateY(-50%);">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#sponsor" data-bs-slide="next" style="background-color: teal;  width: 6vh;  height: 6vh;  border-radius: 50%;  top: 50%;  transform: translateY(-50%);">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>


<style type="text/css">
  .carousel-control-prev,
  .carousel-control-next {
    background-color: teal;  
    width: 6vh;  
    height: 6vh;  
    border-radius: 50%;  
    top: 50%;
    transform: translateY(-50%);
  }
</style>

@endsection

