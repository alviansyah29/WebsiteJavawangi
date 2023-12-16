@extends('layout.main')
  
@section('container')

<div class="container overflow-hidden">
	<form class="d-flex" role="search">
		<input class="form-control me-2" type="search" placeholder="Cari Hot News" aria-label="Search">
		<button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
	</form>

    <div class=" p-2 flex-row mt-3 border border-1 border-success shadow" style="height: 100px;">
    	<h5>Solusi Masalah</h5>
    	<h6 class="text-success"><strong>Temukan cara terbaik bersama Javawangi, untuk budidaya komoditas rempah dari mulai pra-taman, pemeliharaan hingga penjualan</strong></p>
    </div>




  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row g-1">
      	@foreach($bahan as $bahan)
        <div class="col-4">
        	<a href="/single-bahan">
	          <div class="card shadow-sm" style="width: 20em;">
	            <img class="bd-placeholder-img card-img-top p-2 image-fluid" src="{{$bahan['gambar']}}" >
	          </div>
      		</a>
        </div>
      	@endforeach
      </div>
    </div>
  </div>


</div>
</div>

@endsection