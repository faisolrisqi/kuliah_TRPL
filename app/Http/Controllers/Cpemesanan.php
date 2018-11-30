<?php

namespace App\Http\Controllers;
use Auth;
use App\transaksi;
use App\user;
use App\daftarSeni;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\datakesenian;
use Redirect;
use File;
class Cpemesanan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $penyedia = user::where('id', '=', $request->user_id)->first();
        $seni = datakesenian::where('id','=',$request->seni_id)->first();

        // dd($request->tanggalSewa);
        $insert = ([
            'namaKesenian'=>$seni->namaKesenian,
            'JenisKesenian'=> $seni->JenisKesenian,
            'penyedia' => $penyedia->name,
            'tarifSewa'=> $seni->tarifSewa,
            'durasiSewa' => $request->durasiSewa, 
            'tanggalSewa' => $request->tanggalSewa,
            'alamatPenyewaan'=> $request->alamatPenyewa,
            'catatan'=> $request->catatan,
            'metodePembayaran' => $request->optradio,
            'status'=> $request->status,
            'user_id'=>  Auth::User()->id,
            'seni_id' => $request->seni_id,
            'statusBayar' => $request->statusSewa,
            'noTelp' => $seni->noTelp,

            ]);
        transaksi::create($insert);
        $tampil= datakesenian::where('status','Terverifikasi')->get();
        return view ('viewKesenianPenyewa',compact('tampil'));
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
}
