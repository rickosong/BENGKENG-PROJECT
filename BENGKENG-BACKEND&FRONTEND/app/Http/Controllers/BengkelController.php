<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AllBengkel;
use App\Models\Bengkel;
use App\Models\Status;
use App\Models\User;
use App\Models\Review;

class BengkelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Ambil id Bengkel
        $bengkels = Bengkel::where('user_id', auth()->user()->id)->get();
        $bengkel = $bengkels[0];
        $idBengkel = $bengkel->id;
        $viewsBengkel = $bengkel->views;
        // return dump($idBengkel);

        // Ambil Semua jenis like, dislike, views, dan review disertai komentar yang bengkel_id nya sama dengan id bengkel yang lagi login
        $likes = Review::where('rating_id', 1)->where('bengkel_id', $idBengkel)->get();
        $dislikes = Review::where('rating_id', 2)->where('bengkel_id', $idBengkel)->get();
        $withComment = Review::where('komentar', '!=',  null)->where('bengkel_id', $idBengkel)->get();

        // hitung like, dislike dan review disertai komentar
        $likesCount = $likes->count();
        $dislikesCount = $dislikes->count();
        $withCommentCount = $withComment->count();

        return view('admin.index', compact('likesCount', 'dislikesCount', 'withCommentCount', 'viewsBengkel'), [
            'bengkelan' => Bengkel::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function review()
    {
        return view('admin.review', [
            'bengkelan' => Bengkel::where('user_id', auth()->user()->id)->get(),
        ]);
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
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('img'), $imageName);

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
        $bengkel->image = $imageName;
        $bengkel->views = 0;

        if ($bengkel->save()) {
            User::where('id', auth()->user()->id)->update(['havebengkel' => true]);
            return redirect('/dashboardbengkel');
        } else{
            return redirect('/daftarbengkel')->with('daftarError', 'data yang dimasukkan kurang lengkap/tidak sesuai');
        }

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
        $bengkel = Bengkel::find($id);

        return view('admin.settings',[
            'bengkelan' => Bengkel::where('user_id', auth()->user()->id)->get(),
            'bengkel' => $bengkel,
            'allJenisBengkel' => AllBengkel::all(),
            'allStatus' => Status::all(),
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
        $bengkel = Bengkel::find($id);

        $bengkel->namabengkel  =  $request->name;
        $bengkel->deskripsi  =  $request->deskripsi;
        $bengkel->alamat  =  $request->alamat;
        $bengkel->layananjasa  =  $request->layananjasa;
        $bengkel->phonenumber  =  $request->phone;
        // $bengkel->jenisbengkel_id = $request->jenisbengkel;
        // $bengkel->status_id  =  $request->status;
        $bengkel->maps = $request->maps;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('img'), $imageName);
            
            $bengkel->image = $imageName;
        } else {
            $bengkel->image = $bengkel->image;
        }

        if ($request->has('jenisbengkel')) {
            
            $bengkel->jenisbengkel_id = $request->jenisbengkel;
        } else {
            $bengkel->jenisbengkel_id = $bengkel->jenisbengkel_id;
        }

        if ($request->has('status')) {
            
            $bengkel->status_id = $request->status;
        } else {
            $bengkel->status_id = $bengkel->status_id;
        }

        if ($bengkel->save()) {
            return back()->with('success', 'Data Berhasil Terupdate');
        }
        else{
            return back()->with('error', 'Data Tidak Berhasil Terupdate');
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
        $bengkel = Bengkel::find($id);

        if($bengkel->delete()){
            echo "<script>alert('Data berhasil dihapus')</script>";
            User::where('id', auth()->user()->id)->update(['havebengkel' => false]);
            return redirect('/home');
        }
        else{
            return back()->with('errorDel', 'Data Tidak Berhasil Terhapus');
        }
    }
}
