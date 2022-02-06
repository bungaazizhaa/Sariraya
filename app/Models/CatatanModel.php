<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CatatanModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_catatan')->orderByDesc('date_created')->get();
    }

    public function detailData($id_catatan)
    {
        return DB::table('tbl_catatan')->where('id_catatan', $id_catatan)->first();
    }

    public function addData($data)
    {
        return DB::table('tbl_catatan')->insert($data);
    }

    public function editData($id_catatan, $data)
    {
        return DB::table('tbl_catatan')->where('id_catatan', $id_catatan)->update($data);
    }

    public function deleteData($id_catatan)
    {
        return DB::table('tbl_catatan')->where('id_catatan', $id_catatan)->delete();
    }
}
