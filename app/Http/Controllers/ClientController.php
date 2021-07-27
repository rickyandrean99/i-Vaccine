<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function beranda() {
        return view('client.beranda');
    }

    public function masuk() {
        return view('client.masuk');
    }

    public function daftar() {
        return view('client.daftar');
    }

    public function antrian() {
        return view('client.antrian');
    }
}