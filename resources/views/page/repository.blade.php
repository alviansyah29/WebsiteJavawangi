@extends('layout.main')
  
@section('container')

<div class="container my-2" >
	
		<div class="card text-bg-dark">
		  <img src="img/Asset Foto Web Edukasi/6 Repository/Banner.jpeg" class="card-img image-fluid" style="max-height: 35vh">
		  <div class="card-img-overlay mt-5 ms-3">
		  	<h3 class="text-dark"><strong>Repository By Javawangi</strong></h3>
		    <h5 class="card-title text-bg-success d-inline-flex">The Best Journal All About Spices</h5>		    
		  </div>
		</div>
	
</div>
    
<form class="d-flex" role="search">
		<input class="form-control me-2" type="search" placeholder="Cari Hot News" aria-label="Search">
		<button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
</form>


 <div class="album py-5 mt-3">
    <div class="container">

      <div class="row g-1">
      	@foreach($repo as $repo)
        <div class="col-4">
        	<div class="card mb-3" style="max-width: 540px;">
			  <div class="row g-0">
			    <div class="col-md-4 p-2">
			      <img src="{{ $repo['gambar'] }}" class="img-fluid rounded-start">
			    </div>
			    <div class="col-md-8 bg-success">
			      <div class="card-body ">
			        <h6 class="card-title">{{ $repo['judul'] }}</h6>
			        <button class="btn btn-sm btn-secondary shadow text-success bg-light">Download</button>
			        
			      </div>
			    </div>
			  </div>
			</div>
        </div>
      	@endforeach
      </div>
    </div>
  </div>





@endsection