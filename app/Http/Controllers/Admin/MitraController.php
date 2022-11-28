<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MitraController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (Auth::user()->role == '1') {
            return view('/admin/mitra/index', $this->data);
        } else {
            return view('/pengunjung/tampilanpengunjung');
        }
    }
}
