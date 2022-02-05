<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->HomeModel = new HomeModel();
    }

    public function index()
    {
        $getLinkCatalog = DB::table('tbl_profil')->where('nama_profil', '=', 'link_catalog')->first();
        $data = [
            'home' => $this->HomeModel->allData()
        ];
        return view('landing', $data)->with(compact('getLinkCatalog'));
    }
}
