<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function profil()
    {
        return view('profil');
    }

    public function dashboard(){
        if (Auth::user()->level=='1') {
        //  $redirectTo = '/dashboardAgen';  // code...
        return view('dashboardAdmin');
        }else if(Auth::user()->level=='2') {
        //$redirectTo = '/dashboardPengusaha';
        return view ('dashboardSeni');
        }else if(Auth::user()->level=='3') {
        //$redirectTo = '/dashboardPengusaha';
        return view ('dashboardUser');
        }

  }
}
