<x-template judul="Hapus Mahasiswa Informatika">
    <h1 class="mt-3 bg-primary text-center text-white">Hapus Mahasiswa</h1>
    @if (session('pesan'))
    <div class="bg-danger text-white text-center weight-bold">
      {{ session('pesan') }}
    </div>
    @endif
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="nim">Nim : </label>
            <input type="number" id="nim" name="nim" class="form-control mx-sm-3" aria-describedby="nimHelp" placeholder="Masukkan Nim" required min="111111" max="999999999" value="{{ $mahasiswa['nim'] ?? "" }}" disabled>
            <small id="nimHelp" class="text-muted">
              Nim Mahasiswa
              
            </small>
          </div>
        <div class="form-group">
            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama" class="form-control mx-sm-3" aria-describedby="namaHelp" placeholder="Masukkan Nama" required minlength="3" maxlength="50" value="{{ $mahasiswa['nama'] ?? "" }}" disabled>
            <small id="namaHelp" class="text-zmuted">
              Nama Mahasiswa
              
            </small>
          </div>
        <div class="form-group">
            <label for="semester">Semester : </label>
            <input type="number" id="semester" name="semester" class="form-control mx-sm-3" aria-describedby="semesterHelp" placeholder="Masukkan Semester" min="0" max="16" value="{{ $mahasiswa['semester'] ?? "" }}" disabled>
            <small id="semesterHelp" class="text-muted">
              Semester Mahasiswa
              
            </small>
          </div>
        <div class="form-group">
            <label for="ipk">Ipk : </label>
            <input type="number" id="ipk" name="ipk" class="form-control mx-sm-3" aria-describedby="ipkHelp" placeholder="Masukkan Ipk" min="0" max="4" value="{{ $mahasiswa['ipk'] ?? "" }}" disabled>
            <small id="ipkHelp" class="text-muted">
              Ipk Mahasiswa
              
            </small>
          </div>
          <div class="form-group">
            <input type="hidden" name="nim" value="{{ $mahasiswa['nim'] ?? "" }}">
            <button type="submit" class="btn btn-primary">Hapus Data Mahasiswa</button>
          </div>
    </form>
</x-template>