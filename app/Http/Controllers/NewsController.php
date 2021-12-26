<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->NewsModel = new NewsModel();
    }

    public function detail($id_news)
    {
        $data = [
            'news' => $this->NewsModel->detailData($id_news)
        ];
        return view('detail-news', $data);
    }

    public function index()
    {
        $data = [
            'news' => $this->NewsModel->allData()
        ];
        return view('news', $data);
    }
}
