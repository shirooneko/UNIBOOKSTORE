@extends('layout.layout')
@section('konten')
<section class="col-md-12 px-5 py-5">
    <div class="card">
        <div class="card-header">
            <h3>Update Stok Buku</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/pengadaan/update') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $dataBuku->id }}">
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok"  value="{{ $dataBuku->stok }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update Stok</button>
            </form>
        </div>
    </div>
</section>
@endsection