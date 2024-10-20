<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Index Buku</title>
</head>
<body>
    <h1 style="text-align: center;">DAFTAR BUKU</h1>
    <div class="container mt-4">
        <div class="col-md-12">
            <div class="d-flex justify-content-start mb-3">
                <a href="{{ route('buku.create') }}" class="btn btn-primary float-end">Tambah Buku</a>
            </div>

            @if (Session::has('pesan'))
                <div class="alert alert-success">{{Session::get('pesan')}}</div>
            @endif
            
            @if (Session::has('pesanHapus'))
                <div class="alert alert-danger">{{Session::get('pesanHapus')}}</div>
            @endif

            @if (Session::has('success'))
                <div class="alert alert-warning">{{Session::get('success')}}</div>
            @endif

            <form action="{{ route('buku.search') }}" method="get">
                @csrf
                <input type="text" name="kata" class="form-control" 
                    placeholder="Cari ..." 
                    style="width: 30%; display: inline; margin-top: 10px; margin-bottom: 10px; float: right;">
            </form>            
            
            <table class="table table-stripped table-bordered" border="1">
                <thead class="table-info" style="text-align: center">
                    <tr>
                        <th>id</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Harga</th>
                        <th>Tanggal Terbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_buku as $index => $buku)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $buku->judul }}</td>
                            <td>{{ $buku->penulis }}</td>
                            <td>{{ "Rp. ".number_format($buku->harga, 2, ',', '.') }}</td>
                            <td>{{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('d-m-Y') }}</td>
                            <td class="d-flex">
                                <form action="{{ route('buku.destroy', $buku->id) }}" method="post" class="mx-4">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Yakin mau dihapus?')" type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                                <form action="{{ route('buku.edit', $buku->id) }}" method="get">
                                    @csrf
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </form>                        
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-center">
                {{ $data_buku->links() }}
            </div>

            <!-- Menampilkan jumlah data buku -->
            <p style="text-align: center;">Jumlah total buku: {{ $jumlah_buku }}</p>

            <!-- Menampilkan jumlah total harga -->
            <p style="text-align: center;">Total harga semua buku: Rp. {{ number_format($total_harga, 2, ',', '.') }}</p>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        </div>
    </div>
</body>
</html>