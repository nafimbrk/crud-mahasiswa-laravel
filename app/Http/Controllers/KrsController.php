<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaModel;
use App\Models\KrsModel;
use App\Models\MataKuliahModel;
use PhpParser\Node\Expr\Cast\String_;

class KrsController extends Controller
{
    public function index(String $id = "")
    {
        $data['mahasiswa'] = MahasiswaModel::get();
        if (isset($id)) {
            if (is_numeric($id)) {
                $data['mahasiswa1'] = MahasiswaModel::where('nim', $id)->firstOr(function () {});
                if ($data['mahasiswa1']) {
                    // $data['krs_mhs'] = KrsModel::where('mahasiswa_fk', $id)->get();
                    $data['krs_mhs'] = KrsModel::with('matakuliah')
                        ->where('mahasiswa_fk', $id)
                        ->get();

                    session()->flash('nim', $id);
                }
            }
        }
        return view('krs.index', $data);
    }

    public function selectedMhs(Request $request)
    {
        $nim = "";
        if (is_numeric($request->input('nim'))) {
            $nim = $request->input('nim');
        }
        return redirect(url('krs/' . $nim));
    }

    public function create(String $id)
    {
        $data['mahasiswa1'] = MahasiswaModel::where('nim', $id)->firstOr(function () {});
        if ($data['mahasiswa1']) {
            $mk = [];
            foreach ($$data['mahasiswa1']->krs as $i) {
                $mk[] = $i['matakuliah_fk'];
            }
            $data['mk1'] = $mk;
            $data['matakuliah'] = MataKuliahModel::whereNotIn('kode', $mk)->get();
            $data['krs_mhs'] = KrsModel::where('mahasiswa_fk',);
        }
    }
}
