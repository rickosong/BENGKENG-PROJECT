<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bengkel;
use App\Models\Review;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.landing', [
            'Bengkels' => Bengkel::all()->sortByDesc('total_rating')->take(4),
        ]);
    }

    public function home()
    {
        return view('user.home', [
            'Bengkels' => Bengkel::where('status_id', 1)->take(4)->get(),
            'bestBengkel' => Bengkel::all()->sortByDesc('total_rating')->take(4),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function caribengkel(Request $request)
    {
        $cari = $request->cari;

        $hasil = Bengkel::where('namabengkel', 'like', "%" . $cari . "%")->get();

        return view('user.caribengkel', [
            'Hasil' => $hasil,
            'cari' => $cari,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bengkelterdekat()
    {
        return view('user.bengkelterdekat', [
            'Bengkels' => Bengkel::all(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function post($id)
    {
        // for  views
        $bengkel = Bengkel::find($id);
        $viewsBengkel = $bengkel->views;

        Bengkel::where('id', $id)->update(['views' => $viewsBengkel + 1]);
        // for views end

        // for counting like and dislikes
        $likes = Review::where('bengkel_id', $id)->where('rating_id', 1)->get();
        $dislikes = Review::where('bengkel_id', $id)->where('rating_id', 2)->get();

        $likesCount = $likes->count();
        $dislikesCount = $dislikes->count();
        // counting like and dislike end

        // disini nanti tambahkan sebuah logic untuk membagi total hitung dari like dan dislike lalu hasilnya dimasukkan ke dalam field total_rating
        if ($dislikesCount != 0) {
            $totalRating = $likesCount / $dislikesCount;
            Bengkel::where('id', $id)->update(['total_rating' => $totalRating]);
        } else{
            Bengkel::where('id', $id)->update(['total_rating' => 0]);
        }

        // for check if auth user have review or not
        $allReview = Review::where('bengkel_id', $id)->where('user_id', auth()->user()->id)->get();
        $reviewCount = $allReview->count();
        // check review end

        // var_dump($review->user_id);
        
        return view('user.post', [
            'bengkel' => $bengkel,
            'allReview' => Review::where('bengkel_id', $id)->get(),
            'checkReview' => $reviewCount,
            'likes' => $likesCount,
            'dislikes' => $dislikesCount,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postreview(Request $request, $id)
    {
        $review = New Review;

        $review->user_id = auth()->user()->id;
        $review->bengkel_id = $id;
        $review->rating_id = $request->idrating;
        $review->komentar = $request->reviewtext;

        if ($review->save()) {
            return back()->with('successReview', 'Review Anda Kami Terima, Terimakasih!');
        } else{
            return back()->with('errorReview', 'Ada Kesalahan dalam review anda');
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
        //
    }
}
