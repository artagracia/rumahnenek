<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
    {
        $data = [
            'content' => view('backend.v_home'),
            'title' => 'Dashboard'
        ];
        return view('backend.main', $data);
    }
}
