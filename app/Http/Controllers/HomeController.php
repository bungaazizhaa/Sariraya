<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->HomeModel = new HomeModel();
    }

    public function index()
    {
        $data = [
            'home' => $this->HomeModel->allData()
        ];
        return view('landing', $data);
    }
}
