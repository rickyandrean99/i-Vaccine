<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenyelenggaraController extends Controller
{
    public function dashboard() {
        return view('penyelenggara.dashboard');
    }

    public function editData() {
        return view('penyelenggara.edit');
    }

    public function antrianVaksin() {
        return view('penyelenggara.antrian');
    }

    public function rekapPeserta() {
        return view('penyelenggara.rekap');
    }

    public function vaksin() {
        return view('penyelenggara.vaksin');
    }
}
