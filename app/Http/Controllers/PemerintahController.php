<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemerintahController extends Controller
{
    public function dashboard() {
        return view('pemerintah.dashboard');
    }

    public function penyelenggara() {
        return view('pemerintah.penyelenggara');
    }

    public function rekapPeserta() {
        return view('pemerintah.rekap');
    }

    public function stokVaksin() {
        return view('pemerintah.stok');
    }

    public function distribusiVaksin() {
        return view('pemerintah.distribusi');
    }
}
