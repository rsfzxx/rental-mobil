<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DataController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function printData(Request $request)
    {
        $data = [
            'no_spk' => $request->input('no_spk'),
            'tanggal' => $request->input('tanggal'),
            'pemilik' => $request->input('pemilik'),
            'no_telp' => $request->input('no_telp'),
            'alamat' => $request->input('alamat'),
            'jenis_mobil' => $request->input('jenis_mobil'),
            'no_polisi' => $request->input('no_polisi'),
            'km_masuk' => $request->input('km_masuk'),
            'mekanik' => $request->input('mekanik'),
            'jam_masuk' => $request->input('jam_masuk'),
            'jam_selesai' => $request->input('jam_selesai')
        ];

        $pdf = PDF::loadView('print', $data);
        return $pdf->download('data.pdf');
    }
}
