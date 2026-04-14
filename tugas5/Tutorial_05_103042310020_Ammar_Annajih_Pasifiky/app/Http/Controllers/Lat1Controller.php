<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index()
    {
        $data['nama'] = 'Ammar Annajih Pasifiky';
        $data['nim'] = '103042310020';
        $data['asal'] = 'Jakarta';

        return view('v_latihan1', $data);
    }

    public function method2()
    {
        $data['title'] = 'Daftar Mahasiswa';
        $data['nama_pengumpul'] = 'Ammar Annajih Pasifiky';
        $data['nim'] = '103042310020';
        $data['daf_mhs'] = [
            ['nama' => 'Agus', 'asal' => 'Bandung'],
            ['nama' => 'Budi', 'asal' => 'Jakarta'],
            ['nama' => 'Roni', 'asal' => 'Surabaya'],
        ];

        return view('v_latihan2', $data);
    }
}
