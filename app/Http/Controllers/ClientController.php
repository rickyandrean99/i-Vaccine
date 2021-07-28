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

    public function tiket() {
        return view('client.antrian');
    }

    public function pendaftaranVaksin() {
        return view('client.pendaftaran');
    }

    public function editProfil() {
        return view('client.edit-profil');
    }

    public function sessionLogin(Request $request) {
        session(['login' => true]);
    }

    public function sessionLogout(Request $request) {
        session(['login' => false]);
    }
}