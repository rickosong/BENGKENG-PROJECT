<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AllBengkel;
use App\Models\Bengkel;

class BengkelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', [
            'bengkels' => Bengkel::where('user_id', auth()->user()->id)
        ]);
    }

    public function review()
    {
        return view('admin.review');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.daftarbengkel', [
            'allJenisBengkel' => AllBengkel::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bengkel = New Bengkel;

        $bengkel->user_id = auth()->user()->id;
        $bengkel->namabengkel = $request->name;
        $bengkel->deskripsi = $request->deskripsi;
        $bengkel->alamat = $request->alamat;
        $bengkel->layananjasa = $request->layanan;
        $bengkel->phonenumber = $request->phone;
        $bengkel->jenisbengkel_id = $request->jenis;
        $bengkel->status_id = 1;
        $bengkel->maps = $request->maps;
        $bengkel->image = $request->image;
        $bengkel->views = 0;

        $bengkel->save();

        return redirect('/dashboardbengkel');
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
        return view('admin.settings');
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
