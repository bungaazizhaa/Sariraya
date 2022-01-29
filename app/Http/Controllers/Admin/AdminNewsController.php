<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;

use App\Models\NewsModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
        return view('admin.news.admin-addnews');
    }

    public function insert()
    {
        Request()->validate([
            'judul_news' => 'required',
            'tanggal_news' => 'required',
            'tempat_news' => 'required',
            'isi_news' => 'required',
            'gambar_news' => 'required|mimes:jpg,jpeg,png|max:2048',
        ], [
            'judul_news.required' => 'Judul wajib diisi.',
            'tanggal_news.required' => 'Tanggal wajib diisi.',
            'tempat_news.required' => 'Tempat news wajib diisi.',
            'isi_news.required' => 'Isi Berita wajib diisi.',
            'gambar_news.required' => 'Gambar Berita wajib diisi.',
            'gambar_news.mimes' => 'Gambar harus berformat JPG, JPEG, atau PNG.',
            'gambar_news.max' => 'Ukuran File Maksimal adalah 2MB.',
        ]);

        $file = Request()->gambar_news;
        $fileName = 'imgNews-' . time() . '.' . $file->extension();
        $file->move(public_path('gambar_news'), $fileName);

        $data = [
            'id_news' => Request()->id_news,
            'judul_news' => Request()->judul_news,
            'slug' => Request()->slug,
            'tanggal_news' => Request()->tanggal_news,
            'tempat_news' => Request()->tempat_news,
            'gambar_news' =>  $fileName,
            'isi_news' => Request()->isi_news,
        ];

        $this->NewsModel->addData($data);
        return redirect()->route('news')->with('pesan', 'Data berhasil ditambahkan.');
    }

    public function edit($id_news)
    {
        if (!$this->NewsModel->detailData($id_news)) {
            abort(404);
        }

        $data = [
            'news' => $this->NewsModel->detailData($id_news),
        ];
        return view('admin.news.admin-editnews', $data);
    }
    public function update($id_news)
    {
        Request()->validate([
            'judul_news' => 'required',
            'tanggal_news' => 'required',
            'tempat_news' => 'required',
            'isi_news' => 'required',
            'gambar_news' => 'mimes:jpg,jpeg,png|max:2048',
        ], [
            'judul_news.required' => 'Judul wajib diisi.',
            'tanggal_news.required' => 'Tanggal wajib diisi.',
            'tempat_news.required' => 'Tempat news wajib diisi.',
            'isi_news.required' => 'Isi Berita wajib diisi.',
            'gambar_news.required' => 'Gambar Berita wajib diisi.',
            'gambar_news.mimes' => 'Gambar harus berformat JPG, JPEG, atau PNG.',
            'gambar_news.max' => 'Ukuran File Maksimal adalah 2MB.',
        ]);


        if (request()->gambar_news <> "") {
            $file = Request()->gambar_news;
            $fileName = Request()->id_news . '.' . $file->extension();
            $file->move(public_path('gambar_news'), $fileName);

            $data = [
                'id_news' => Request()->id_news,
                'judul_news' => Request()->judul_news,
                'slug' => Request()->slug,
                'tanggal_news' => Request()->tanggal_news,
                'tempat_news' => Request()->tempat_news,
                'gambar_news' =>  $fileName,
                'isi_news' => Request()->isi_news,
            ];
        } else {
            $data = [
                'judul_news' => Request()->judul_news,
                'slug' => Request()->slug,
                'tanggal_news' => Request()->tanggal_news,
                'tempat_news' => Request()->tempat_news,
                'isi_news' => Request()->isi_news,
            ];
        }

        $this->NewsModel->editData($id_news, $data);
        return redirect()->route('news')->with('pesan', 'Data berhasil di Ubah.');
    }

    public function delete($id_news)
    {
        $this->NewsModel->deleteData($id_news);
        return redirect()->route('news')->with('pesan', 'Data berhasil dihapus.');
    }
}
