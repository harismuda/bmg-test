@extends('backend.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-6">
                <div class="text-start">
                    <h3>Content Artikel</h3>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 ">
                <div class="text-end">
                    <a href="{{ url('add') }}" class="btn btn-success">Add New Content</a>
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
                <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Content</th>
                            <th>Isi Content</th>
                            <th>Thumbnail Content</th>
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
                ajax: "{{ url('ajaxContent') }}",
                columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                }, {
                    data: 'judul_content',
                    name: 'Judul Content'
                }, {
                    data: 'isi',
                    name: 'Isi Content'
                }, {
                    data: 'thumbnail_content',
                    name: 'Thumbnail Content'
                },{
                    data: 'aksi',
                    name: 'Aksi'
                }]
            });
        })
    </script>
@endsection
