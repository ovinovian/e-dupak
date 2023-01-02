<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use Carbon\Carbon;

class JadwalController extends Controller
{
    //
    function __construct()
    {

        $this->middleware('permission:jadwal-list|jadwal-create|jadwal-edit|jadwal-delete', ['only' => ['index','show']]);
        $this->middleware('permission:jadwal-create', ['only' => ['create','store']]);
        $this->middleware('permission:jadwal-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:jadwal-delete', ['only' => ['destroy']]);
        $this->middleware('permission:jadwal-publish', ['only' => ['publish']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $jadwals = Jadwal::all();
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
        $i = 0;
        // dd($daftar_mulai);
        // dd($jadwals);
        return view('jadwals.index',compact('jadwals','i'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('jadwals.create');
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
            'tahun' => 'required',
            'tahap' => 'required',
            'daftar_mulai' => 'required',
            'daftar_selesai' => 'required',
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    
    public function show(Jadwal $jadwal)
    {
        return view('jadwals.show',compact('jadwal'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    
    public function edit(Jadwal $jadwal)
    {
        $jadwal['daftar_mulai'] = Carbon::createFromFormat('Y-m-d', $jadwal->daftar_mulai)
                            ->format('d-m-Y');
        $jadwal['daftar_selesai'] = Carbon::createFromFormat('Y-m-d', $jadwal->daftar_selesai)
                            ->format('d-m-Y');
        $jadwal['siap_mulai'] = Carbon::createFromFormat('Y-m-d', $jadwal->siap_mulai)
                            ->format('d-m-Y');
        $jadwal['siap_selesai'] = Carbon::createFromFormat('Y-m-d', $jadwal->siap_selesai)
                            ->format('d-m-Y');
        $jadwal['nilai_mulai'] = Carbon::createFromFormat('Y-m-d', $jadwal->nilai_mulai)
                            ->format('d-m-Y');
        $jadwal['nilai_selesai'] = Carbon::createFromFormat('Y-m-d', $jadwal->nilai_selesai)
                            ->format('d-m-Y');
        $jadwal['sidang_mulai'] = Carbon::createFromFormat('Y-m-d', $jadwal->sidang_mulai)
                            ->format('d-m-Y');
        $jadwal['sidang_selesai'] = Carbon::createFromFormat('Y-m-d', $jadwal->sidang_selesai)
                            ->format('d-m-Y');
        // dd($jadwal->daftar_mulai);
        return view('jadwals.edit',compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Jadwal $jadwal)
    {
        request()->validate([
            'tahun' => 'required',
            'tahap' => 'required',
            'daftar_mulai' => 'required',
            'nilai_mulai' => 'required',
            'siap_selesai' => 'required',
            'siap_mulai' => 'required',
            'daftar_selesai' => 'required',
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

        $jadwal->update($input);
        return redirect()->route('jadwals.index')
                        ->with('success','Jadwal berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */

    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();

        return redirect()->route('jadwals.index')
                        ->with('success','Jadwal berhasil dihapus');
    }

    public function publishJadwal($id)
    {
        Jadwal::where('id', $id)->update(['publish' => 1]);
    
        return redirect()->route('jadwals.index')
                        ->with('success','Jadwal berhasil dipublish');
    }
}