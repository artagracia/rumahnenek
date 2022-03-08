<?php

namespace App\Http\Controllers\frontend;

use App\Models\member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservasiController extends Controller
{
    public function index() {
        $item = ['data_member' => DB::table('reservasi')->where('status', '1')->orderBy('id_reservasi','asc')->get()];
        $data = [
            'content' => view('reservasi.index', $item),
            'title' => 'Dashboard'
        ];
        return view('reservasi.index', $data);
    }

    public function proses(Request $request) {

        // $email = $request->all();
        // // dd($email);
        // // ->find('nama_lengkap')->find('')
        // // $datacustomer = DB::table('customer');
        // // $request->email->findone() from DB::table('customer');
        // // If(
        // //     ambil id
        // //     $request->checkout, jfsdjsd
        // //     DB::table('reservasi')->create[
        // //         id_customer -> 
        // //     ]
        $member = member::create([
            $request->nama_lengkap,
            $request->email,
            $request->no_hp,
        ]);

        $reservasi = reservasi::create([
            'checkin' => $checkin->date('Y-m-d h:i:s'),
            'checkout' => $checkout->date('Y-m-d h:i:s'),
            'adult' => $adult,
            'child'=> $child,
            'cabin' => $cabin,
            'id_kamar' => $id_kamar,
            'id_customer' => $id_customer,
            'tambahan' => $tambahan,
            'created_at' => $created_at->date('Y-m-d h:i:s'),
            'created_by' => $created_by->date('Y-m-d h:i:s'),
            'status' => $status,
        ]);
        return redirect('reservasi.index')->with ('success','Berhasil Booking!');
    }
}