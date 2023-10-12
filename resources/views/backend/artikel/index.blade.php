@extends('backend.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-6">
                <div class="text-start">
                    <h3>Data Artikel</h3>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 ">
                <div class="text-end">
                    <a href="{{ url('/addArtikel') }}" class="btn btn-success">Add New Artikel</a>
                </div>
            </div>
            @if (Session::has('success'))
                <div class="pt-3">
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                </div>
            @endif
            <div class="table-responsive mt-3">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Thumbnail</th>
                            <th>Tag</th>
                            <th>Kategori</th>
                            <th>Logo</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <script>
        // let table = new DataTable('#myTable');
        $(document).ready(function() {
            $('#myTable').DataTable({
                processing: true,
                serverside: true,
                ajax: "{{ url('ajax') }}",
                columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                }, {
                    data: 'judul_artikel',
                    name: 'Judul'
                }, {
                    data: 'thumbnail_artikel',
                    name: 'Thumbnail'
                }, {
                    data: 'tag_artikel',
                    name: 'Tag'
                }, {
                    data: 'kategori_artikel',
                    name: 'Kategori'
                }, {
                    data: 'logo_artikel',
                    name: 'Logo'
                }, {
                    data: 'aksi',
                    name: 'Aksi'
                }]
            });
        })
    </script>
@endsection
