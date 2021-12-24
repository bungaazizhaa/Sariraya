<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;

use Illuminate\Http\Request;

class NewsController extends Controller
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

    public function news()
    {
        $data = [
            'news' => $this->NewsModel->allData()
        ];
        return view('news', $data);
    }
}
