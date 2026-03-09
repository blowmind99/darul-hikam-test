<div class="modal fade" id="edit{{ $y->id }}">

<div class="modal-dialog">

<div class="modal-content">

<form action="{{ route('yayasan.update',$y->id) }}" method="POST">

@csrf
@method('PUT')

<div class="modal-header">
<h5 class="modal-title">Edit Yayasan</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">

<div class="mb-3">
<label>Nama Yayasan</label>
<input type="text" name="nama" class="form-control"
value="{{ $y->nama }}">
</div>

<div class="mb-3">
<label>Alamat</label>
<textarea name="alamat" class="form-control">{{ $y->alamat }}</textarea>
</div>

<div class="mb-3">
<label>No Telepon</label>
<textarea name="telepon" class="form-control">{{ $y->telepon }}</textarea>
</div>

</div>

<div class="modal-footer">

<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
Batal
</button>

<button type="submit" class="btn btn-success">
Update
</button>

</div>

</form>

</div>
</div>
</div>