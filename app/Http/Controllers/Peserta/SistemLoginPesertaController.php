<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Peserta;

class SistemLoginPesertaController extends Controller
{
    public function register_akun()
    {
        return view('peserta.auth.register');
    }

    public function proses_register(Request $req)
    {
        $cek_nip = Peserta::where('nip', '=', $req->nip)->count();
        $cek_email = Peserta::where('email', '=', $req->email)->count();
        if($cek_email == 1 || $cek_nip == 1) {
            Session::flash('fail', 'NIP atau Email anda masukan telah digunakan');
            return redirect('/register');
        } else {
            $dt_register = new Peserta;
            $dt_register->nama_lengkap = $req->nama_lengkap;
            $dt_register->nip = $req->nip;
            $dt_register->email = $req->email;
            $dt_register->password = Hash::make($req->password);
            $simpan = $dt_register->save();

            if($simpan) {
                Session::flash('berhasil_masuk', 'Anda telah berhasil mendaftar, silahkan login !');
                return redirect('/auth/login');
            } else {
                Session::flash('fail', 'Data anda gagal tersimpan');
                return redirect()->back();
            }
        }
    }

    public function halaman_login()
    {
        return view('peserta.auth.login');
    }

    public function loginVerifikasi(Request $req)
    {
        // dd($req->all());
        $peserta = DB::table('peserta')
        ->where('email', $req->email)
        ->first();

        if (!$peserta || empty($peserta))
        {
            return back()->with('gagal_login', 'Data Email atau Password anda tidak ditemukan');
        } else {
            $datas = $peserta;
            if (Hash::check($req->password, $peserta->password)){
                $req->session()->put('email', $peserta->email);
                $req->session()->put('nip', $peserta->nip);
                $req->session()->put('nama_lengkap', $peserta->nama_lengkap);
                return redirect()->route('home')->with(['datas'=>$datas]);
            } else {
                return back()->with('gagal_login', 'Data Email atau Password anda masukan salah');
            }
        }
        
    }

    public function log_out()
    {
        if(session()->has('email')){
            session()->pull('email');
            session()->pull('nama');
            session()->pull('nip');
            return redirect()->route('login.peserta')->with('berhasil', 'Selamat tinggal, kamu berhasi keluar');
        }
    }
}
