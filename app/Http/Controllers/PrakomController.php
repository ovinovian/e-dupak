<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VwPrakom;
use App\Models\VwPrakomDetail;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

class PrakomController extends Controller
{
    function __construct()
    {

        $this->middleware('permission:prakom-list|prakom-create|prakom-edit|prakom-delete', ['only' => ['index','show']]);
        // $this->middleware('permission:prakom-create', ['only' => ['create','store']]);
        // $this->middleware('permission:prakom-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:prakom-delete', ['only' => ['destroy']]);
        $this->middleware('permission:prakom-setuju', ['only' => ['setuju']]);
        $this->middleware('permission:prakom-nonaktif', ['only' => ['nonaktif']]);
        $this->middleware('permission:prakom-angkat', ['only' => ['angkat']]);
    }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $data = VwPrakom::all();
        $i = 0;
        return view('prakoms.index',compact('data', 'i'));

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $roles = Role::pluck('name','name')->all();

        return view('users.create',compact('roles'));

    }

    

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $this->validate($request, [

            'name' => 'required',

            'email' => 'required|email|unique:users,email',

            'password' => 'required|same:confirm-password',

            'roles' => 'required'

        ]);

    

        $input = $request->all();

        $input['password'] = Hash::make($input['password']);

    

        $user = User::create($input);

        $user->assignRole($request->input('roles'));

    

        return redirect()->route('users.index')

                        ->with('success','User created successfully');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $user = User::find($id);

        return view('users.show',compact('user'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $user = User::find($id);

        $roles = Role::pluck('name','name')->all();

        $userRole = $user->roles->pluck('name','name')->all();

    

        return view('users.edit',compact('user','roles','userRole'));

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

        $this->validate($request, [

            'name' => 'required',

            'email' => 'required|email|unique:users,email,'.$id,

            'password' => 'same:confirm-password',

            'roles' => 'required'

        ]);

    

        $input = $request->all();

        if(!empty($input['password'])){ 

            $input['password'] = Hash::make($input['password']);

        }else{

            $input = Arr::except($input,array('password'));    

        }

    

        $user = User::find($id);

        $user->update($input);

        DB::table('model_has_roles')->where('model_id',$id)->delete();

    

        $user->assignRole($request->input('roles'));

    

        return redirect()->route('users.index')

                        ->with('success','User updated successfully');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        User::find($id)->delete();

        return redirect()->route('users.index')

                        ->with('success','User deleted successfully');

    }

    public function setuju($id)
    {
        // $input = $request->all();
        User::where('id', $id)->update(['status'=>'1']);

        // dd($data);
        return redirect()->route('prakoms.index')->with('success','User sudah disetujui');
    }

    public function nonaktif($id)
    {
        // $input = $request->all();
        User::where('id', $id)->update(['status'=>'0']);

        // dd($data);
        return redirect()->route('prakoms.index')->with('success','User sudah dinonaktifkan');
    }

    public function angkat($id)
    {
        // $input = $request->all();
        $user = User::where('id', $id)->first();

        $user->assignRole('3');

        // dd($data);
        return redirect()->route('prakoms.index')->with('success','User dijadikan sebagai tim penilai');
    }
}