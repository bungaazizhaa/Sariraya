<?php

namespace App\Http\Controllers;

use App\Models\DashboardModel;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->DashboardModel = new DashboardModel();
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.admin-dashboard');
    }
}
