<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MitraController implements ControllerInt
{


    public function index()
    {
        $data = Mitra::orderBy('name', 'ASC')->paginate(10);
        $this->data['data'] = $data;
        return view('admin.mitra.index', $this->data);
    }
}
