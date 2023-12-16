<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name','LSAPP') }} | {{ $title }}</title>
    <link href="{{ asset('/css/fa/css/font-awesome.min.css') }}" rel="stylesheet">    
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
   <!--  <link href="{{ asset('/css/cardslider.css') }}" rel="stylesheet"> -->
  </head>
  <body>

    @include('partial.navbar')

    <div class="container">
      @yield('container')      
    </div>

    <footer class="p-2">
    <div class="container-fluid bg-success ">
      <div class="row text-center">
        <div class="col-md-6 themed-grid-col text-light py-3">
            <img src="{{ asset('img/logo_emas.png') }} " class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">PT. JAVAWANGI INDONESIA</h5>
              <p class="card-text">Jln. KH.Wahid Hasyim No.46, Penganjuran,<br> Kec.Banyuwangi, Kab.Banyuwangi, Jawa Timur 68416</p>            
            </div>
        </div>

        <div class="col-md-6 themed-grid-col">        
          <div class="row">
            <div class="col-md-4 themed-grid-col text-light pt-5">
              <h5>COMPANY</h5>
                <div class="p-2"><a href="/" class="text-light mb-3 link-offset-2 link-underline link-underline-opacity-0">HOME</a></div>
                <div class="p-2"><a href="/about" class="text-light mb-3 link-offset-2 link-underline link-underline-opacity-0">TENTANG KAMI</a></div>
                <div class="p-2"><a href="/bisnis" class="text-light mb-3 link-offset-2 link-underline link-underline-opacity-0">BISNIS</a></div>
                <div class="p-2"><a href="/layanan" class="text-light mb-3 link-offset-2 link-underline link-underline-opacity-0">LAYANAN</a></div>
                <div class="p-2"><a href="" class="text-light mb-3 link-offset-2 link-underline link-underline-opacity-0">KONSULTASI</a></div>
                <div class="p-2"><a href="/kontak" class="text-light mb-3 link-offset-2 link-underline link-underline-opacity-0">KONTAK</a></div>
            </div>

            <div class="col-md-4 themed-grid-col text-light pt-5">
              <h5>JOIN US</h5>
                <div class="p-2"><a href="#" class="text-light mb-3 link-offset-2 link-underline link-underline-opacity-0">PEMBELI</a></div>
                <div class="p-2"><a href="#" class="text-light mb-3 link-offset-2 link-underline link-underline-opacity-0">PETANI</a></div>
                <div class="p-2"><a href="#" class="text-light mb-3 link-offset-2 link-underline link-underline-opacity-0">AGEN</a></div>             
            </div>

            <div class="col-md-4 themed-grid-col text-light pt-5">
              <H5>SOCIAL MEDIA</H5>
              <div class="d-flex justify-content-between mt-4 px-3">
                <div><a href="#" class="text-light mb-3 link-offset-2 link-underline link-underline-opacity-0"><i class="fa fa-2x fa-facebook me-2" aria-hidden="true"></i></a></div>
                <div><a href="#" class="text-light mb-3 link-offset-2 link-underline link-underline-opacity-0"><i class="fa fa-2x fa-youtube-play me-2" aria-hidden="true"></i></a></div>
                <div><a href="#" class="text-light mb-3 link-offset-2 link-underline link-underline-opacity-0"><i class="fa fa-2x fa-instagram me-2" aria-hidden="true"></i></a></div>            
              </div>
            </div>
          </div>
        </div>      
      </div>
    </div>    
    </footer>
    
    <script src="{{ asset('/js/jQuery.js') }}"></script>   
    <script src="{{ asset('/js/script.js') }}"></script>
    <script src="{{ asset('/js/cardslider.js') }}"></script>
    
  </body>
</html>