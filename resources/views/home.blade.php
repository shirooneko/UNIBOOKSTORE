<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <title>Home | UNIBOOKSTORE</title>
</head>

<body>
    <section class="col-md-12 px-5 py-5">
        <div class="text-center">
            <h1 class="mb-4">Selamat datang di UNIBOOKSTORE</h1>
            <a href="/admin/buku" class="btn btn-primary text-center mb-4">
                <i class="fas fa-cog"></i> Admin
            </a>
        </div>
        <div class="card mx-auto" style="max-width: 150vh;">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Data Buku</h3>
                    </div>
                    <div class="col-md-2 text-end">
                        <h3 class="fw-bold">CARI BUKU : </h3>
                    </div>
                    <div class="col-md-4">
                        <form id="searchForm" class="mb-3">
                            <div class="input-group">
                                <input type="text" id="searchBuku" class="form-control"
                                    placeholder="Cari berdasarkan nama buku...">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Buku</th>
                                <th>Kategori</th>
                                <th>Nama Buku</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Penerbit</th>
                            </tr>
                        </thead>
                        <tbody id="dataTableBody">
                            @foreach ($dataBuku as $buku)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$buku->id_buku}}</td>
                                <td>{{$buku->kategori}}</td>
                                <td>{{$buku->nama_buku}}</td>
                                <td>{{$buku->harga}}</td>
                                <td>{{$buku->stok}}</td>
                                <td>{{$buku->nama_penerbit}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#searchBuku').on('keyup', function () {
                var searchTerm = $(this).val();
                $.ajax({
                    url: "{{ route('buku.search') }}",
                    type: "GET",
                    data: { searchBuku: searchTerm },
                    success: function (response) {
                        // Kosongkan isi tabel
                        $('#dataTableBody').empty();

                        // Iterasi melalui hasil pencarian dan tambahkan ke dalam tabel
                        $.each(response, function (index, buku) {
                            $('#dataTableBody').append('<tr>' +
                                '<td>' + (index + 1) + '</td>' +
                                '<td>' + buku.id_buku + '</td>' +
                                '<td>' + buku.kategori + '</td>' +
                                '<td>' + buku.nama_buku + '</td>' +
                                '<td>' + buku.harga + '</td>' +
                                '<td>' + buku.stok + '</td>' +
                                '<td>' + buku.nama_penerbit + '</td>' +
                                '</tr>');
                        });
                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>



</body>

</html>