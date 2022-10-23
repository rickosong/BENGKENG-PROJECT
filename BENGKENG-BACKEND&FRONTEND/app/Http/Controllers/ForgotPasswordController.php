<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.searchemail');
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
    public function edit(Request $request)
    {
        $user = User::whereEmail($request->email)->first();

        // dd($user);

        if ($user == null) {
            return redirect()->back()->with(['noUser' => 'User tidak ada / belum terdatar, silahkan daftar dulu']);
        }

        return view('auth.forgotpass', [
            'user' => $user
        ]);
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
        $user = User::find($id);
        

        $password = $request->password;
        $confirmPass = $request->confirmpassword;

        if ($confirmPass !== $password) {
            return back()->with('error', 'Gagal mengganti passwrod. Pastikan password sama dengan konfirmasi password');
            return false;
        }

        $password = bcrypt($request->password);

        $user->password = $password;

        $user->update();
        $request->session()->flash('successUpdatePass', 'Password Berhasil Dirubah, silahkan login');
        return redirect('/login');
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
