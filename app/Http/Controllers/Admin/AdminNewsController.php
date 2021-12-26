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
}
