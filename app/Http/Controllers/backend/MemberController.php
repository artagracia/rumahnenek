<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
     public function index()
    {
        $item = ['data_member' => DB::table('customer')->where('status', '1')->orderBy('id_customer','desc')->get()];
        $data = [
            'content' => view('backend.v_member', $item),
            'title' => 'Dashboard'
        ];
        return view('backend.main', $data);
    }
    public function add()
    {
        $member = [
            'content' => view('backend.v_formmember'),
            'title' => 'Dashboard'
        ];
        return view('backend.main', $member);
    }
    public function proses(Request $request)
    {
        $data = [
            'nama_lengkap' => $request->input('TxtNama'),
            'email' => $request->input('TxtEmail'),
            'no_hp' => $request->input('TxtNohp'),
            'status' => $request->input('TxtStatus'),
            'created_at' => date('Y-m-d h:i:s'),
            'created_by' => 1,
            'updated_at' => date('Y-m-d h:i:s'),
            'status'=>1
        ];
        if ($request->input('id_customer') == '') {
            $last_id = DB::table('customer')->insertGetId($data);
        }else{
            DB::table('customer')->where('id_customer', $request->input('id_customer'))->update($data);
        }
        
    }
    public function store(Request $request) {
        request()->validate(
            ['TxtNama' => 'required', 'TxtEmail' => 'required', 'TxtNohp' => 'required'],
            ['TxtNama.required' => '<label class="error salah">Nama Harus diisi</label>', 'TxtEmail.required' => '<label class="error salah">Email Harus diisi</label>', 'TxtNohp.required' => '<label class="error salah">No Handphone Harus diisi</label>']
        );

        $id_customer = $request->input('id_customer');
        $data = [
            'nama_lengkap' => $request->input('TxtNama'),
            'email' => $request->input('TxtEmail'),
            'no_hp' => $request->input('TxtNohp'),
            'status_brand' => 1,
        ];

        if ($id_customer == '') {
            $data['created_at'] = date('Y-m-d h:i:s');
            DB::table('customer')-> insert($data);
            $msg = 'Data Berhasil ditambahkan';
        } else {
            $data['updated_at'] = date('Y-m-d h:i:s');
            DB::table('customer')->where('id_customer', $id_customer)->update($data);
            $msg = 'Data Berhasil diupdate';
        }
        echo json_encode(array('success' => true, 'msg' => array(
                'title' => 'Success',
                'type' => 'success',
                'text' => $msg                
        )));
    }
    public function edit($request){
        $item = [
            'edit_member' => DB::table('customer')->where('id_customer', $request)->first()
        ];
        $member = [
            'content' => view('backend.v_editmember', $item),
            'title' => 'Dashboard'
        ];
        return view('backend.main', $member);
    }

    public function hapus($id){
        DB::table('customer')->where('id_customer',$id)->delete();
        return redirect('/backend/member');
    }
}
