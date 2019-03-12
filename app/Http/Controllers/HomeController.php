<?php

namespace App\Http\Controllers;

use App\User;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\UserLoan;

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

    public function actualizar()
    {
        $user= Auth::user();

        $userloansP = UserLoan::where('prestamista_id','=',Auth::id())->orderBy('created_at', 'desc')->get();
        $userloansD = UserLoan::where('destinatario_id','=',Auth::id())->orderBy('created_at', 'desc')->get();
        $transacciones= Transaction::where('user_id','=',Auth::id())->orderBy('created_at', 'desc')->get();

        $user->saldo=0;
        $user->deuda=0;
        $user->inversion=0;

        foreach ($transacciones as $transa)
        {
            if ($transa->tipo == 'Ingreso')
            {
                $user->saldo += $transa->valor;
            }
            if ($transa->tipo == 'Gasto')
            {
                $user->saldo -= $transa->valor;
            }
            if ($transa->tipo == 'Inversión')
            {
                $user->inversion += $transa->valor;
            }
        }

        foreach ($userloansP as $prest)
        {
            $user->saldo -= $prest->monto;
        }

        foreach ($userloansD as $dest)
        {
            $user->saldo += $dest->monto;
            $user->deuda += $dest->monto;
        }

        $user->save();

        return back();

    }
}
