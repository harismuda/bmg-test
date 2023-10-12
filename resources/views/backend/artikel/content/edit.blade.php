@extends('backend.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h3>Edit Content</h3>
            </div>
            @foreach ($content as $item)
                <form action="{{ url('update', $item->id_content) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $item->id_content }}">
                <div class="modal-body text-start mb-3">
                    <div class="form-group">
                        <div class="text-start">
                            <label for="artikel" class="form-label">Pilih Artikel</label>
                        </div>
                        <select name="artikel" id="artikel" class="form-control">
                            <option value="{{ $item->id_artikel }}">{{ $item->judul_artikel }}</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <div class="text-start">
                            <label for="judul" class="form-label">Judul</label>
                        </div>
                        <input type="text" class="form-control" name="judul" value="{{ $item->judul_content }}" required>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="konten" class="form-label">Isi Content</label>
                        </div>
                        <textarea id="konten" class="form-control" name="konten" rows="10" cols="50"></textarea>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="thumbnail" class="form-label">Thumbnail Content</label>
                        </div>
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary tombol-simpan">Simpan</button>
            </form>
            @endforeach
        </div>
    </div>
@endsection
