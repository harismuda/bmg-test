<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Artikel::orderBy('judul_artikel', 'asc');
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('thumbnail_artikel', function($data){
            $url= asset('images/'.$data->thumbnail_artikel);
            return '<img src="'.$url.'" border="0" width="75" class="img-rounded" align="center" />';
        })
        ->addColumn('logo_artikel', function ($data) {
            $url = asset('logo/' . $data->logo_artikel);
            return '<img src="' . $url . '" border="0" width="75" class="img-rounded" align="center" />';
        })
        ->addColumn('aksi', function($data){
            return view('backend.artikel.tombol')->with('data', $data);
        })
        ->rawColumns(['thumbnail_artikel', 'logo_artikel', 'aksi'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.artikel.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $thumbnailName = 'thumbnail' . time() . '.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path('images'), $thumbnailName);

        $logoName = 'logo' . time() . '.' . $request->logo->extension();
        $request->logo->move(public_path('logo'), $logoName);

        Artikel::insert([
            'judul_artikel' => $request->judul,
            'thumbnail_artikel' => $thumbnailName,
            'tag_artikel' => $request->tag,
            'kategori_artikel' => $request->kategori,
            'logo_artikel' => $logoName,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('/data-artikel')->with('success', 'Artikel berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $artikel = Artikel::where('id_artikel', $id)->get();
        return view ('backend.artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $thumbnailName = 'thumbnail' . time() . '.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path('images'), $thumbnailName);

        $logoName = 'logo' . time() . '.' . $request->logo->extension();
        $request->logo->move(public_path('logo'), $logoName);

        Artikel::where('id_artikel', $request->id)->update([
            'judul_artikel' => $request->judul,
            'thumbnail_artikel' => $thumbnailName,
            'tag_artikel' => $request->tag,
            'kategori_artikel' => $request->kategori,
            'logo_artikel' => $logoName,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('/data-artikel')->with('success', 'Artikel berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Artikel::where('id_artikel', $id)->first();
        Storage::disk('public')->delete($data->thumbnail_artikel);

        Artikel::where('id_artikel', $id)->delete();
        return redirect('/data-artikel')->with('success', 'Data berhasil di hapus');
    }
}
