<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\VwDaftar;
use App\Models\VwJadwal;
use Carbon\Carbon;

class DaftarController extends Controller
{
    //
    function __construct()
    {

        $this->middleware('permission:daftar-list|daftar-create|daftar-edit|daftar-delete', ['only' => ['index','show']]);
        $this->middleware('permission:daftar-create', ['only' => ['create','store']]);
        $this->middleware('permission:daftar-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:daftar-delete', ['only' => ['destroy']]);
        $this->middleware('permission:daftar-publish', ['only' => ['publish']]);
    }

    public function index()
    {
        $jadwals = VwJadwal::all();
        $daftars = VwDaftar::all();

        if(!$jadwals->isEmpty()){
        $jadwals[0]['daftar_mulai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['daftar_mulai'])
                            ->format('d-m-Y');
        $jadwals[0]['daftar_selesai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['daftar_selesai'])
                            ->format('d-m-Y');
        $jadwals[0]['nilai_mulai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['nilai_mulai'])
                            ->format('d-m-Y');
        $jadwals[0]['nilai_selesai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['nilai_selesai'])
                            ->format('d-m-Y');
        $jadwals[0]['sidang_mulai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['sidang_mulai'])
                            ->format('d-m-Y');
        $jadwals[0]['sidang_selesai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['sidang_selesai'])
                            ->format('d-m-Y');
        
        $data = 1;
        }
        else {
        $data = 0;
        }

        if(!$daftars->isEmpty()){
            $dft = 1;
        }
        else {
            $dft = 0;
        }
        // dd($daftar_mulai);
        // dd($jadwals);
        return view('daftars.index',compact('data','jadwals','dft'));
    }

    public function daftar($id)
    {
        $id_jadwal = $id;
        return view('daftars.create',compact('id_jadwal'));
        // dd($id);
    }
}