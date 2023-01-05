<?php

namespace App\Http\Controllers\Halaman_landing_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\VwJadwal;

class LandingPageController extends Controller
{
    public function index()
    {
        $jadwals = VwJadwal::all();

        if(!$jadwals->isEmpty()){
            $jadwals[0]['daftar_mulai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['daftar_mulai'])
                                ->translatedFormat('d F Y');
            $jadwals[0]['daftar_selesai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['daftar_selesai'])
                                ->translatedFormat('d F Y');
            $jadwals[0]['siap_mulai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['siap_mulai'])
                                ->translatedFormat('d F Y');
            $jadwals[0]['siap_selesai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['siap_selesai'])
                                ->translatedFormat('d F Y');
            $jadwals[0]['nilai_mulai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['nilai_mulai'])
                                ->translatedFormat('d F Y');
            $jadwals[0]['nilai_selesai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['nilai_selesai'])
                                ->translatedFormat('d F Y');
            $jadwals[0]['sidang_mulai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['sidang_mulai'])
                                ->translatedFormat('d F Y');
            $jadwals[0]['sidang_selesai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['sidang_selesai'])
                                ->translatedFormat('d F Y');
            // $jadwals[]
            
            $data = 1;
            // dd($jadwals[0]['daftar_mulai']);

            return view('landing_page.layouts.content.konten',compact('data','jadwals'));
        }
        else {
            $data = 0;

            return view('landing_page.layouts.content.konten',compact('data'));
        }

    }

    public function finish()
    {
        // return view('landing_page.layouts.content.konten');
        return ("Akun anda sudah diregistrasi dan akan diverifikasi oleh Sekretariat Tim Penilai Prakom. Terima Kasih...");
    }
}