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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        request()->validate([
            'mk_tahun_baru' => 'required',
            'mk_bulan_baru' => 'required',
            '' => 'required',
            'siap_mulai' => 'required',
            'siap_selesai' => 'required',
            'nilai_mulai' => 'required',
            'nilai_selesai' => 'required',
            'sidang_mulai' => 'required',
            'sidang_selesai' => 'required',
        ]);

        $input = $request->all();
        $input['daftar_mulai'] =Carbon::createFromFormat('d-m-Y', $request->daftar_mulai)
                            ->format('Y-m-d');
        $input['daftar_selesai'] =Carbon::createFromFormat('d-m-Y', $request->daftar_selesai)
                            ->format('Y-m-d');
        $input['siap_mulai'] =Carbon::createFromFormat('d-m-Y', $request->siap_mulai)
                            ->format('Y-m-d');
        $input['siap_selesai'] =Carbon::createFromFormat('d-m-Y', $request->siap_selesai)
                            ->format('Y-m-d');
        $input['nilai_mulai'] =Carbon::createFromFormat('d-m-Y', $request->nilai_mulai)
                            ->format('Y-m-d');
        $input['nilai_selesai'] =Carbon::createFromFormat('d-m-Y', $request->nilai_selesai)
                            ->format('Y-m-d');
        $input['sidang_mulai'] =Carbon::createFromFormat('d-m-Y', $request->sidang_mulai)
                            ->format('Y-m-d');
        $input['sidang_selesai'] =Carbon::createFromFormat('d-m-Y', $request->sidang_selesai)
                            ->format('Y-m-d');

        Jadwal::create($input);
        return redirect()->route('jadwals.index')
                        ->with('success','Jadwal berhasil ditambahkan.');
    }

    public function daftar($id)
    {
        $id_jadwal = $id;
        $data = VwPrakomDetail::where('id_user', Auth::id())->get();

        // dd($data[0]['jenjang_jabatan']);
        $butir = VwButir::where('klasifikasi', $data[0]['jenjang_jabatan'])->where('pelaksana', $data[0]['jenjang_tingkat_jabatan'])->get();
        // dd($data);
        return view('daftars.create',compact('id_jadwal', 'data', 'butir'));
    }
    
    public function create($id)
    {
        $id_jadwal = $id;
        return view('daftars.create',compact('id_jadwal'));
        // dd($id);
    }

    public function getUnsur(Request $request){
        $data = VwPrakomDetail::where('id_user', Auth::id())->get();
        $unsur = VwUnsur::where('klasifikasi', $data[0]['jenjang_jabatan'])->where('pelaksana', $data[0]['jenjang_tingkat_jabatan'])->get();
        
        if(count($unsur) > 0){
            return response()->json($unsur);
        }
    }

    public function getSubUnsur(Request $request){
        $data = VwPrakomDetail::where('id_user', Auth::id())->get();
        $sub_unsur = VwSubUnsur::where('no_unsur', $request->unsur)->where('klasifikasi', $data[0]['jenjang_jabatan'])->where('pelaksana', $data[0]['jenjang_tingkat_jabatan'])->get();
        
        if(count($sub_unsur) > 0){
            return response()->json($sub_unsur);
        }
    }

    public function getButir(Request $request){
        $data = VwPrakomDetail::where('id_user', Auth::id())->get();

        // dd($request->all());
        $pisah = explode(',', $request['sub_unsur']);

        $butir = VwButir::where('no_unsur', $pisah[0])->where('no_sub_unsur', $pisah[1])->where('klasifikasi', $data[0]['jenjang_jabatan'])->where('pelaksana', $data[0]['jenjang_tingkat_jabatan'])->get();
        
        if(count($butir) > 0){
            return response()->json($butir);
        }
    }
}