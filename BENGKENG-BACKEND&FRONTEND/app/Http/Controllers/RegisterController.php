<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.register');
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
        $request->validate([
            'password' => 'required|min:5|max:255',
            'email' => 'required|email:dns|min:3|max:255|unique:users'
        ]);

        $password = $request->password;
        $confirmpass = $request->confirmpassword;

        if ($password == $confirmpass) {
            $user = New User();
            $user->email = $request->email;
            $user->name = $request->nama;
            $user->password = bcrypt($password);
            $user->phonenumber = '62' . $request->phone;
            $user->birth = 'Silahkan isi tanggal lahir anda';
            $user->image = 'user.svg';
            $user->havebengkel = false;

            $user->save();

            return redirect('/login')->with('success', 'Registrasi Berhasil');
        }

        return back()->with('registerError', 'Registrasi gagal, pastikan password dan konfirmasi password sama dan silahkan coba kembali');

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
}
