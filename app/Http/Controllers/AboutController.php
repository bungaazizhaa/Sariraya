<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->AboutModel = new AboutModel();
    }

    public function index()
    {
        // $data = [
        //     'about' => $this->AboutModel->allData()
        // ];
        // return view('about', $data);
        return view('about');
    }
}
