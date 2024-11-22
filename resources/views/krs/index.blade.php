<x-template judul="krs mahasiswa">
    <h1 class="tect-center mt-2 text-center">Krs Mahasiswa</h1>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="nim">Pilih Mahasiswa</label>
            <select name="nim" id="nim" class="form-control">
                @foreach ($mahasiswa as $item)
                    <?php $selected = ''; ?>
                    @if (session('nim') == $item['nim'])
                        <?php $selected = 'selected'; ?>
                    @endif
                    <option value="{{ $item['nim'] }}" {{ $selected }}>
                        {{ $item['nim'] . '-' . $item['nama'] }}
                    </option>
                @endforeach
            </select>
            <small id="nimHelp" class="form-text text-muted">
                Pilih mahasiswa yang ingin ditampilkan KRS-nya
                @error('nim')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </small>
        </div>
        <button type="submit" class="btn btn-primary">Tampilkan KRS Mahasiswa</button>
    </form>
    @if (session('nim'))
        <h3 class="mt-2 text-center text-white bg-primary">KRS<br>{{ $mahasiswa1['nim'] }}-{{ $mahasiswa1['nama'] }}
        </h3>
        <div class="mt-2 text-end">
            <a href="#">
                <button class="btn btn-primary">Tambah Mata Kuliah</button>
            </a>
        </div>
        <div class="mt-2 text-center">
            @if (empty($mahasiswa1->krs))
                <p>--Belum Ada KRS--</p>
            @else
                <table class="table table-succes table-striped">
                    <thead>
                        <tr>
                            <th>Kode MK</th>
                            <th>Nama MK</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($krs_mhs as $item)
                            <tr>
                                {{-- <td>{{ $item['kode_mk'] }}</td>
                            <td>{{ $item['nama_mk'] }}</td> --}}
                                <td>{{ $item->matakuliah->kode }}</td>
                                <td>{{ $item->matakuliah->nama }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    @endif
</x-template>
