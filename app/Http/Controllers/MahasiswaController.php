<?php

// namespace App\Http\Controllers;

// use App\Models\MahasiswaModel;
// use Illuminate\Http\Request;

// class MahasiswaController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $data['mahasiswa'] =  MahasiswaModel::get();
//         return view('mahasiswa.index', $data);
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         return view('mahasiswa.tambah');
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         $validated = $request->validate([
//             // 'nim' => ['required', 'unique:App\Models\MahasiswaModel,nim', 'max_digits:10', 'min_digits:10', 'numeric'],
//             'nim' => ['required', 'unique:App\Models\MahasiswaModel,nim', 'numeric'],
//             'nama' => ['required', 'max:50', 'min:3', 'regex:/^[A-z. \'`]+$/'],
//             'semester' => 'numeric|min:0|max:16|nullable',
//             'ipk' => 'numeric|min:0|max:16|decimal:0,2|nullable'
//         ]);

//         // $data["mahasiswa"] = [
//         $data = [
//             // 'nim' => $request->nim,
//             // 'nama' => $request->nama,
//             // 'semester' => $request->semester,
//             // 'ipk' => $request->ipk
//             'nim' => $request->input('nim'),
//             'nama' => $request->input('nama'),
//             'semester' => $request->input('semester'),
//             'ipk' => $request->input('ipk')
//         ];
//         MahasiswaModel::insert($data);
//         // session($data);
//         foreach($data as $key => $item) {
//             session()->flash($key, $item);
//         }
//         return redirect(url('/mahasiswa/tambah'))->with('pesan', 'mahasiswa baru berhasil ditambahkan');
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(string $id)
//     {
//         $data['mahasiswa'] = MahasiswaModel::where('nim', $id)->firstOr(function(){});

//         if(empty($data['mahasiswa'])) {
//             return redirect('/mahasiswa');
//         } else {
//             return view('mahasiswa.ubah', $data);
//         }
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request)
//     {
//         $validated = $request->validate([
//             // 'nim' => ['required', 'max:999999999', 'min:11111111', 'max_digits:10', 'min_digits:10', 'numeric'],
//             'nim' => ['required', 'numeric'],
//             'nama' => ['required', 'max:50', 'min:3', 'regex:/^[A-z\']+$/'],
//             'semester' => 'numeric|min:0|max:16|nullable',
//             'ipk' => 'numeric|min:0|max:16|decimal:0,2|nullable'
//         ]);

//         $input = [
//             'nim' => $request->input('nim'),
//             'nama' => $request->input('nama'),
//             'semester' => $request->input('semester'),
//             'ipk' => $request->input('ipk')
//         ];

//         $data['mahasiswa'] = MahasiswaModel::where('nim', $input['nim'])->firstOr(function(){});
//         if(empty($data['mahasiswa'])) {
//             return redirect('/mahasiswa');
//         } else {
//             $data['mahasiswa']->nama=$request->input('nama');
//             $data['mahasiswa']->semester=$request->input('semester');
//             $data['mahasiswa']->ipk=$request->input('ipk');
//             $data['mahasiswa']->save();
//             return redirect(url('/mahasiswa/update/'.$input['nim']))->with('pesan', 'data mahasiswa berhasil diupdate');
//         }

//     }





//     public function hapus(string $id) {
//         $data['mahasiswa'] = MahasiswaModel::where('nim', $id)->firstOr(function(){});
//         if(empty($data['mahasiswa'])) {
//             return redirect('/mahasiswa');
//         } else {
//             return view('mahasiswa.hapus', $data);
//         }
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(Request $request)
//     {
//         if($request->input('nim')) {
//             $data['mahasiswa'] = MahasiswaModel::where('nim', $request->input('nim'))->firstOr(function(){});
//             if(!empty($data['mahasiswa'])) {
//                 $data['mahasiswa']->delete();
//                 return redirect('/mahasiswa')->with('pesan', 'data mahasiswa berhasil dihapus');
//             } else {
//                 echo "mahasiswa not found";
//                 return redirect('/mahasiswa')->with('gagal', 'terjadi kesalahan saat menghapus data');
//             }
//         } else {
//             return redirect('/mahasiswa');
//         }
//     }
// }

















// namespace App\Http\Controllers;

// use App\Models\MahasiswaModel;
// use Illuminate\Http\Request;

// class MahasiswaController extends Controller
// {
//     public function index()
//     {
//         $data['mahasiswa'] = MahasiswaModel::get();
//         return view('mahasiswa.index', $data);
//     }

//     public function create()
//     {
//         return view('mahasiswa.tambah');
//     }

//     public function store(Request $request)
//     {
//         $validated = $request->validate([
//             'nim' => ['required', 'unique:App\Models\MahasiswaModel,nim', 'numeric'],
//             'nama' => ['required', 'max:50', 'min:3', 'regex:/^[A-z .\']+$/'],
//             'semester' => 'numeric|min:0|max:16|nullable',
//             'ipk' => 'numeric|min:0|max:4.00|nullable'
//         ]);

//         $data = [
//             'nim' => $request->input('nim'),
//             'nama' => $request->input('nama'),
//             'semester' => $request->input('semester'),
//             'ipk' => $request->input('ipk')
//         ];

//         MahasiswaModel::create($data);
//         foreach ($data as $key => $item) {
//             session()->flash($key, $item);
//         }
//         return redirect(url('/mahasiswa/tambah'))->with('pesan', 'Mahasiswa baru berhasil ditambahkan');
//     }

//     public function show(string $id)
//     {
//         //
//     }

//     public function edit(string $id)
//     {
//         $mahasiswa = MahasiswaModel::where('nim', $id)->first();

//         if (empty($mahasiswa)) {
//             return redirect('/mahasiswa');
//         } else {
//             return view('mahasiswa.ubah', ['mahasiswa' => $mahasiswa]);
//         }
//     }

//     public function update(Request $request, string $id)
//     {
//         $validated = $request->validate([
//             'nim' => ['required', 'numeric'],
//             'nama' => ['required', 'max:50', 'min:3', 'regex:/^[A-z .\']+$/'],
//             'semester' => 'numeric|min:0|max:16|nullable',
//             'ipk' => 'numeric|min:0|max:4.00|nullable'
//         ]);

//         $mahasiswa = MahasiswaModel::where('nim', $id)->first();
//         if (empty($mahasiswa)) {
//             return redirect('/mahasiswa');
//         } else {
//             $mahasiswa->nama = $request->input('nama');
//             $mahasiswa->semester = $request->input('semester');
//             $mahasiswa->ipk = $request->input('ipk');
//             $mahasiswa->save();

//             return redirect(url('/mahasiswa'))->with('pesan', 'Data mahasiswa berhasil diupdate');
//         }
//     }

//     public function hapus(string $id)
//     {
//         $mahasiswa = MahasiswaModel::where('nim', $id)->first();
//         if (empty($mahasiswa)) {
//             return redirect('/mahasiswa');
//         } else {
//             return view('mahasiswa.hapus', ['mahasiswa' => $mahasiswa]);
//         }
//     }

//     public function destroy(Request $request, string $id)
//     {
//         $validated = $request->validate([
//             'nim' => 'required|numeric'
//         ]);

//         $mahasiswa = MahasiswaModel::where('nim', $id)->first();
//         if (!empty($mahasiswa)) {
//             $mahasiswa->delete();
//             return redirect('/mahasiswa')->with('pesan', 'Data mahasiswa berhasil dihapus');
//         } else {
//             return redirect('/mahasiswa')->with('gagal', 'Terjadi kesalahan saat menghapus data');
//         }
//     }
// }







































namespace App\Http\Controllers;

use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // ... (methods index, create, store, show remain the same)



    public function index()
        {
            $data['mahasiswa'] =  MahasiswaModel::get();
            return view('mahasiswa.index', $data);
        }
    
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            return view('mahasiswa.tambah');
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            $validated = $request->validate([
                // 'nim' => ['required', 'unique:App\Models\MahasiswaModel,nim', 'max_digits:10', 'min_digits:10', 'numeric'],
                'nim' => ['required', 'unique:App\Models\MahasiswaModel,nim', 'numeric'],
                'nama' => ['required', 'max:50', 'min:3', 'regex:/^[A-z. \'`]+$/'],
                'semester' => 'numeric|min:0|max:16|nullable',
                'ipk' => 'numeric|min:0|max:16|decimal:0,2|nullable'
            ]);
    
            // $data["mahasiswa"] = [
            $data = [
                // 'nim' => $request->nim,
                // 'nama' => $request->nama,
                // 'semester' => $request->semester,
                // 'ipk' => $request->ipk
                'nim' => $request->input('nim'),
                'nama' => $request->input('nama'),
                'semester' => $request->input('semester'),
                'ipk' => $request->input('ipk')
            ];
            MahasiswaModel::insert($data);
            // session($data);
            foreach($data as $key => $item) {
                session()->flash($key, $item);
            }
            return redirect(url('/mahasiswa/tambah'))->with('pesan', 'mahasiswa baru berhasil ditambahkan');
        }


    public function edit(string $id)
    {
        $data['mahasiswa'] = MahasiswaModel::where('nim', $id)->firstOr(function () {});

        if (empty($data['mahasiswa'])) {
            return redirect('/mahasiswa');
        } else {
            return view('mahasiswa.ubah', $data);
        }
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'nim' => ['required', 'numeric'],
            'nama' => ['required', 'max:50', 'min:3', 'regex:/^[A-z\' ]+$/'],
            'semester' => 'numeric|min:0|max:16|nullable',
            'ipk' => 'numeric|min:0|max:4|decimal:0,2|nullable'
        ]);

        $input = [
            'nim' => $request->input('nim'),
            'nama' => $request->input('nama'),
            'semester' => $request->input('semester'),
            'ipk' => $request->input('ipk')
        ];

        $data['mahasiswa'] = MahasiswaModel::where('nim', $input['nim'])->firstOr(function () {});

        if (empty($data['mahasiswa'])) {
            return redirect('/mahasiswa');
        } else {
            $data['mahasiswa']->nama = $request->input('nama');
            $data['mahasiswa']->semester = $request->input('semester');
            $data['mahasiswa']->ipk = $request->input('ipk');
            $data['mahasiswa']->save();
            return redirect(url('/mahasiswa/update/' . $input['nim']))->with('pesan', 'Data mahasiswa berhasil diupdate');
        }
    }

    public function hapus(string $id)
    {
        $data['mahasiswa'] = MahasiswaModel::where('nim', $id)->firstOr(function () {});

        if (empty($data['mahasiswa'])) {
            return redirect('/mahasiswa');
        } else {
            return view('mahasiswa.hapus', $data);
        }
    }

    public function destroy(Request $request)
    {
        if ($request->input('nim')) {
            $data['mahasiswa'] = MahasiswaModel::where('nim', $request->input('nim'))->firstOr(function () {});
            if (!empty($data['mahasiswa'])) {
                $data['mahasiswa']->delete();
                return redirect('/mahasiswa')->with('pesan', 'Data mahasiswa berhasil dihapus');
            } else {
                return redirect('/mahasiswa')->with('gagal', 'Terjadi kesalahan saat menghapus data');
            }
        } else {
            return redirect('/mahasiswa');
        }
    }
}
