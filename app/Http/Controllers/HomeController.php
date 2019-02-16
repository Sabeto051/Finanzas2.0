<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

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
        $transacciones= Transaction::where('user_id','=',150)->get();
        return view('home')->with('transactions',$transacciones);
    }
}
