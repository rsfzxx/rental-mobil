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
            'jam_selesai' => $request->input('jam_selesai'),
            'servis_tambahan1' => $request->input('servis_tambahan1'),
            'servis_tambahan2' => $request->input('servis_tambahan2'),
            'servis_tambahan3' => $request->input('servis_tambahan3'),
            'servis_tambahan4' => $request->input('servis_tambahan4'),
            'servis_tambahan5' => $request->input('servis_tambahan5'),
            'servis_tambahan6' => $request->input('servis_tambahan6'),

            'servis_tambahan7' => $request->input('servis_tambahan7'),
            'servis_tambahan8' => $request->input('servis_tambahan8'),
            'servis_tambahan9' => $request->input('servis_tambahan9'),
            'servis_tambahan10' => $request->input('servis_tambahan10'),
            'servis_tambahan11' => $request->input('servis_tambahan11'),
            'servis_tambahan12' => $request->input('servis_tambahan12')
        ];

        $pdf = PDF::loadView('print', $data);
        return $pdf->download('data.pdf');
    }
}
