<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

// use App\Models\Perm;

class PermController extends Controller
{
    //
    function __construct()
    {

        $this->middleware('permission:perm-list|perm-create|perm-edit|perm-delete', ['only' => ['index','show']]);
        $this->middleware('permission:perm-create', ['only' => ['create','store']]);
        $this->middleware('permission:perm-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:perm-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $perms = Permission::all();
        return view('perms.index',compact('perms'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('perms.create');
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
        ]);

        $input = $request->all();
        $input['guard_name'] = 'web';

        $Permission = Permission::create($input);
        return redirect()->route('perms.index')
                        ->with('success','Permission berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permission $perm
     * @return \Illuminate\Http\Response
     */
    
    public function show(Permission $perm)
    {
        return view('perms.show',compact('perm'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permission $perm
     * @return \Illuminate\Http\Response
     */
    
    public function edit(Permission $perm)
    {
        return view('perms.edit',compact('perm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permission $perm
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Permission $perm)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $perm->update($request->all());
        return redirect()->route('perms.index')
                        ->with('success','Permission berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permission $perm
     * @return \Illuminate\Http\Response
     */

    public function destroy(Permission $perm)
    {
        $perm->delete();

        return redirect()->route('perms.index')

                        ->with('success','Permission berhasil dihapus');

    }
}