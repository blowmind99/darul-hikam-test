@foreach($sekolah as $s)

<div class="modal fade" id="deleteModal{{ $s->id }}" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Hapus Sekolah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form action="{{ route('sekolah.destroy',$s->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <div class="modal-body">

          <p>Apakah anda yakin ingin menghapus sekolah:</p>

          <strong>{{ $s->nama }}</strong>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Batal
          </button>

          <button type="submit" class="btn btn-danger">
          Hapus
          </button>

        </div>

      </form>

    </div>
  </div>
</div>

@endforeach