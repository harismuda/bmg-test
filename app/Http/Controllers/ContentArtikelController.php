<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\ContentArtikel;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ContentArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ContentArtikel::leftjoin('artikel', 'artikel.id_artikel','=', 'content_artikel.artikel_id')
        ->orderBy('artikel.judul_artikel', 'asc')
        ->select([
            'content_artikel.*',
            'artikel.id_artikel as artikel', 'artikel.judul_artikel'
        ]);
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('thumbnail_content', function ($data) {
            $url = asset('images/' . $data->thumbnail_content);
            return '<img src="' . $url . '" border="0" width="75" class="img-rounded" align="center" />';
        })
        ->addColumn('aksi', function ($data) {
            return view('backend.artikel.content.tombol')->with('data', $data);
        })
        ->rawColumns(['thumbnail_content', 'aksi'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artikel = Artikel::get();
        return view('backend.artikel.content.add', compact('artikel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $thumbnailName = 'ContentThumbnail' . time() . '.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path('images'), $thumbnailName);

        ContentArtikel::insert([
            'artikel_id' => $request->artikel,
            'judul_content' => $request->judul,
            'isi' => $request->konten,
            'thumbnail_content' => $thumbnailName,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('/content')->with('success', 'Content berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $content = ContentArtikel::where('id_content', $id)
            ->join('artikel', 'artikel.id_artikel', '=', 'content_artikel.artikel_id')
            ->get();
        return view('backend.artikel.content.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $thumbnailName = 'ContentThumbnail' . time() . '.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path('images'), $thumbnailName);

        ContentArtikel::where('id_content', $request->id)->update([
            'artikel_id' => $request->artikel,
            'judul_content' => $request->judul,
            'isi' => $request->konten,
            'thumbnail_content' => $thumbnailName,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('/content')->with('success', 'Content berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = ContentArtikel::where('id_content', $id)->first();
        Storage::disk('public')->delete($data->thumbnail_content);

        ContentArtikel::where('id_content', $id)->delete();
        return redirect('/content')->with('success', 'Data berhasil di hapus');
    }
}
