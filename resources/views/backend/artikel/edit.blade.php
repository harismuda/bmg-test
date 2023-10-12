@extends('backend.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h3>Edit artikel</h3>
            </div>
            @foreach ($artikel as $item)
                <form action="{{ url('updateArtikel', $item->id_artikel) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $item->id_artikel }}">
                <div class="modal-body text-start">
                    <div class="form-group mb-2">
                        <div class="text-start">
                            <label for="judul" class="form-label">Judul</label>
                        </div>
                        <input type="text" class="form-control" name="judul" value="{{ $item->judul_artikel }}">
                    </div>
                    <div class="form-group mb-2">
                        <div>
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                        </div>
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail" required>
                    </div>
                    <div class="form-group mb-2">
                        <div>
                            <label for="tag" class="form-label">Tag</label>
                        </div>
                        <input type="text" name="tag" class="form-control" value="{{ $item->tag_artikel }}">
                    </div>
                    <div class="form-group mb-2">
                        <div>
                            <label for="kategori" class="form-label">Kategori</label>
                        </div>
                        <input type="text" name="kategori" class="form-control" value="{{ $item->kategori_artikel }}">
                    </div>
                    <div class="form-group mb-2">
                        <div>
                            <label for="logo" class="form-label">Logo</label>
                        </div>
                        <input type="file" name="logo" class="form-control" value="{{ $item->logo_artikel }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary tombol-simpan">Simpan</button>
            </form>
            @endforeach
        </div>
    </div>
@endsection
