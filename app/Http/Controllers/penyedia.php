<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\transaksi;
use App\user;
use App\datakesenian;
use Redirect;

class penyedia extends Controller
{
    public function home()
	{
		return view('dashboardSeni');
	}
	public function profil()
    {
        return view('profilPenyedia', compact(Auth::user()->id));
    }
    public function updateProfil(Request $request, $id){
		$prof=user::find($id);
		$prof->name= $request->name;
		$prof->nameB= $request->nameB;
		$prof->email= $request->email;
		$prof->alamat= $request->alamat;
		$prof->kodeP= $request->kodeP;
		$prof->noHp= $request->noHp;
  		$prof->save();
  		
  		return Redirect::back();
	}
	public function updatePassword(Request $request, $id){
		$prof=user::find($id);
  		$prof->password = bcrypt($request->password);
  		$prof->save();
  		return Redirect::back();
	}
	public function viewKesenian()
    {
        $tampil= datakesenian::where('user_id',Auth::User()->id)->get();
        return view('viewKesenianPenyedia',compact('tampil'));
    }
    public function formKesenian()
    {
        return view('formKesenian');
    }
    
}
