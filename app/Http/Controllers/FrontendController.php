<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\ContentArtikel;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $x = 1;
        $artikel = Artikel::select('*')
        ->join('content_artikel', 'content_artikel.artikel_id','=','artikel.id_artikel')
        ->get();
        return view ('frontend.artikel.home', compact('artikel', 'x'));
    }

    public function detail() {
        return view ('frontend.artikel.detail');
    }
}
