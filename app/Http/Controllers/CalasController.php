<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calas;
use Auth;
class CalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calas = Calas::all();
        return view('calas.index',compact('calas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $calas = Calas::find($id);
        return view('calas.edit',compact('calas'));
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
            // dd($request->all());
        $calas=\App\Calas::find($id);
        $calas->update($request->all());
        return redirect('/calas')->with('status','Data calas berhasil diubah'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $calas=\App\Calas::find($id);
       $calas->delete();
       return redirect('/siswa')->with('status','Data calas berhasil dihapus!'); 
    }

    public function logout(Request $request) {
      Auth::logout();
      return redirect('/login');
    }

    public function register(){
        return view('sites.register');
    }

    public function postregister(Request $request)
    {
        //request user
        $user= new  \App\User;
        $user->role='calas';
        $user->name=$request->nama;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();

        // insert ke tabel calas
        if($request->hasFile('avatar'))
        {
            $destination= "avatar";
            $filename = $request->file('avatar');
            $filename ->move($destination, $filename->getClientOriginalName());       
        }

        if($request->hasFile('krs'))
        {
            $dada= "krs";
            $krsname = $request->file('krs');
            $krsname ->move($dada, $krsname->getClientOriginalName());       
        }
       

        $calas = new Calas;
        $calas->npm= $request->npm;
        $calas->nama= $request->nama;
        $calas->kelas= $request->kelas;
        $calas->jurusan= $request->jurusan;
        $calas->fakultas= $request->fakultas;
        $calas->alamat= $request->alamat;
        $calas->nomor_telepon= $request->nomor_telepon;
        $calas->krs = 'krs/'.$krsname->getClientOriginalName();
        $calas->avatar='avatar/'. $filename->getClientOriginalName();
        $calas->user_id= $user->id;
        $calas->status_kelulusan= 'Tidak Ada Status';
        $calas->save();
        return redirect()->back();
     
    }

    public function status()
    {
        return view('calas.status');
    }
}

