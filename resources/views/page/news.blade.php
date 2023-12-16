@extends('layout.main')
  
@section('container')

<div class="container overflow-hidden">
	<form class="d-flex" role="search">
		<input class="form-control me-2" type="search" placeholder="Cari Hot News" aria-label="Search">
		<button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
	</form>

    <div class="d-flex flex-row mt-3 border border-3" style="height: 500px;">
    	<div class="col-8 p-1 ">
           <a href="/artikel">
            <div class="card" style="height: 490px;">
              <img src="img/Asset Foto Web Edukasi/2 Berita/1.png" class=" card-img" style="height: 490px;">
              
              <div class="card-img-overlay text-light">
                <h5 class="card-title">{{ $judul }}</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small>Last updated 3 mins ago</small></p>
              </div>
             
            </a>
        </div>   
    </div>
    	<div class="col-4 flex-column p-1">
    		<img src="img/layanan/foto bersama petani.jpg" class="h-50 w-100 p-1" alt="Gambar 2">
    	
    		<img src="img/layanan/foto frenchase.jpeg" class="h-50 w-100 p-1" alt="Gambar 2">
    	</div>

</div>

<div class="container overflow-hidden">
<div class="row">
    <div class="col-8 border border-3 mt-3">
        <div class="d-flex flex-row" style="height: 400px;">
            <div class="col-8 p-2">
                <img src="img/layanan/galery.jpg" class="w-100 h-100" alt="Gambar 2">
            </div>
            <div class="col-4 flex-column p-1">
                <img src="img/layanan/potensi rempah.jpg" class="h-25 w-100 p-1" alt="Gambar 2">
                <img src="img/layanan/cari franchise.jpg" class="h-25 w-100 p-1" alt="Gambar 2">
                <img src="img/layanan/galery.jpg" class="h-25 w-100 p-1" alt="Gambar 2">
                <img src="img/layanan/toko.jpg" class="h-25 w-100 p-1" alt="Gambar 2">
            </div>
        </div>
        <div class="d-flex flex-row" style="height: 400px;">
            <div class="col-8 p-2">
                <img src="img/layanan/potensi ekspor indonesia.jpg" class="w-100 h-100" alt="Gambar 2">
            </div>
            <div class="col-4 flex-column p-1">
                <img src="img/layanan/potensi rempah.jpg" class="h-25 w-100 p-1" alt="Gambar 2">
                <img src="img/layanan/potensi rempah terbaik.jpg" class="h-25 w-100 p-1" alt="Gambar 2">
                <img src="img/layanan/banner event.jpg" class="h-25 w-100 p-1" alt="Gambar 2">
                <img src="img/layanan/toko.jpg" class="h-25 w-100 p-1" alt="Gambar 2">
            </div>
        </div>     
    </div>
    <div class="col-4 border border-3 mt-3">
        <div class="row p-2">
          <div class="card bg-success" style="width: auto;border: none;">
              <img src="img/layanan/potensi rempah.jpg" style="height: 350px">
              <ul class="list-group list-group-flush">
                <li class="list-group-item bg-success">
                   <a href="" class="ink-offset-2 link-underline link-underline-opacity-0 text-light"> Bisnis Rempah Dapur, Pemuda IniRaih Omzet Jutaan Rupiah</a> 
                </li>
                <li class="list-group-item bg-success">
                  <a href="" class="ink-offset-2 link-underline link-underline-opacity-0 text-light"> Bisnis Rempah Dapur, Pemuda IniRaih Omzet Jutaan Rupiah </a>  
                </li>
                <li class="list-group-item bg-success">
                    <a href="" class="ink-offset-2 link-underline link-underline-opacity-0 text-light"> Bisnis Rempah Dapur, Pemuda IniRaih Omzet Jutaan Rupiah </a>
                </li>
              </ul>
            </div>  
        </div>
        <div class="row justify-content-between text-success mt-2">
           <h5>LIFESTYLE <i class="fa fa-chevron-right float-end " aria-hidden="true"></i><i class="fa fa-chevron-left float-end me-2" aria-hidden="true"></i> </h5>
        </div>
        <div class="row mt-2" style="height: 250px">
            <img src="img/layanan/potensi rempah.jpg" class="image-fluid" >
        </div>
    </div>
</div>
</div>





@endsection