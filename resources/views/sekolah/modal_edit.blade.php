@foreach($sekolah as $s)

<div class="modal fade" id="editModal{{ $s->id }}" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Edit Sekolah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form action="{{ route('sekolah.update',$s->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Nama Sekolah</label>
            <input type="text" class="form-control" name="nama" value="{{ $s->nama }}" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Yayasan</label>

            <select class="form-control" name="yayasan_id" required>

              @foreach($yayasan as $y)

              <option 
              value="{{ $y->id }}"
              {{ $s->yayasan_id == $y->id ? 'selected' : '' }}
              >

              {{ $y->nama }}

              </option>

              @endforeach

            </select>

          </div>

          <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat">{{ $s->alamat }}</textarea>
          </div>

          <div class="mb-3">
            <label class="form-label">No Telepon</label>
            <input type="text" class="form-control" name="telepon" value="{{ $s->telepon }}">
          </div>

          <div class="mb-3">
            <label class="form-label">Kepala Sekolah</label>
            <input type="text" class="form-control" name="kepala_sekolah" value="{{ $s->kepala_sekolah }}">
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Batal
          </button>

          <button type="submit" class="btn btn-primary">
          Update
          </button>
        </div>

      </form>

    </div>
  </div>
</div>

@endforeach