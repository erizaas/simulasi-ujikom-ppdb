<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Siswa;
use PDF;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $data = $request->all();

        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:siswa,email',
            'jenis_kelamin' => 'required',
            'asal_sekolah' => 'required',
            'minat_jurusan' => 'required',
        ]);
        
        $siswa = Siswa::create($validatedData);

        $pdfFileName = 'registration_' . $validatedData['nama'] . '_' . time() . '.pdf';

        $pdf = PDF::loadView('pdf.register', [
            'nama' => $validatedData['nama'],
            'email' => $validatedData['email'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'asal_sekolah' => $validatedData['asal_sekolah'],
            'minat_jurusan' => $validatedData['minat_jurusan'],
        ]);

        $pdfpath = storage_path('app/pdf/');

        if (!file_exists($pdfpath)) {
            mkdir($pdfpath, 0777, true);
        }

        $pdf->save(storage_path('app/pdf/' . $pdfFileName));

        return $pdf->download($pdfFileName);
    }

}
