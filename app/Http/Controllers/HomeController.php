<?php

namespace App\Http\Controllers;

use App\User;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Buscar las transacciones del usuario loggeado en el sistema
       $user= User::where('id','=',Auth::id())->get();
       $array['saldo']=$user[0]->saldo;
        $array['deuda']=$user[0]->deuda;
         $array['inversion']=$user[0]->inversion;
        return view('home')->with('data',$array);
    }
}
