<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;

use App\Models\ProfilModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminProfilController extends Controller
{
    public function __construct()
    {
        $this->ProfilModel = new ProfilModel();
        $this->middleware('auth');
    }

    public function index()
    {

        $data = [
            'profil' => $this->ProfilModel->allData()
        ];
        return view('admin.profil.admin-profil', $data);
    }
    public function edit($id_profil)
    {
        if (!$this->ProfilModel->detailData($id_profil)) {
            abort(404);
        }

        $data = [
            'profil' => $this->ProfilModel->detailData($id_profil),
        ];
        return view('admin.profil.admin-editprofil', $data);
    }
    public function update($id_profil)
    {
        Request()->validate([
            'nama_profil' => 'required',
            'judul_profil' => 'required',
            'isi_profil' => 'required',
        ], [
            'nama_profil.required' => 'Nama wajib diisi.',
            'judul_profil.required' => 'Judul wajib diisi.',
            'isi_profil.required' => 'Isi wajib diisi.',
        ]);

        $data = [
            'id_profil' => Request()->id_profil,
            'nama_profil' => Request()->nama_profil,
            'judul_profil' => Request()->judul_profil,
            'isi_profil' => Request()->isi_profil
        ];

        $this->ProfilModel->editData($id_profil, $data);
        return redirect()->route('profil')->with('pesan', 'Data berhasil di Ubah.');
    }
}
