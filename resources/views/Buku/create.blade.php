<form method="post" action="{{ route('buku.store') }}" class="form">
    @csrf
    
    <!-- Input untuk judul buku -->
    <div style="margin-bottom: 15px;">
        <label for="judul">Judul Buku</label><br>
        <input class="input" type="text" name="judul" id="judul" style="width: 100%; padding: 8px;" placeholder="Masukkan judul buku" required>
    </div>

    <!-- Input untuk penulis buku -->
    <div style="margin-bottom: 15px;">
        <label for="penulis">Penulis</label><br>
        <input type="text" name="penulis" id="penulis" style="width: 100%; padding: 8px;" placeholder="Masukkan nama penulis" required>
    </div>

    <!-- Input untuk harga buku -->
    <div style="margin-bottom: 15px;">
        <label for="harga">Harga</label><br>
        <input type="number" name="harga" id="harga" style="width: 100%; padding: 8px;" placeholder="Masukkan harga buku" required>
    </div>

    <!-- Input untuk tanggal terbit buku -->
    <div style="margin-bottom: 15px;">
        <label for="tgl_terbit">Tanggal Terbit</label><br>
        <input type="date" placeholder="yyy/mm/dd" name="tgl_terbit" id="tgl_terbit" style="width: 100%; padding: 8px;" required>
    </div>

    <!-- Tombol submit -->
    <button class="button" type="submit" style="padding: 10px 20px; background-color: green; color: white; border: none; cursor: pointer;">
        Tambah Buku
    </button>

    @if (count($errors) > 0)
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
</form>

