@extends('backend.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h3>Add New Artikel</h3>
            </div>
            <form action="{{ url('storeArtikel') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <div class="form-group">
                        <div class="text-start">
                            <label for="judul" class="form-label">Judul</label>
                        </div>
                        <input type="text" class="form-control" name="judul" required>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="thumbnail" class="form-label">Thumbnail Artikel</label>
                        </div>
                        <input type="file" class="form-control" name="thumbnail" required>
                    </div>
                    <div class="form-group">
                        <div class="text-start">
                            <label for="tag" class="form-label">Tag</label>
                        </div>
                        <input type="text" class="form-control" name="tag" required>
                    </div>
                    <div class="form-group">
                        <div class="text-start">
                            <label for="kategori" class="form-label">Kategori</label>
                        </div>
                        <input type="text" class="form-control" name="kategori" required>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="logo" class="form-label">Logo Artikel</label>
                        </div>
                        <input type="file" class="form-control" name="logo" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary tombol-simpan">Simpan</button>
            </form>
        </div>
    </div>
@endsection
