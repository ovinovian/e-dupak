<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Auth;

use App\Models\VwPrakom;
use App\Models\VwPrakomDetail;
use App\Models\Profil;
use App\Models\VwButirMin;
use App\Models\User;


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
        $users = VwPrakom::where('id', Auth::id())->get();
        $profils = VwPrakomDetail::where('id', Auth::id())->get();

        
        // dd($users);
        if(!$profils->isEmpty()){
            $profils[0]['tgl_lahir'] = Carbon::createFromFormat('Y-m-d', $profils[0]['tgl_lahir'])
            ->format('d-m-Y');
            $profils[0]['tmt_jabatan'] = Carbon::createFromFormat('Y-m-d', $profils[0]['tmt_jabatan'])
                                ->format('d-m-Y');
            $profils[0]['tmt_pangkat'] = Carbon::createFromFormat('Y-m-d', $profils[0]['tmt_pangkat'])
                                ->format('d-m-Y');
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
        
        $input['tgl_lahir'] = Carbon::createFromFormat('d-m-Y', $request->tgl_lahir)
        ->format('Y-m-d');
        $input['tmt_pangkat'] = Carbon::createFromFormat('d-m-Y', $request->tmt_pangkat)
        ->format('Y-m-d');
        $input['tmt_jabatan'] = Carbon::createFromFormat('d-m-Y', $request->tmt_jabatan)
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
        $simpan = Profil::create($input);

        if($simpan) {
            return redirect()->route('profil.index')
                            ->with('success','Profil berhasil ditambahkan.');
        } else {
            Session::flash('failed', 'Anda gagal menyimpan profil, ulangi kembali');
            return redirect()->back();
        }
       

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
    public function edit_profil($id)
    {
        $users = VwPrakom::where('id', $id)->get();
        $profils = VwPrakomDetail::where('id', $id)->get();

        $tgl_lahir = \Carbon\Carbon::parse($profils[0]->tgl_lahir)->format('d-m-Y');
        $tmtJabatan = \Carbon\Carbon::parse($profils[0]->tmt_jabatan)->format('d-m-Y');
        $tmtPangkat = \Carbon\Carbon::parse($profils[0]->tmt_pangkat)->format('d-m-Y');

        return view('peserta.profil.edit',compact('users','profils', 'tgl_lahir', 'tmtJabatan', 'tmtPangkat'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ubah_profil(Request $request, $id)
    {
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
        ]);
        
        $input = $request->all();

        $pangkat = "tes";
        
        $tanggal_lahir = $input['tgl_lahir'] = Carbon::createFromFormat('d-m-Y', $request->tgl_lahir)
        ->format('Y-m-d');
        $tmt_pangkat = $input['tmt_pangkat'] = Carbon::createFromFormat('d-m-Y', $request->tmt_pangkat)
        ->format('Y-m-d');
        $tmt_jabatan = $input['tmt_jabatan'] = Carbon::createFromFormat('d-m-Y', $request->tmt_jabatan)
        ->format('Y-m-d');
        $input['pangkat'] = $pangkat;
        $input['id_user'] = Auth::id();
        
        if ($request->hasfile('foto')) {
            request()->validate([
                'foto' => 'required|mimes:jpg,jpeg,png',
            ]);

            $upload_path = 'public/images/foto/';
            $file = $request->file('foto');
            $file_name = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->storeAs($upload_path, $file_name); 
            $input['foto'] = $file_name;

            Profil::where('id', $id)->update([
                'nik' => $request->nik,
                'karpeg' => $request->karpeg,
                't_lahir' => $request->t_lahir,
                'tgl_lahir' => $tanggal_lahir,
                'jk' => $request->jk,
                'alamat' => $request->alamat,
                'pangkat' => $pangkat,
                'golongan' => $request->golongan,
                'tmt_pangkat' => $tmt_pangkat,
                'jabatan' => $request->jabatan,
                'jenjang_jabatan' => $request->jenjang_jabatan,
                'jenjang_tingkat_jabatan' => $request->jenjang_tingkat_jabatan,
                'tmt_jabatan' => $tmt_jabatan,
                'mk_tahun_lama' => $request->mk_tahun_lama,
                'mk_bulan_lama' => $request->mk_bulan_lama,
                'mk_tahun_baru' => $request->mk_tahun_baru,
                'mk_bulan_baru' => $request->mk_bulan_baru,
                'unit_kerja' => $request->unit_kerja,
                'foto' =>  $file_name,
            ]);
            User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            return redirect()->route('profil.index')
                        ->with('success','Profil berhasil diubah.');
            // Session::flash('berhasil', 'Anda berhail mengubah data profil');
        }
        else{
            // dd($request->all());
            Profil::where('id', $id)->update([
            'nik' => $request->nik,
            'karpeg' => $request->karpeg,
            't_lahir' => $request->t_lahir,
            'tgl_lahir' => $tanggal_lahir,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'pangkat' => $pangkat,
            'golongan' => $request->golongan,
            'tmt_pangkat' => $tmt_pangkat,
            'jabatan' => $request->jabatan,
            'jenjang_jabatan' => $request->jenjang_jabatan,
            'jenjang_tingkat_jabatan' => $request->jenjang_tingkat_jabatan,
            'tmt_jabatan' => $tmt_jabatan,
            'mk_tahun_lama' => $request->mk_tahun_lama,
            'mk_bulan_lama' => $request->mk_bulan_lama,
            'mk_tahun_baru' => $request->mk_tahun_baru,
            'mk_bulan_baru' => $request->mk_bulan_baru,
            'unit_kerja' => $request->unit_kerja,
            ]);

            User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
            return redirect()->route('profil.index')
                        ->with('success','Profil berhasil diubah.');
            // Session::flash('berhasil', 'Anda berhail mengubah data profil');
        }

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
        $tkjab = VwButirMin::where('klasifikasi', $request->klasifikasi)->get();
        
        if(count($tkjab) > 0){
            return response()->json($tkjab);
        }
    }
}