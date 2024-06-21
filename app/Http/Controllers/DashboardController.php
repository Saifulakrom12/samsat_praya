<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung jumlah pengguna dan persentase progres untuk pengguna
        $userCount = User::count();
        $maxUserCount = 1000; // Batas maksimal pengguna
        $userProgress = ($userCount / $maxUserCount) * 100; // Persentase progres

        // Menghitung jumlah barang dan persentase progres untuk barang
        $barangCount = Barang::count();
        $maxBarangCount = 1000; // Batas maksimal barang
        $barangProgress = ($barangCount / $maxBarangCount) * 100; // Persentase progres

        // Mengirimkan data ke view
        return view('layouts.config.admin.dashboard', compact('userCount', 'userProgress', 'barangCount', 'barangProgress'));
    }
}
