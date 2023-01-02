<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Jadwal;
use App\Models\VwDaftar;
use App\Models\VwJadwal;
use App\Models\VwPrakomDetail;
use App\Models\VwUnsur;
use App\Models\VwSubUnsur;
use App\Models\VwButir;
use Carbon\Carbon;

class DaftarController extends Controller
{
    //
    // function __construct()
    // {

    //     $this->middleware('permission:daftar-list|daftar-create|daftar-edit|daftar-delete', ['only' => ['index','show']]);
    //     $this->middleware('permission:daftar-create', ['only' => ['create','store']]);
    //     $this->middleware('permission:daftar-edit', ['only' => ['edit','update']]);
    //     $this->middleware('permission:daftar-delete', ['only' => ['destroy']]);
    //     $this->middleware('permission:daftar-publish', ['only' => ['publish']]);
    // }

    public function index()
    {
        $jadwals = VwJadwal::all();
        $daftars = VwDaftar::all();

        if(!$daftars->isEmpty()){
            $dft = 1;
        }
        else {
            $dft = 0;
        }

        if(!$jadwals->isEmpty()){
            $jadwals[0]['daftar_mulai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['daftar_mulai'])
                                ->format('d-m-Y');
            $jadwals[0]['daftar_selesai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['daftar_selesai'])
                                ->format('d-m-Y');
            $jadwals[0]['siap_mulai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['siap_mulai'])
                                ->format('d-m-Y');
            $jadwals[0]['siap_selesai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['siap_selesai'])
                                ->format('d-m-Y');
            $jadwals[0]['nilai_mulai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['nilai_mulai'])
                                ->format('d-m-Y');
            $jadwals[0]['nilai_selesai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['nilai_selesai'])
                                ->format('d-m-Y');
            $jadwals[0]['sidang_mulai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['sidang_mulai'])
                                ->format('d-m-Y');
            $jadwals[0]['sidang_selesai'] = Carbon::createFromFormat('Y-m-d', $jadwals[0]['sidang_selesai'])
                                ->format('d-m-Y');
            // $jadwals[]
            
            $data = 1;
            // dd($jadwals[0]['daftar_mulai']);

            return view('daftars.index',compact('data','jadwals','dft'));
        }
        else {
            $data = 0;

            return view('daftars.index',compact('data','dft'));
        }

        
        // dd($daftar_mulai);
        // dd($jadwals);
        // return view('daftars.index',compact('data','jadwals','dft'));
    }

    public function daftar($id)
    {
        $id_jadwal = $id;
        $data = VwPrakomDetail::where('id_user', Auth::id())->get();

        // dd($data[0]['jenjang_jabatan']);
        $butir = VwUnsur::where('klasifikasi', $data[0]['jenjang_jabatan'])->where('pelaksana', $data[0]['jenjang_tingkat_jabatan'])->get();
        // dd($data);
        return view('daftars.create',compact('id_jadwal', 'data', 'butir'));
    }
    
    public function create($id)
    {
        $id_jadwal = $id;
        return view('daftars.create',compact('id_jadwal'));
        // dd($id);
    }

    public function getSubUnsur(Request $request){
        $data = VwPrakomDetail::where('id_user', Auth::id())->get();
        $sub_unsur = VwSubUnsur::where('no_unsur', $request->unsur)->where('klasifikasi', $data[0]['jenjang_jabatan'])->where('pelaksana', $data[0]['jenjang_tingkat_jabatan'])->get();
        
        if(count($sub_unsur) > 0){
            return response()->json($sub_unsur);
        }
    }

    public function getButir(Request $request, $sub_unsur){
        $data = VwPrakomDetail::where('id_user', Auth::id())->get();

        // dd($request->all());

        $butir = VwButir::where('no_unsur', $request[0]->unsur)->where('no_sub_unsur', $sub_unsur)->where('klasifikasi', $data[0]['jenjang_jabatan'])->where('pelaksana', $data[0]['jenjang_tingkat_jabatan'])->get();
        
        if(count($butir) > 0){
            return response()->json($butir);
        }
    }
}