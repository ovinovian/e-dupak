<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Jadwal;
use App\Models\Daftar;
use App\Models\DaftarDetail;
use App\Models\User;
use App\Models\VwDaftar;
use App\Models\VwDaftarAju;
use App\Models\VwJadwal;
use App\Models\VwPrakomDetail;
use App\Models\VwUnsur;
use App\Models\VwSubUnsur;
use App\Models\VwButir;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        $user = VwPrakomDetail::where('id_user', Auth::user()->id)->get();
        $butir = VwButir::where('klasifikasi', $user[0]['jenjang_jabatan'])->where('pelaksana', $user[0]['jenjang_tingkat_jabatan'])->get();
        
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
            
            $daftarAju = VwDaftarAju::where('id', Auth::user()->id)->get();
            // dd($daftarAju);
            
            if(!$daftarAju->isEmpty()){
                $aju = 1;
                return view('daftars.index',compact('data','jadwals','dft', 'daftarAju', 'aju', 'butir'));
            }
            else{
                $aju = 0;
                return view('daftars.index',compact('data','jadwals','dft', 'aju'));
            }
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
        $data = VwPrakomDetail::where('id_user', Auth::user()->id)->get();

        // dd($data[0]['jenjang_jabatan']);
        $butir = VwButir::where('klasifikasi', $data[0]['jenjang_jabatan'])->where('pelaksana', $data[0]['jenjang_tingkat_jabatan'])->get();
        // dd($data);
        return view('daftars.create',compact('id_jadwal', 'data', 'butir'));
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
            'surat_pengantar' => 'required|mimes:pdf',
            'laporan_kegiatan' => 'required|mimes:pdf',
            'unsur_penunjang' => 'required',
            'id_butir' => 'required',
            'nilai' => 'required',
            'id_jadwal' => 'required',
        ]);
        
        $butir = $request->get('id_butir');
        $nilai = $request->get('nilai');
        $nip = $request->get('nip');
        $id_jadwal = $request->get('id_jadwal');
        $tgl = Carbon::now()->toDateTimeString();
        // dd($butir);
        $input[] = $request->all();
                
        // dd($input);
        
        if ($request->hasfile('surat_pengantar') && $request->hasfile('laporan_kegiatan')) {
            $upload_path = 'public/documents/';
            $file = $request->file('surat_pengantar');
            $file2 = $request->file('laporan_kegiatan');
            $file_name = 'srt_pengantar' . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->storeAs($upload_path, $file_name);
            $file_name2 = 'lprn_kegiatan' . date('YmdHis') . "." . $file2->getClientOriginalExtension();
            $file2->storeAs($upload_path, $file_name2); 
            $input['surat_pengantar'] = $file_name;
            $input['laporan_kegiatan'] = $file_name2;
        }
        else{
            //
            $message = "Gagal";
        }

        // dd($input['unsur_penunjang']);

        $data2 = ['nip'=>$nip[0],'id_jadwal'=>$id_jadwal[0],'surat_pengantar'=>$file_name, 'laporan_kegiatan'=>$file_name2,'mk_tahun_baru'=>$input[0]['mk_tahun_baru'], 'mk_bulan_baru'=>$input[0]['mk_bulan_baru'],'pengembangan_profesi'=>$input[0]['pengembangan_profesi'], 'unsur_penunjang'=>$input[0]['unsur_penunjang'], 'status_daftar'=>'1'];
        // dd($data2);

        Daftar::create($data2);
        
        // $daftar['nip'] = $input['nip'];
        
        // $detail['id_butir'] = json_decode($input['id_butir']);
        // $detail['nilai'] = json_decode($input['nilai']);
        // // dd($input);
        // dd($detail['id_butir']);

        // $input[] = $request->all();

        $Data = [];
        foreach($request->get('id_butir') as $d=>$item)
        {
            // dd($d['id_butir']);
            $Data[] = [
                'id_butir'=>$butir[$d],
                'nilai'=>$nilai[$d],
                'nip'=>$nip[$d],
                'id_jadwal'=>$id_jadwal[$d],
                'created_at'=>$tgl,
                'updated_at'=>$tgl,
            ];
        }
        // dd($request['mk_tahun_baru']);
        // DB::table('detail_daftars')->insert($Data);
        DaftarDetail::insert($Data);


        // DaftarDetail::create(['id_jadwal'=>$input['id_jadwal'],'id_butir'=>$input['id_butir'],'nilai'=>$input['nilai'],]);
        // $finalArray = array();
        // foreach($input as $key=>$value){
        //     array_push($finalArray, array(
        //         'id_jadwal'=>$value['id_jadwal'],
        //         'id_butir'=>$value['id_butir'],
        //         'nilai'=>$value['nilai'])
        //     );
        // };

        // DaftarDetail::create($finalArray);

        return redirect()->route('daftars.index')
                        ->with('success','Daftar berhasil ditambahkan.');

        // dd($request->all());
    }
    
    public function create($id)
    {
        $id_jadwal = $id;
        return view('daftars.create',compact('id_jadwal'));
        // dd($id);
    }

    public function edit(Daftar $daftar)
    {
        $data = VwPrakomDetail::where('id_user', Auth::user()->id)->get();

        $daftar = VwDaftarAju::where('id_daftar', $daftar)->first();

        // dd($data[0]['jenjang_jabatan']);
        $butir = VwButir::where('klasifikasi', $data[0]['jenjang_jabatan'])->where('pelaksana', $data[0]['jenjang_tingkat_jabatan'])->get();
        // dd($data);
        return view('daftars.create',compact('daftar', 'data', 'butir'));
    }

    public function ajuDupak($id){
        Daftar::where('id', $id)->update(['status_daftar' => 2]);

        return redirect()->route('daftars.index')
                        ->with('success','Dupak Sudah Diajukan');
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