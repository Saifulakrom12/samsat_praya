<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangAdminController extends Controller
{
    public function index() {
        $data = Barang::all();
        return view('layouts.config.admin.barang.index', compact('data'));
    }
}
