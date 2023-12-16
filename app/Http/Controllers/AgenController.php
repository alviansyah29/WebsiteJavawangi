<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agen;

class AgenController extends Controller
{
    public function index()
    {
        return view('page.layanan',[
            "title" => "Layanan",
            "agen" =>Agen::all()
        ]);
    }

    public function agen()
    {
        return view('list-agen',[
            "title" => "Daftar Agen",
            "agen" =>Agen::all()
        ]);
    }

    public function show(Agen $agen)
    {
        return view('detail-agen',[
            "title" => "Detail Agen",
            "agen" => $agen
        ]);
    }
}
