<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;

use App\Models\ContactModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminContactController extends Controller
{
    public function __construct()
    {
        $this->ContactModel = new ContactModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'contact' => $this->ContactModel->allData()
        ];
        return view('admin.contact.admin-contact', $data);
    }


    public function add()
    {
    }

    public function insert()
    {
        Request()->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $data = [
            'name' => Request()->name,
            'email' => Request()->email,
            'company' => Request()->company,
            'state' => Request()->state,
            'telephone' => Request()->telephone,
            'message' => Request()->message,
        ];

        $this->ContactModel->addData($data);
        return redirect()->route('contact')->with('pesan', 'Please wait for an email reply from us for 2x24 hours. :)');
    }


    public function delete($id_contact)
    {
        $path = 'gambar_news/';
        $users = DB::table('tbl_contact')
            ->where('id_contact', '=', $id_contact)
            ->first();
        $userInfo =  $users->gambar_news;
        if ($userInfo != '') {
            unlink($path . $userInfo);
        }
        $this->ContactModel->deleteData($id_contact);
        return redirect()->route('news')->with('pesan', 'Data berhasil dihapus.');
    }
}
