<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HomeModel extends Model
{
    use HasFactory;
    public function allData()
    {
        return DB::table('tbl_news')->latest('tanggal_news')->take(5)->get();
    }
}
