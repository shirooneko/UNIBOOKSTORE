@extends('layout.layout')
@section('konten')
<section class="col-md-12 px-5 py-5">
    <div class="card">
        <div class="card-header">
            <h3>Update Data Buku</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/buku/update') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $dataBuku->id }}">
                <div class="mb-3">
                    <label for="kategori" class="form-label">ID Buku</label>
                    <input type="text" class="form-control" id="id_buku" name="id_buku" value="{{ $dataBuku->id_buku }}" required>
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $dataBuku->kategori }}" required>
                </div>
                <div class="mb-3">
                    <label for="nama_buku" class="form-label">Nama Buku</label>
                    <input type="text" class="form-control" id="nama_buku" name="nama_buku" value="{{ $dataBuku->nama_buku }}" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="{{ $dataBuku->harga }}" required>
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok" value="{{ $dataBuku->stok }}" required>
                </div>
                <div class="mb-3">
                    <label for="penerbit_id" class="form-label">Nama Penerbit</label>
                    <select class="form-control" id="penerbit_id" name="penerbit_id" required>
                        <option value="">Pilih Penerbit</option>
                        @foreach($dataPenerbit as $penerbit)
                            <option value="{{ $penerbit->id }}" {{ $penerbit->id == $dataBuku->penerbit_id ? 'selected' : '' }}>{{ $penerbit->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</section>
@endsection
