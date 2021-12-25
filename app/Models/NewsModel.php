<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NewsModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_news')->orderByDesc('tanggal_news')->get();
    }

    public function detailData($id_news)
    {
        return DB::table('tbl_news')->where('id_news', $id_news)->first();
    }

    public function addData($data)
    {
        return DB::table('tbl_news')->insert($data);
    }

    public function editData($id_news, $data)
    {
        return DB::table('tbl_news')->where('id_news', $id_news)->update($data);
    }

    public function deleteData($id_news)
    {
        return DB::table('tbl_news')->where('id_news', $id_news)->delete();
    }
}
