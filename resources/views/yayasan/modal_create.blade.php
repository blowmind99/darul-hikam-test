<div class="modal fade" id="createModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Tambah Yayasan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form action="{{ route('yayasan.store') }}" method="POST">
        @csrf

        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Nama Yayasan</label>
            <input type="text" class="form-control" name="nama" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat"></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label">No Telepon</label>
            <input type="text" class="form-control" name="telepon">
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>

      </form>

    </div>
  </div>
</div>