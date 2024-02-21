@extends('layout.layout')
@section('konten')
<section class="col-md-12 px-5 py-5">
    <div class="card">
        <div class="card-header">
            <h3>Update Data Penerbit</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/penerbit/update') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $dataPenerbit->id }}">
                <div class="mb-3">
                    <label for="nama" class="form-label">ID Penerbit</label>
                    <input type="text" class="form-control" id="id_penerbit" name="id_penerbit" value="{{ $dataPenerbit->id_penerbit }}" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Penerbit</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $dataPenerbit->nama }}" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $dataPenerbit->alamat }}" required>
                </div>
                <div class="mb-3">
                    <label for="kota" class="form-label">Kota</label>
                    <input type="text" class="form-control" id="kota" name="kota" value="{{ $dataPenerbit->kota }}" required>
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $dataPenerbit->telepon }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</section>
@endsection
