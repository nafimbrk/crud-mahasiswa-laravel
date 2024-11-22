<?php
namespace App\Http\Controllers;

use App\Models\MataKuliahModel;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data['matakuliah'] = MataKuliahModel::get();
        return view('matakuliah.index', $data);
    }

    public function create()
    {
        return view('matakuliah.tambah');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => ['required', 'unique:App\Models\MataKuliahModel,kode', 'regex:/^[A-z.0-9]+$/'],
            'nama' => ['required', 'max:50', 'min:3', 'regex:/^[A-z `]+$/'],
            'sks' => 'numeric|min:0|max:16|nullable'
        ]);

        $data = [
            'kode' => $request->input('kode'),
            'nama' => $request->input('nama'),
            'sks' => $request->input('sks')
        ];

        MataKuliahModel::create($data);
        foreach ($data as $key => $item) {
            session()->flash($key, $item);
        }
        return redirect(url('/matakuliah/tambah'))->with('pesan', 'mata kuliah baru berhasil ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $matakuliah = MataKuliahModel::where('kode', $id)->firstOr(function () {});

        if (empty($matakuliah)) {
            return redirect('/matakuliah');
        } else {
            return view('matakuliah.ubah', ['matakuliah' => $matakuliah]);
        }
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode' => ['required', 'regex:/^[A-z.0-9]+$/'],
            'nama' => ['required', 'max:50', 'min:3', 'regex:/^[A-z `]+$/'],
            'sks' => 'numeric|min:0|max:16|nullable'
        ]);

        $matakuliah = MataKuliahModel::where('kode', $id)->firstOr(function () {});
        if (empty($matakuliah)) {
            return redirect('/matakuliah');
        } else {
            $matakuliah->kode = $request->input('kode');
            $matakuliah->nama = $request->input('nama');
            $matakuliah->sks = $request->input('sks');
            $matakuliah->save();

            return redirect(url('/matakuliah'))->with('pesan', 'Data matakuliah berhasil diupdate');
        }
    }

    public function hapus(string $id)
    {
        $matakuliah = matakuliahModel::where('kode', $id)->firstOr(function () {});
        if (empty($matakuliah)) {
            return redirect('/matakuliah');
        } else {
            return view('matakuliah.hapus', ['matakuliah' => $matakuliah]);
        }
    }

    public function destroy(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode' => 'required'
        ]);

        $matakuliah = MataKuliahModel::where('kode', $id)->firstOr(function () {});
        if (!empty($matakuliah)) {
            $matakuliah->delete();
            return redirect('/matakuliah')->with('pesan', 'Data matakuliah berhasil dihapus');
        } else {
            return redirect('/matakuliah')->with('gagal', 'Terjadi kesalahan saat menghapus data');
        }
    }
}
