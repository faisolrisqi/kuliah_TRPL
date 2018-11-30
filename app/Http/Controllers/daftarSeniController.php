<?php

namespace App\Http\Controllers;
use Auth;
use App\transaksi;
use App\user;
use App\daftarSeni;
use Illuminate\Http\Request;
use App\datakesenian;
use Redirect;
use File;

class daftarSeniController extends Controller
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
        $file       = $request->file('foto');
        $fileName   = $file->getClientOriginalName();
        $file->move("image/seni/",$fileName);

        $filenya       = $request->file('fotoSeni');
        $namafile   = $file->getClientOriginalName();
        $filenya->move("image/seni/",$namafile);

        $insert = ([
            'namaKesenian'=> $request->namaKesenian,
            'JenisKesenian'=> $request->JenisKesenian,
            'tarifSewa'=> $request->tarifSewa,
            'noTelp'=> $request->noTelp,
            'alamat'=> $request->alamat,
            'deskripsi'=> $request->deskripsi,
            'user_id'=>  Auth::User()->id,
            'foto'=> $fileName,
            'status'=> $request->status,
            'statusSewa' => $request->statusSewa,
            'fotoSeni'=> $namafile,

            ]);
        datakesenian::create($insert);

        return view ('dashboardSeni');
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
    public function show()
    {
        
        return view ('formKesenianTambah');
    }
    public function view($id)
    {
        $viewkes = datakesenian::find($id);
        //dd($viewkes);
        return view ('formKesenian', compact('viewkes'));
    }

    public function viewAdmin($id)
    {
        $viewkes = datakesenian::find($id);
        //dd($viewkes);
        return view ('verifAdmin', compact('viewkes'));
    }

    public function viewPenyewa($id)
    {
        $viewkes = datakesenian::find($id);
        //dd($viewkes);
        return view ('sewaSeni', compact('viewkes'));
    }
    
     public function viewTransaksi($id)
    {
        $viewkes = datakesenian::find($id);
        //dd($viewkes);
        return view ('lanjutTransaksi', compact('viewkes'));
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
    public function updateKesenian(Request $request, $id)
    {
        $prof=datakesenian::find($id);
        $prof->namaKesenian= $request->namaKesenian;
        $prof->JenisKesenian= $request->JenisKesenian;
        $prof->tarifSewa= $request->tarifSewa;
        $prof->noTelp= $request->noTelp;
        $prof->alamat= $request->alamat;
        $prof->deskripsi= $request->deskripsi;
        $prof->user_id= Auth::User()->id;
        

        if ($request->file('foto') == null or $request->file('fotoSeni') == null){
            $prof->foto=$prof->foto;
            $prof->fotoSeni=$prof->fotoSeni;
        }
        else{
            
            // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
            File::delete('image/seni/.$prof->foto');
            $file       = $request->file('foto');
            $fileName   = $file->getClientOriginalName();
            $request->file('foto')->move("image/seni/",$fileName);

            File::delete('image/seni/.$prof->fotoSeni');
            $filenya       = $request->file('fotoSeni');
            $namafile   = $filenya->getClientOriginalName();
            $request->file('fotoSeni')->move("image/seni/",$namafile);

            $prof->fotoSeni =$namafile; 
            $prof->foto= $fileName;
        }
        //dd($prof->foto);
        $prof->save();

        return app('App\Http\Controllers\penyedia')->viewKesenian();
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
    public function updateVerif(Request $request, $id)
    {
        $prof=datakesenian::find($id);
        $prof->status= $request->status;
        //dd($prof->foto);
        $prof->save();

        return app('App\Http\Controllers\admin')->viewKesenian();
    }
}
