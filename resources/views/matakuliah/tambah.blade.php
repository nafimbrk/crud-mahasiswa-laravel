<x-template judul="Tambah Mata Kuliah Informatika">
    <h1 class="mt-3 bg-primary text-center text-white">Tambah Mata Kuliah Baru</h1>
    @if (session('pesan'))
    <div class="bg-success text-white text-center weight-bold">
      {{ session('pesan') }}
    </div>
    @endif
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="kode">Kode Mk : </label>
            <input type="text" id="kode" name="kode" class="form-control mx-sm-3" aria-describedby="kodeHelp" placeholder="Masukkan Kode" required min="111111" max="999999999" value="{{ session('kode') ?? old('kode') }}">
            <small id="kodeHelp" class="text-muted">
              Kode Mata Kuliah
              @error('kode')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </small>
          </div>
        <div class="form-group">
            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama" class="form-control mx-sm-3" aria-describedby="namaHelp" placeholder="Masukkan Nama" required minlength="3" maxlength="50" value="{{ session('nama') ?? old('nama') }}">
            <small id="namaHelp" class="text-zmuted">
              Nama Mata Kuliah
              @error('nama')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </small>
          </div>
        <div class="form-group">
            <label for="sks">Sks : </label>
            <input type="number" id="sks" name="sks" class="form-control mx-sm-3" aria-describedby="sksHelp" placeholder="Masukkan Sks" min="0" max="16" value="{{ session('sks') ?? old('sks') }}">
            <small id="sksHelp" class="text-muted">
              Sks Mata Kuliah
              @error('sks')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </small>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Tambahkan Mata Kuliah Baru</button>
          </div>
    </form>
</x-template>