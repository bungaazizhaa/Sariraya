<?php

namespace App\Http\Controllers;

use App\Models\Admindashboard;

use Illuminate\Http\Request;

class AdmindashboardController extends Controller
{
    public function __construct()
    {
        $this->Admindashboard = new Admindashboard();
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('admin-dashboard');
    }
}
