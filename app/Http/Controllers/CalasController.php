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

    public function logout(Request $request) {
      Auth::logout();
      return redirect('/login');
    }

    public function register(){
        return view('sites.register');
    }

        public function postregister(Request $request)
    {
        $file = $request->file('krs');
        $krs = $file->getClientOriginalName();
        $request->file('krs')->move('img/krs/',$krs);
        $krs1 = $krs;

        $file1 = $request->file('avatar');
        $avatar = $file1->getClientOriginalName();
        $request->file('avatar')->move('img/avatar/',$avatar);
        $avatar1= $avatar;
        //input pendaftar jadi user
        $user= new  \App\User;
        $user->role='calas';
        $user->name=$request->nama;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();

         //insert ke tabel calas
        $request->request->add(['user_id' => $user->id]);
        $calas = new  \App\Calas;
        $calas->npm = $request->npm;
        $calas->nama = $request->nama;
        $calas->kelas = $request->kelas;
        $calas->jurusan = $request->jurusan;
        $calas->fakultas = $request->fakultas;
        $calas->alamat = $request->alamat;
        $calas->nomor_telepon = $request->nomor_telepon;
        $calas->krs = $krs1;
        $calas->avatar = $avatar1;
        $calas->save;




       
        $siswa= \App\Calas::create($request->all());

        return redirect('/')->with('sukses','Data Pendaftaran berhasil Dikirim');
     
    }
}
