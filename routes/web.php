<?php

use App\Models\Bisnis;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenController;
use App\Http\Controllers\JavaController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\BisnisController;
use App\Http\Controllers\AdminAgenController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\JavapediaController;
use App\Http\Controllers\AdminMitraController;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Login dan Register
Route::get('admin', [CustomAuthController::class, 'admin']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout'); 


//Menu Bisnis
Route::get('/bisnis', [BisnisController::class,'index']);
Route::get('/bisnis/{produk:slug}', [BisnisController::class,'show']);
Route::resource('/admin/bisnis', AdminPostController::class)->middleware('auth');
// Sluggable route
Route::get('/admin/bisnis/CekSlug',[AdminPostController::class,'CekSlug']);


//Menu Javapedia
Route::get('/javapedia', [JavaController::class,'index']);
Route::get('/javapedia/{produk:slug}', [JavaController::class,'show']);
Route::resource('/admin/javapedia', JavapediaController::class)->middleware('auth');






//Menu Layanan
Route::get('/layanan', [AgenController::class,'index']);
Route::get('/layanan/list-agen', [AgenController::class,'agen']);
Route::get('/layanan/list-agen/{agen:slug}', [AgenController::class,'show']);
Route::get('/layanan/mitra', [MitraController::class,'index']);
Route::post('/layanan/mitra', [MitraController::class,'create']);

Route::resource('/admin/agen', AdminAgenController::class)->middleware('auth');
Route::resource('/admin/mitra', AdminMitraController::class)->middleware('auth');



Route::get('/', function () {
    return view('page/home',[
    	"title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('page/about',[
    	"title" => "Tentang Kami"
    ]);
});

//Menu Kontak
Route::get('/kontak', function () {
    return view('page/kontak',[
    	"title" => "Kontak"
    ]);
});


//Menu News
Route::get('/news', function () {
    return view('page/news',[
    	"title" => "News",
        "judul" => "Javawangi Singkirkan Ratusan Peserta Jagoan Tani"
    ]);
});



//Menu Solusi
Route::get('/solusi', function () {

$solusi=[
    [
        "gambar"    =>"img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg",
      
        "ket" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",

    ],
       [
            "gambar"    =>"img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg",
     
        "ket" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",

    ],
       [
           "gambar"    =>"img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg",
     
        "ket" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",

    ],
       [
          "gambar"    =>"img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg",
       
        "ket" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",

    ],
       [
         "gambar"    =>"img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg",
       
        "ket" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",

    ],
       [
         "gambar"    =>"img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg",
       
        "ket" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",

    ]
];

    return view('page/solusi',[
    	"title" => "Solusi",
        "solusi" => $solusi
    ]);
});


Route::get('/inspirasi', function () {

    $ins=[
        [
            "gambar"    =>"img/Asset Foto Web Edukasi/5 Inspirasi/Inspirasi 1.jpg",
        
            "ket" => "Bisnis Rempah Dapur, Pemuda Ini Raih Omzet Jutaan Rupiah",

        ],
        [
                "gambar"    =>"img/Asset Foto Web Edukasi/5 Inspirasi/Inspirasi 1.jpg",
        
            "ket" => "Bisnis Rempah Dapur, Pemuda Ini Raih Omzet Jutaan Rupiah",

        ],
        [
            "gambar"    =>"img/Asset Foto Web Edukasi/5 Inspirasi/Inspirasi 1.jpg",
        
            "ket" => "Bisnis Rempah Dapur, Pemuda Ini Raih Omzet Jutaan Rupiah",

        ],
        [
            "gambar"    =>"img/Asset Foto Web Edukasi/5 Inspirasi/Inspirasi 1.jpg",
        
            "ket" => "Bisnis Rempah Dapur, Pemuda Ini Raih Omzet Jutaan Rupiah",

        ],
        [
            "gambar"    =>"img/Asset Foto Web Edukasi/5 Inspirasi/Inspirasi 1.jpg",
        
            "ket" => "Bisnis Rempah Dapur, Pemuda Ini Raih Omzet Jutaan Rupiah",

        ],
        [
            "gambar"    =>"img/Asset Foto Web Edukasi/5 Inspirasi/Inspirasi 1.jpg",
        
            "ket" => "Bisnis Rempah Dapur, Pemuda Ini Raih Omzet Jutaan Rupiah",

        ]
    ];

        return view('page/inspirasi',[
            "title" => "Inspirasi",
            "ins" => $ins
        ]);
});



Route::get('/repository', function () {

$repo=[
    [
       "gambar"     =>"img/Asset Foto Web Edukasi/6 Repository/Cover Jurnal.jpg",
      
        "judul"     => "Judul Jurnal 1"
    ],
    [
       "gambar"     =>"img/Asset Foto Web Edukasi/6 Repository/Cover Jurnal.jpg",
      
        "judul"     => "Judul Jurnal 2"
    ],
    [
       "gambar"     =>"img/Asset Foto Web Edukasi/6 Repository/Cover Jurnal.jpg",
      
        "judul"     => "Judul Jurnal 3"
    ],
    [
       "gambar"     =>"img/Asset Foto Web Edukasi/6 Repository/Cover Jurnal.jpg",
      
        "judul"     => "Judul Jurnal 4"
    ],
    [
       "gambar"     =>"img/Asset Foto Web Edukasi/6 Repository/Cover Jurnal.jpg",
      
        "judul"     => "Judul Jurnal 5"
    ],
    [
       "gambar"     =>"img/Asset Foto Web Edukasi/6 Repository/Cover Jurnal.jpg",
      
        "judul"     => "Judul Jurnal 6"
    ],
    [
       "gambar"     =>"img/Asset Foto Web Edukasi/6 Repository/Cover Jurnal.jpg",
      
        "judul"     => "Judul Jurnal 7"
    ],
    [
       "gambar"     =>"img/Asset Foto Web Edukasi/6 Repository/Cover Jurnal.jpg",
      
        "judul"     => "Judul Jurnal 8"
    ],
    [
       "gambar"     =>"img/Asset Foto Web Edukasi/6 Repository/Cover Jurnal.jpg",
      
        "judul"     => "Judul Jurnal 9"
    ],
       

];

    return view('page/repository',[
    	"title" => "Repository",
        "repo" => $repo
    ]);
});


Route::get('/bahan', function () {

$bahan=[
    [
        "gambar"    =>"img/Asset Foto Web Edukasi/7 Bahan Alam/Jahe.png",
      

    ],
       [
        "gambar"    =>"img/Asset Foto Web Edukasi/7 Bahan Alam/Jahe.png",
     

    ],
       [
        "gambar"    =>"img/Asset Foto Web Edukasi/7 Bahan Alam/Jahe.png",
     

    ],
       [
       "gambar"    =>"img/Asset Foto Web Edukasi/7 Bahan Alam/Jahe.png",
       

    ],
       [
      "gambar"    =>"img/Asset Foto Web Edukasi/7 Bahan Alam/Jahe.png",
       

    ],
       [
      "gambar"    =>"img/Asset Foto Web Edukasi/7 Bahan Alam/Jahe.png",
       

    ]
];


    return view('page/bahan',[
    	"title" => "Bahan Alam",
        "bahan" => $bahan
    ]);
});


Route::get('/artikel', function () {
    $berita=[
        [
            "judul" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",
            "gambar" => "img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg"
        ],
        [
            "judul" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",
            "gambar" => "img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg"
        ],
        [
            "judul" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",
            "gambar" => "img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg"
        ],
        [
            "judul" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",
            "gambar" => "img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg"
        ],
    ];

    return view('single-news',[
        "title" => "Artikel",
        "judul" => "Javawangi Singkirkan Ratusan Peserta Jagoan Tani",
        "gambar" => "img/Asset Foto Web Edukasi/2 Berita/1.png",
        "berita" => $berita
        
    ]);
});


Route::get('/single-solusi', function () {
    $berita=[
        [
            "judul" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",
            "gambar" => "img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg"
        ],
        [
            "judul" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",
            "gambar" => "img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg"
        ],
        [
            "judul" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",
            "gambar" => "img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg"
        ],
        [
            "judul" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",
            "gambar" => "img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg"
        ],
    ];

    return view('single-solusi',[
        "title" => "Solusi",
        "judul" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",
        "gambar" => "img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg",
        "berita" => $berita
        
    ]);
});


Route::get('/single-ins', function () {
    $berita=[
        [
            "judul" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",
            "gambar" => "img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg"
        ],
        [
            "judul" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",
            "gambar" => "img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg"
        ],
        [
            "judul" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",
            "gambar" => "img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg"
        ],
        [
            "judul" => "Busuk Rimpang Pada Jahe: Mengatasi dan Mencegah Serangan Fusarium",
            "gambar" => "img/Asset Foto Web Edukasi/4 Solusi Masalah/jahe busuk.jpg"
        ],
    ];

    return view('single-ins',[
        "title" => "Insiprasi",
        "judul" => "Bisnis Rempah Dapur, Pemuda IniRaih Omzet Jutaan Rupiah",
         "gambar"    =>"img/Asset Foto Web Edukasi/5 Inspirasi/Inspirasi 1.jpg",
        "berita" => $berita
        
    ]);
});


Route::get('/single-bahan', function () {
    return view('single-bahan',[
        "title" => "Bahan Alam",
        "gambar"    =>"img/Asset Foto Web Edukasi/7 Bahan Alam/Jahe.png"        
    ]);
});



