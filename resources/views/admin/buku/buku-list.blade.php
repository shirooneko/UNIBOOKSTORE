@extends('/layout/layout')
@section('konten')
<section class="col-md-12 px-5 py-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Data Buku</h3>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-primary" href="{{ url('/buku/add')}}">Tambah Data</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" width="100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Buku</th>
                            <th>Kategori</th>
                            <th>Nama Buku</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Penerbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($dataBuku as $buku)
                    <tbody>
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$buku->id_buku}}</td>
                            <td>{{$buku->kategori}}</td>
                            <td>{{$buku->nama_buku}}</td>
                            <td>{{$buku->harga}}</td>
                            <td>{{$buku->stok}}</td>
                            <td>{{$buku->penerbit}}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-warning" href="{{url('/edit/'. $buku->id)}}">Edit</a>
                                    <a class="btn btn-danger" href="{{url('/delete/'. $buku->id)}}">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection