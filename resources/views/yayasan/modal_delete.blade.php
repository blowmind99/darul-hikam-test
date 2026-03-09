<div class="modal fade" id="delete{{ $y->id }}">

<div class="modal-dialog modal-sm">

<div class="modal-content">

<form action="{{ route('yayasan.destroy',$y->id) }}" method="POST">

@csrf
@method('DELETE')

<div class="modal-body text-center">

<h5>Hapus data ini?</h5>

<p>{{ $y->nama_yayasan }}</p>

<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
Batal
</button>

<button class="btn btn-danger">
Delete
</button>

</div>

</form>

</div>
</div>
</div>