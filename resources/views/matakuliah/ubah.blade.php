<x-template judul="Ubah Mata Kuliah Informatika">
    <h1 class="mt-3 bg-primary text-center text-white">Tambah Mata Kuliah Baru</h1>
    @if (session('pesan'))
    <div class="bg-success text-white text-center weight-bold">
      {{ session('pesan') }}
    </div>
    @endif
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="kode">Kode : </label>
            <input type="text" id="kode" name="kode" class="form-control mx-sm-3" aria-describedby="kodeHelp" placeholder="Masukkan Kode" required min="111111" max="999999999" value="{{ $matakuliah['kode'] ?? old('kode') }}" disabled>
            <small id="kodeHelp" class="text-muted">
              Kode Mata Kuliah
              @error('kode')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </small>
          </div>
        <div class="form-group">
            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama" class="form-control mx-sm-3" aria-describedby="namaHelp" placeholder="Masukkan Nama" required minlength="3" maxlength="50" value="{{ $matakuliah['nama'] ?? old('nama') }}" autofocus>
            <small id="namaHelp" class="text-zmuted">
              Nama Mata Kuliah
              <?php $allowed = "<br>Nama hanya boleh mengandung alphabet"; ?>
              @error('nama')
                  <p class="text-danger">{{ $message }}<?= $allowed ?></p>
              @enderror
            </small>
          </div>
        <div class="form-group">
            <label for="sks">Sks : </label>
            <input type="number" id="sks" name="sks" class="form-control mx-sm-3" aria-describedby="sksHelp" placeholder="Masukkan Sks" min="0" max="16" value="{{ $matakuliah['sks'] ?? old('sks') }}">
            <small id="sksHelp" class="text-muted">
              Sks Mata Kuliah
              @error('sks')
              <p class="text-danger">{{ $message }}</p>
          @enderror
            </small>
          </div>
          <div class="form-group">
            <input type="hidden" name="kode" value="{{ $matakuliah['kode'] ?? old('kode') }}">
            <button type="submit" class="btn btn-primary">Ubah Data Mata Kuliah</button>
          </div>
    </form>
</x-template>