<?php

namespace App\Http\Controllers;

use App\Models\ProfilModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->ProfilModel = new ProfilModel();
    }

    public function index()
    {
        $getAllProfil = DB::table('tbl_profil')->limit(9)->get();
        // $data = [
        //     'profil' => $this->ProfilModel->allData()
        // ];
        return view('about', compact('getAllProfil'));
    }
}
