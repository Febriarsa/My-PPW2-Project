<form method="post" action="{{ route('buku.update', $buku->id) }}">
    @csrf
    @method('post')
    
    <div>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}">
        </div>

        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" class="form-control" value="{{ $buku->penulis }}">
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" name="harga" class="form-control" value="{{ $buku->harga }}">
        </div>

        <div class="form-group">
            <label for="tgl_terbit">Tanggal Terbit</label>
            <input type="text" name="tgl_terbit" class="form-control" value="{{ $buku->tgl_terbit }}">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
