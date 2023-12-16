@extends('layout.main')
  
@section('container')

<div class="container">
	<div class="card text-center">
		<div class="card">
		  <img src="{{$gambar}}" class="h-100 w-100 p-1">
		  <div class="card-body text-success">
		    <h5 class="card-title mb-2">{{ $judul }}</h5>
		    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>		    
		  </div>
		</div>
	</div>
	<div  class="row text-success">
		<h5>Berita Lainnya</h5>
		<p>Temukan Berita Menarik dan Menginspirasi lainnya di Javapedia</p>		
	</div>
	<div  class="d-flex flex-row gap-2">
		@foreach($berita as $berita)
		<div class="card text-success p-2 shadow" style="width: 18rem;">
		  <img src="{{$berita['gambar']}}" class="card-img-top" alt="Jahe Busuk">
		  <div class="card-body">
		    <h6 class="card-title"><strong>{{$berita['judul']}}</strong></h6>		    
		    <a href="#">Baca Selengkapnya >></a>
		  </div>
		</div>
		@endforeach
	</div>
</div>

@endsection

