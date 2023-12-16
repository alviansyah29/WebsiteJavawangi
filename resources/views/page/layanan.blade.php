@extends('layout.main')
  
@section('container')

<div class="container">
	<div class="card mx-auto text-bg-dark">
	  <img src="img/layanan/banner layanan.jpg" class="card-img img-fluid">
	  <div class="card-img-overlay ms-3 mt-auto d-flex">
	  	<div class="align-self-end">
		    <h5 class="card-title fw-bold">Meningkatkan Kesejahteraan dengan Bermitra Javawangi</h5>
		    <p class="card-text">Ayo ikut berkontribusi untuk meningkatkan perekonomian Indonesia</p>
		    <a href="/layanan/mitra" class="btn btn-light btn-md rounded-pill">Daftar Mitra</a>
		</div>    
	  </div>
	</div>
</div>
<h2 class="text-center text-success mt-5 fw-bold">Apa saja yang Javawangi Lakukan?</h2>
<p class="text-center text-success fw-semibold">
	Javawangi merampingkan rantai pasok produk pertanian dengan menghubungkan petani rempah skala kecil dengan pasar global dengan inovasi teknologi
</p>

<div class="container mt-5">	
	<div class="card mb-3 shadow">
	  <div class="row d-flex">		    
	    <div class="col-md-8">
	      <div class="card-body mt-5 ms-5 text-success">
	        <h5 class="card-title">Cari Franchise Terdekat</h5>
	        <p class="card-text">Fitur yang dapat membantu mancari franchise terdekat.</p>
	        <a href="#" class="btn btn-sm btn-success rounded-pill">Kunjungi Halaman</a>
	      </div>
	    </div>
	    <div class="col-md-4">
	      <img src="img/layanan/cari franchise.jpg" class="img-fluid rounded-end">
	    </div>
	  </div>
	</div>
	<div class="row justify-content-center mb-5">
		<div class="col-md-4">
		<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
			<a href="" class="text-success ink-offset-2 link-underline link-underline-opacity-0 me-3 fw-semibold">Cari Franchise Terdekat</a>
			<a href="" class="text-success ink-offset-2 link-underline link-underline-opacity-0 ms-3 fw-semibold">Potensi Rempah</a>
		</div>
		</div>
	</div>	
</div>


	<div class="row justify-content-between text-success">
		<div class="col">
		<h6>Informasi Agen</h6>
		</div>
		<div class="col">
		<a href="/layanan/list-agen" class="btn btn-sm btn-outline-dark float-end">Selengkapnya <i class="fa fa-forward" aria-hidden="true"></i></a>
		</div>	
	</div>

	<div id="agen" class="carousel carousel-dark my-3">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="card-wrapper container-sm d-flex  justify-content-around">
          
        @foreach($agen as $agen)
          <div class="card" style="width: 18rem;">
            <img src="{{ asset('storage/'.$agen->gambar) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">{{ $agen->nama_agen }}</h5>
              <p class="card-text">{!! $agen->alamat !!}</p>
            </div>
          </div>
        @endforeach
        </div>
      </div>          
      <button class="carousel-control-prev" type="button" data-bs-target="#agen" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#agen" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

	<!-- <div class="container text-center my-3">
    <h2 class="font-weight-light">Bootstrap Multi Slide Carousel</h2>
    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="//via.placeholder.com/500x400/31f?text=1" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 1</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="//via.placeholder.com/500x400/e66?text=2" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 2</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="//via.placeholder.com/500x400/7d2?text=3" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 3</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="//via.placeholder.com/500x400?text=4" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 4</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="//via.placeholder.com/500x400/aba?text=5" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 5</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="//via.placeholder.com/500x400/fc0?text=6" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 6</div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <h5 class="mt-2 fw-light">advances one slide at a time</h5>
</div>

<style>
	@media (max-width: 767px) {
        .carousel-inner .carousel-item>div {
            display: none;
    }
    .carousel-inner .carousel-item>div:first-child {
            display: block;
    }
}
.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
        display: flex;
}
/* medium and up screens */
@media (min-width: 768px) {
	.carousel-inner .carousel-item-end.active,
	.carousel-inner .carousel-item-next {
            transform: translateX(25%);
    }
    .carousel-inner .carousel-item-start.active,
    .carousel-inner .carousel-item-prev {
            transform: translateX(-25%);
    }
}
.carousel-inner .carousel-item-end,
.carousel-inner .carousel-item-start {
        transform: translateX(0);
}
</style>

<script>
	let items = document.querySelectorAll('.carousel .carousel-item')
items.forEach((el) => {
        const minPerSlide = 4
        let next = el.nextElementSibling
        for (var i = 1; i < minPerSlide; i++) {
            if (!next) {
                // wrap carousel by using first child
                next = items[0]
        }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
    }
})
</script> -->

@endsection
