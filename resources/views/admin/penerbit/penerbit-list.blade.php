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
                    <a class="btn btn-primary" href="{{ route('penerbit.index')}}">Tambah Data</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" width="100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Penerbit</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($dataPenerbit as $penerbit)
                    <tbody>
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$penerbit->id_penebit}}</td>
                            <td>{{$penerbit->nama}}</td>
                            <td>{{$penerbit->alamat}}</td>
                            <td>{{$penerbit->kota}}</td>
                            <td>{{$penerbit->telepon}}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-warning" href="{{url('/edit/'. $penerbit->id)}}">Edit</a>
                                    <a class="btn btn-danger" href="{{url('/delete/'. $penerbit->id)}}">Hapus</a>
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