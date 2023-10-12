@extends('backend.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h3>Add New Content</h3>
            </div>
            <form action="{{ url('storeContent') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body text-start mb-3">
                    <div class="form-group">
                        <div class="text-start">
                            <label for="artikel" class="form-label">Pilih Artikel</label>
                        </div>
                        <select name="artikel" id="artikel" class="form-control" required>
                            <option value="">-- Pilih Artikel --</option>
                            @foreach ($artikel as $item)
                                <option value="{{ $item->id_artikel }}">{{ $item->judul_artikel }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="text-start">
                            <label for="judul" class="form-label">Judul</label>
                        </div>
                        <input type="text" class="form-control" name="judul" required>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="konten" class="form-label">Isi Content</label>
                        </div>
                        <textarea id="description" class="form-control" name="konten" rows="10" cols="50" required></textarea>
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
        </div>
    </div>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script> --}}
@endsection
