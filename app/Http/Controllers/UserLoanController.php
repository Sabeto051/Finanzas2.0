<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\UserLoan;

class UserLoanController extends Controller
{   
    var $tipo = 0;

    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userloansP = UserLoan::where('prestamista_id','=',Auth::id())->orderBy('created_at', 'desc')->get();
        $userloansD = UserLoan::where('destinatario_id','=',Auth::id())->orderBy('created_at', 'desc')->get();
        
        if ($this->tipo == 0){
            $userloans = $userloansP;
        } else {
            $userloans = $userloansD;
        }
        
        return view('UserLoan.index',[
            'userloans'=> $userloans,
            'tipo'=>$this->tipo
            ]);
    }

    public function change(Request $request)
    {
        $campos = $request->all();
        if ($campos['roll'] == 'Destinatario')
        {
            $this->tipo=1;
        }
        else
        {
            $this->tipo=0;
        }
        return $this->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
