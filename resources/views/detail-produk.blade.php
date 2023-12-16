@extends('layout.main')

@section('container')


<div class="container">
	<div class="row justify-content-center">		
		<div class="card mb-3 w-100 h-100">
		  <div class="row g-0">
		    <div class="col-md-4 p-3 text-center">
		      	<img src="{{ asset('storage/'.$produk->gambar) }}" class="img-fluid rounded-start">			  	
				<a href="#" class="btn btn-success">Masukkan Keranjang</a>
				<a href="/bisnis" class="btn btn-danger">Cancel</a>				
		    </div>
		    <div class="col-md-8">
		      	<div class="card-body">
					<h5 class="card-title mb-4 fw-bold">{{ $produk->nama_produk }}</h5>
					<p class="card-text">{!! $produk->deskripsi !!}</p>									       
		      </div>			  
		    </div>
		  </div>
		</div>
	</div>
</div>


@endsection