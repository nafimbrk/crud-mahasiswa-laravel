<x-template judul="Hapus Mata Kuliah Informatika">
    <h1 class="mt-3 bg-primary text-center text-white">Hapus Mata Kuliah</h1>
    @if (session('pesan'))
    <div class="bg-danger text-white text-center weight-bold">
      {{ session('pesan') }}
    </div>
    @endif
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="kode">Kode Mk : </label>
            <input type="text" id="kode" name="kode" class="form-control mx-sm-3" aria-describedby="kodeHelp" placeholder="Masukkan Kode" required min="111111" max="999999999" value="{{ $matakuliah['kode'] ?? "" }}" disabled>
            <small id="kodeHelp" class="text-muted">
              Kode Mata Kuliah
              
            </small>
          </div>
        <div class="form-group">
            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama" class="form-control mx-sm-3" aria-describedby="namaHelp" placeholder="Masukkan Nama" required minlength="3" maxlength="50" value="{{ $matakuliah['nama'] ?? "" }}" disabled>
            <small id="namaHelp" class="text-zmuted">
              Nama Mahasiswa
              
            </small>
          </div>
        <div class="form-group">
            <label for="sks">Sks : </label>
            <input type="number" id="sks" name="sks" class="form-control mx-sm-3" aria-describedby="sksHelp" placeholder="Masukkan Sks" min="0" max="16" value="{{ $matakuliah['sks'] ?? "" }}" disabled>
            <small id="sksHelp" class="text-muted">
              Sks Mata Kuliah
              
            </small>
          </div>
          <div class="form-group">
            <input type="hidden" name="kode" value="{{ $matakuliah['kode'] ?? "" }}">
            <button type="submit" class="btn btn-primary">Hapus Data Mata Kuliah</button>
          </div>
    </form>
</x-template>