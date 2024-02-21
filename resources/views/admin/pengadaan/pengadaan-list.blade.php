@extends('/layout/layout')
@section('konten')
<section class="col-md-12 px-5 py-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Data Buku</h3>
                </div>
            </div>
        </div>
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
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
                            <td>{{$buku->nama_penerbit}}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-warning" href="{{url('/admin/pengadaan/updateStok/'. $buku->id)}}">Update Stok</a>
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