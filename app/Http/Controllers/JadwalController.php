<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    //
    function __construct()
    {

        $this->middleware('permission:jadwal-list|jadwal-create|jadwal-edit|jadwal-delete', ['only' => ['index','show']]);
        $this->middleware('permission:jadwal-create', ['only' => ['create','store']]);
        $this->middleware('permission:jadwal-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:jadwal-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('jadwals.index',compact('jadwals'));
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
            'name' => 'required',
            'detail' => 'required',
        ]);

        Jadwal::create($request->all());
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
            'name' => 'required',
            'detail' => 'required',
        ]);

        $jadwal->update($request->all());
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
}