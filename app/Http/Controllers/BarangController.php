<?php

namespace App\Http\Controllers;

use App\Models\Barang;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class BarangController extends Controller
{

    public function index() {
        $data = Barang::all();
        return view('layouts.config.users.barang.index', compact('data'));
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
        $qr = $request->gudang . $request->ruangan . $request->nama_barang . $request->jenis_barang;

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

    // edit
    public function edit($id) {
        $data = Barang::findOrFail($id);
        return view('layouts.config.users.barang.edit', compact('data'));
    }

    public function update(Request $request, $id) {
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
            'image'             => 'mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = Barang::findOrFail($id);
        // Memperbarui data non-file
        $data->gudang            = $request->gudang;
        $data->ruangan           = $request->ruangan;
        $data->nama_barang       = $request->nama_barang;
        $data->jenis_barang      = $request->jenis_barang;
        $data->kode_barang       = $request->kode_barang;
        $data->register          = $request->register;
        $data->kondisi_barang    = $request->kondisi_barang;
        $data->lokasi            = $request->lokasi;
        $data->harga_barang      = $request->harga_barang;


        // Memperbarui nilai atribut qr
        $data->qr = $request->gudang . $request->ruangan . $request->nama_barang . $request->jenis_barang;

        // Memproses dan menyimpan file jika diunggah
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = date('Y-m-d') . $image->getClientOriginalName();
            $imagePath = 'photo-image/' . $filename;
            Storage::disk('public')->put($imagePath, file_get_contents($image));
            $data->image = $filename;
        }

        $data->save();

        return redirect()->route('barang.index');
    }

    // delet data
    public function delete(Request $request, $id) {
        $data = Barang::findOrFail($id);
        if($data) {
            $data->delete();
        }
        return redirect()->route('barang.index');
    }
}
