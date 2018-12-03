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
    public function create(Request $request, $id)
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
            'statusBayar' => $request->statusBayar,
            'noTelp' => $seni->noTelp,

            ]);
        transaksi::create($insert);

        $prof=datakesenian::find($id);
        $prof->statusSewa='Disewa';
        $prof->save();

        $show= datakesenian::where('statusSewa','Belum disewa')->get();
        return view ('viewKesenianPenyewa',compact('show'));
    }

    public function viewTransaksi()
    {

        $muncul= transaksi::where('penyedia',Auth::User()->name)->where('status','Belum Diterima')->orderBy('id_Sewa','desc')->get();
        $muncul2= transaksi::where('penyedia',Auth::User()->name)->where('status','Diterima')->orderBy('id_Sewa','desc')->get();
        return view('viewTransaksiPenyedia',compact('muncul','muncul2'));
    }

    public function terimaPenyedia(Request $request, $id)
    {
        
        $prof=transaksi::where('id_Sewa','=',$id)->update(['status' => 'Diterima']);

        $muncul= transaksi::where('penyedia',Auth::User()->name)->where('status','Belum Diterima')->orderBy('id_Sewa','desc')->get();
        $muncul2= transaksi::where('penyedia',Auth::User()->name)->where('status','Diterima')->orderBy('id_Sewa','desc')->get();
        return view('viewTransaksiPenyedia',compact('muncul','muncul2'));
    }


    public function viewTransaksiAdmin()
    {
        $muncul= transaksi::where('status','Diterima')->orderBy('id_Sewa','desc')->get();
        return view('viewTransaksiPenyedia',compact('muncul'));
    }


    public function viewTransaksiPenyedia()
    {
        $muncul= transaksi::where('status','Diterima')->orderBy('id_Sewa','desc')->get();
        return view('viewTransaksiPenyedia',compact('muncul'));
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
