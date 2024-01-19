<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Siswa::all();
        $totalSiswa = Siswa::count();
        return view('dashboard.index', compact('data', 'totalSiswa'));
    }

    public function delete($id)
    {
        Siswa::destroy($id);

        return redirect()->route('dashboard')->with('success', 'Siswa berhasil Dihapus!');
    }
}
