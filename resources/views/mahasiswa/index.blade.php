<x-template judul="Mahasiswa Informatika">
      <div class="text-end mt-4 mb-4">
        <a href="{{ url('mahasiswa/tambah') }}">
          <button class="btn btn-primary">Tambah Mahasiswa</button>
        </a>
      </div>
      @if (session('pesan'))
          <h3 class="mt-2 bg-success text-white text-center">
            {{ session('pesan') }}
          </h3>
      @endif
      @if (session('gagal'))
          <h3 class="mt-2 bg-danger text-white text-center">
            {{ session('gagal') }}
          </h3>
      @endif
      <table class="table table-bordered border-dark">
      <thead class="table-dark">
    <tr>
      <th class="text-center">Nim</th>
      <th class="text-center">Nama</th>
      <th class="text-center">Semester</th>
      <th class="text-center">Ipk</th>
      <th class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($mahasiswa as $mhs)
      <tr>
      <td class="text-center">{{ $mhs['nim'] }}</td>
      <td class="text-center">{{ $mhs['nama'] }}</td>
      <td class="text-center">{{ $mhs['semester'] }}</td>
      <td class="text-center">{{ $mhs['ipk'] }}</td>
      <td class="text-center">
        <a href="{{ asset('mahasiswa/update/'.$mhs['nim']) }}">
          <button class="btn btn-success">Update</button>
        </a>
        <a href="{{ asset('mahasiswa/hapus/'.$mhs['nim']) }}">
          <button class="btn btn-danger">Delete</button>
        </a>
      </td>
      </tr>
      @endforeach
    </tbody>
      </table>
  </x-template>