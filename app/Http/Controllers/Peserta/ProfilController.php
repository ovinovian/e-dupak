<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use App\Models\VwPrakom;
use App\Models\VwPrakomDetail;
use App\Models\Profil;
use App\Models\Butir;

class ProfilController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = VwPrakom::where('id', auth()->user()->id)->get();
        $profils = VwPrakomDetail::where('id', auth()->user()->id)->get();
        
        // dd($users);
        if(!$profils->isEmpty()){
            return view('peserta.profil.index',compact('users','profils'));
        }
        else{
            return view('peserta.profil.create',compact('users'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('peserta.profil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        request()->validate([
            'nik' => 'required',
            'karpeg' => 'required',
            't_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
        //     'pangkat' => 'required',
            'golongan' => 'required',
            'tmt_pangkat' => 'required',
            'jabatan' => 'required',
            'jenjang_jabatan' => 'required',
            'jenjang_tingkat_jabatan' => 'required',
            'tmt_jabatan' => 'required',
            'mk_tahun_lama' => 'required',
            'mk_bulan_lama' => 'required',
            'mk_tahun_baru' => 'required',
            'mk_bulan_baru' => 'required',
            'unit_kerja' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png',
        ]);
        
        $input = $request->all();
        
        $input['tgl_lahir'] =Carbon::createFromFormat('d-m-Y', $request->tgl_lahir)
        ->format('Y-m-d');
        $input['tmt_pangkat'] =Carbon::createFromFormat('d-m-Y', $request->tmt_pangkat)
        ->format('Y-m-d');
        $input['tmt_jabatan'] =Carbon::createFromFormat('d-m-Y', $request->tmt_jabatan)
        ->format('Y-m-d');
        $input['pangkat'] = "Test";
        $input['id_user'] = Auth::id();
        
        if ($request->hasfile('foto')) {
            $upload_path = 'public/images/foto/';
            $file = $request->file('foto');
            $file_name = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->storeAs($upload_path, $file_name); 
            $input['foto'] = $file_name;
        }
        else{
            //
            $message = "Gagal";
        }
                
                // dd($input);
        Profil::create($input);

        return redirect()->route('profil.index')
                        ->with('success','Profil berhasil ditambahkan.');

        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getTkJab(Request $request){
        $tkjab = Butir::where('klasifikasi', $request->klasifikasi)->get();
        
        if(count($tkjab) > 0){
            return response()->json($tkjab);
        }
    }
}