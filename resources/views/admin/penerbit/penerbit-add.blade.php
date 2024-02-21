@extends('layout.layout')
@section('konten')
<section class="col-md-12 px-5 py-5">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Penerbit</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('penerbit.index') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="id_penerbit" class="form-label">ID Penerbit</label>
                    <input type="text" class="form-control" id="id_penerbit" name="id_penerbit" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Penerbit</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="mb-3">
                    <label for="kota" class="form-label">Kota</label>
                    <input type="text" class="form-control" id="kota" name="kota" required>
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</section>
@endsection
