<x-template judul="Mata Kuliah Informatika">
      <div class="text-end mt-4 mb-4">
        <a href="{{ url('matakuliah/tambah') }}">
          <button class="btn btn-primary">Tambah Mata Kuliah</button>
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
      <th class="text-center">Kode</th>
      <th class="text-center">Nama</th>
      <th class="text-center">Sks</th>
      <th class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($matakuliah as $mk)
      <tr>
      <td class="text-center">{{ $mk['kode'] }}</td>
      <td class="text-center">{{ $mk['nama'] }}</td>
      <td class="text-center">{{ $mk['sks'] }}</td>
      <td class="text-center">
        <a href="{{ asset('matakuliah/update/'.$mk['kode']) }}">
          <button class="btn btn-success">Update</button>
        </a>
        <a href="{{ asset('matakuliah/hapus/'.$mk['kode']) }}">
          <button class="btn btn-danger">Delete</button>
        </a>
      </td>
      </tr>
      @endforeach
    </tbody>
      </table>
  </x-template>