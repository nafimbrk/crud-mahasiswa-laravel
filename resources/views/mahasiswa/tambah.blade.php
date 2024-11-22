<x-template judul="Tambah Mahasiswa Informatika">
    <h1 class="mt-3 bg-primary text-center text-white">Tambah Mahasiswa Baru</h1>
    @if (session('pesan'))
    <div class="bg-success text-white text-center weight-bold">
      {{ session('pesan') }}
    </div>
    @endif
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="nim">Nim : </label>
            <input type="number" id="nim" name="nim" class="form-control mx-sm-3" aria-describedby="nimHelp" placeholder="Masukkan Nim" required min="111111" max="999999999" value="{{ session('nim') ?? old('nim') }}">
            <small id="nimHelp" class="text-muted">
              Nim Mahasiswa
              @error('nim')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </small>
          </div>
        <div class="form-group">
            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama" class="form-control mx-sm-3" aria-describedby="namaHelp" placeholder="Masukkan Nama" required minlength="3" maxlength="50" value="{{ session('nama') ?? old('nama') }}">
            <small id="namaHelp" class="text-zmuted">
              Nama Mahasiswa
              @error('nama')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </small>
          </div>
        <div class="form-group">
            <label for="semester">Semester : </label>
            <input type="number" id="semester" name="semester" class="form-control mx-sm-3" aria-describedby="semesterHelp" placeholder="Masukkan Semester" min="0" max="16" value="{{ session('semester') ?? old('semester') }}">
            <small id="semesterHelp" class="text-muted">
              Semester Mahasiswa
              @error('semester')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </small>
          </div>
        <div class="form-group">
            <label for="ipk">Ipk : </label>
            <input type="number" id="ipk" name="ipk" class="form-control mx-sm-3" aria-describedby="ipkHelp" placeholder="Masukkan Ipk" min="0" max="4" value="{{ session('ipk') ?? old('ipk') }}">
            <small id="ipkHelp" class="text-muted">
              Ipk Mahasiswa
              @error('ipk')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </small>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Tambahkan Mahasiswa Baru</button>
          </div>
    </form>
</x-template>