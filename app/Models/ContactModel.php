<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ContactModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_contact')->get();
    }

    public function detailData($id_contact)
    {
        return DB::table('tbl_contact')->where('id_contact', $id_contact)->first();
    }

    public function addData($data)
    {
        return DB::table('tbl_contact')->insert($data);
    }

    public function editData($id_contact, $data)
    {
        return DB::table('tbl_contact')->where('id_contact', $id_contact)->update($data);
    }

    public function deleteData($id_contact)
    {
        return DB::table('tbl_contact')->where('id_contact', $id_contact)->delete();
    }
}
