<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KamarController extends Controller
{
    public function index()
    {
        $item = ['data_kamar' => DB::table('kamar')->where('status', '1')->orderBy('id_kamar','desc')->get()];
        $data = [
            'content' => view('backend.v_kamar', $item),
            'title' => 'Dashboard'
        ];
        return view('backend.main', $data);
    }
    public function add()
    {
        $kamar = [
            'content' => view('backend.v_formkamar'),
            'title' => 'Dashboard'
        ];
        return view('backend.main', $kamar)->with('success','Data berhasil di simpan');
    }
    public function proses(Request $request)
    {
        $abc = $request->file('gambar');
        $extension = $abc->getClientOriginalExtension();
        $filename = date('Y-m-dH-i-s').uniqid().'.'.$extension;
        $abc->move(public_path() . '/assets/img/', $filename);
        
        $data = [
            'tipe' => $request->input('TxtKamar'),
            'gambar' => $filename,
            'status' => $request->input('TxtStatus'),
            'created_at' => date('Y-m-d h:i:s'),
            'created_by' => 1,
            'updated_at' => date('Y-m-d h:i:s'),
            'updated_by' => 1,
            'status'=>1
        ];
        if ($request->input('id_kamar') == '') {
            $last_id = DB::table('kamar')->insertGetId($data);
        }else{
            DB::table('kamar')->where('id_kamar', $request->input('id_kamar'))->update($data);
        }
    }
    public function edit($request){
        $item = [
            'edit_kamar' => DB::table('kamar')->where('id_kamar', $request)->first()
        ];
        $kamar = [
            'content' => view('backend.v_editkamar', $item),
            'title' => 'Dashboard'
        ];
        return view('backend.main', $kamar)->with('success','Data berhasil diedit.');
    }   
    public function hapus($id){
        DB::table('kamar')->where('id_kamar',$id)->delete();
        return redirect('/backend/kamar');
    }
}
