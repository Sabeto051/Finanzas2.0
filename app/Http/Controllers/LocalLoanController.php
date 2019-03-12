<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\{LoanCondition, LocalMessage};

class LocalLoanController extends Controller
{

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

        $loansc = LoanCondition::where('user_id','!=',Auth::id())->orderBy('created_at', 'desc')->get();
        return view('LocalLoan.index',[
            'loansc'=>$loansc
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
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
        $loanc = LoanCondition::findOrFail($id);
        return view('LocalLoan.create',[
            'loanc'=> $loanc
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
    }

    public function crearm($id)
    {
        $loanc = LoanCondition::findOrFail($id);
        $message = new LocalMessage();
        
        $message->monto = $loanc->monto;
        $message->interes = $loanc->interes;
        $message->destinatario_id= Auth::id();
        $message->prestamista_id = $loanc->user_id;
        $message->sistema_id = $loanc->sistema_id;

        $message->save();

        return redirect('/localloan');
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
