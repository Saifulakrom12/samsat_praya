<?php

namespace App\Http\Controllers;

use App\Models\Barang; // Ubah dari Benda ke Barang jika model yang dimaksud adalah Barang
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BendaController extends Controller
{
    public function index() {
        // Mengarahkan ke view yang sesuai
        return view('layouts.config.users.barang.index');
    }

    public function create() {
        // Mengarahkan ke view yang sesuai
        return view('layouts.config.users.barang.create');
    }

    public function store(Request $request): RedirectResponse {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'gudang'            => 'required',
            'ruangan'           => 'required',
            'nama_barang'       => 'required',
            'jenis_barang'      => 'required',
            'kode_barang'       => 'required',
            'register'          => 'required',
            'kondisi_barang'    => 'required',
            'lokasi'            => 'required',
            'harga_barang'      => 'required',
            'image'             => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        // Menyimpan gambar
        $image = $request->file('image');
        $filename = date('Y-m-d') . $image->getClientOriginalName();
        $imagePath = 'photo-image/' . $filename;
        Storage::disk('public')->put($imagePath, file_get_contents($image));

        // Membuat QR Code
        $qr = $request->gudang . $request->ruangan . $request->nama_barang;

        // Membuat data barang
        $data = [
            'gudang'            => $request->gudang,
            'ruangan'           => $request->ruangan,
            'nama_barang'       => $request->nama_barang,
            'jenis_barang'      => $request->jenis_barang,
            'kode_barang'       => $request->kode_barang,
            'register'          => $request->register,
            'kondisi_barang'    => $request->kondisi_barang,
            'lokasi'            => $request->lokasi,
            'harga_barang'      => $request->harga_barang,
            'image'             => $filename,
            'qr'                => $qr,
        ];

        // Membuat barang baru
        Barang::create($data);

        // Mengarahkan kembali ke halaman indeks barang
        return redirect()->route('barang.index');
    }

    public function qrCodeExists($qr) {
        // Menggunakan model Benda untuk mengecek apakah kode QR sudah ada
        return Barang::where('qr', $qr)->exists();
    }
}
