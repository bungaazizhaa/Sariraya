<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\NewsModel;

use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    public function __construct()
    {
        $this->NewsModel = new NewsModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'news' => $this->NewsModel->allData()
        ];
        return view('admin.news.admin-news', $data);
    }


    public function add()
    {
        $data = [
            // 'merk' => $this->HardwareModel->allMerk(),
            // 'kategori' => $this->HardwareModel->allKategori(),
            // 'kondisi' => $this->HardwareModel->allKondisi(),
            // 'lokasi' => $this->HardwareModel->allLokasi(),
            // 'departemen' => $this->HardwareModel->allDepartemen(),
            // 'staff' => $this->HardwareModel->allstaff()
        ];
        return view('admin.news.admin-addnews', $data);
    }

    public function insert()
    {
        Request()->validate([
            'judul_news' => 'required',
            'tanggal_news' => 'required',
            'tempat_news' => 'required',
            'isi_news' => 'required',
        ], [
            'judul_news.required' => 'Judul wajib diisi',
            'tanggal_news.required' => 'Tanggal wajib diisi',
            'tempat_news.required' => 'Tempat Hardware wajib diisi',
            'isi_news.required' => 'Isi Berita wajib diisi',
        ]);

        $data = [
            'judul_news' => Request()->judul_news,
            'slug' => Request()->slug,
            'tanggal_news' => Request()->tanggal_news,
            'tempat_news' => Request()->tempat_news,
            'gambar_news' => Request()->gambar_news,
            'isi_news' => Request()->isi_news,
        ];

        $this->NewsModel->addData($data);
        return redirect()->route('news')->with('pesan', 'Data berhasil ditambahkan.');
    }
}
