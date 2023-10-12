<a href="{{ url('editArtikel') }}/{{ $data->id_artikel }}" class="btn btn-warning">Edit</a>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah anda yakin ingin mengapusnya?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tekan Delete Jika Yakin
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <a href="{{ url('destroyArtikel') }}/{{ $data->id_artikel }}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
