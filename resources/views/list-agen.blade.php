@extends('layout.main')
  
@section('container')


<div class="container p-3">
    <h3 class="text-center fw-bold p-2 text-success">Daftar Agen Javawangi</h3>


    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($agen as $p)        
        <div class="col">
            <a href="/layanan/list-agen/{{ $p->slug }}" class="link-offset-2 link-underline link-underline-opacity-0">
            <div class="card h-100 border-success border border-3 shadow shadow-3">
            <img src="{{ asset('storage/'.$p->gambar) }}" class="card-img-top img-thumbnail img-fluid">
            <div class="card-body text-dark">
                <h5 class="card-title">{{ $p->nama_agen }}</h5>
                <p class="card-text">{!! $p->alamat !!}</p>
            </div>  
            <a href="https://maps.google.com/maps?ll=-8.216649,114.372096&z=20&t=m&hl=en-US&gl=US&mapclient=embed&q={!!  $p->alamat !!}" class="mb-5 ms-5 text-start">Lihat Map...</a>      
            </div>
            </a>        
        </div>
        @endforeach    
    </div>
</div>




@endsection