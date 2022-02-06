<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CatatanModel;
use App\Models\DashboardModel;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->DashboardModel = new DashboardModel();
        $this->CatatanModel = new CatatanModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'catatan' => $this->CatatanModel->allData()
        ];
        return view('admin.admin-dashboard', $data);
    }



    public function add()
    {
        return view('admin.admin-dashboard');
    }

    public function insert()
    {
        Request()->validate([
            'judul_catatan' => 'required',
            'isi_catatan' => 'required'
        ], [
            'judul_catatan.required' => 'Judul wajib diisi.',
            'isi_catatan.required' => 'Isi wajib diisi.'
        ]);

        $data = [
            'id_catatan' => Request()->id_catatan,
            'judul_catatan' => Request()->judul_catatan,
            'isi_catatan' => Request()->isi_catatan
        ];

        $this->CatatanModel->addData($data);
        return redirect()->route('dashboard')->with('pesan', 'Data berhasil ditambahkan.');
    }

    // public function edit($id_catatan)
    // {
    //     if (!$this->CatatanModel->detailData($id_catatan)) {
    //         abort(404);
    //     }

    //     $data = [
    //         'catatan' => $this->CatatanModel->detailData($id_catatan),
    //     ];
    //     return view('admin.catatan.admin-editcatatan', $data);
    // }
    public function update($id_catatan)
    {
        Request()->validate([
            'judul_catatan' => 'required',
            'isi_catatan' => 'required'
        ], [
            'judul_catatan.required' => 'Judul wajib diisi.',
            'isi_catatan.required' => 'Isi wajib diisi.'
        ]);

        $data = [
            'judul_catatan' => Request()->judul_catatan,
            'isi_catatan' => Request()->isi_catatan,
            'date_created' => \Carbon\Carbon::now()
        ];

        $this->CatatanModel->editData($id_catatan, $data);
        return redirect()->route('dashboard')->with('pesan', 'Data berhasil di Ubah.');
    }

    public function delete($id_catatan)
    {
        $this->CatatanModel->deleteData($id_catatan);
        return redirect()->route('dashboard')->with('pesan', 'Data berhasil dihapus.');
    }
}
