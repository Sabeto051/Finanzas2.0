<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\{UserLoan, LocalMessage};

class LocalMessageController extends Controller
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
        $localmessages = LocalMessage::where('prestamista_id','=',Auth::id())->orderBy('created_at', 'asc')->get();
    
        return view('LocalMessage.index',[
            'localmessages' => $localmessages
        ]);
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
        $message = LocalMessage::findOrFail($id);
        return view('LocalMessage.edit',[
            'message' => $message
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
        $message = LocalMessage::findOrFail($id);

        $loan = new UserLoan();
        $loan->prestamista_id = Auth::id();
        $loan->destinatario_id = $message->destinatario_id;
        $loan->monto = $message->monto;
        $loan->interes = $message->interes;
        $loan->sistema_id=3;
        $loan->save();

        $loan2 = new UserLoan();
        $loan2->prestamista_id = $message->destinatario_id;
        $loan2->destinatario_id = Auth::id();
        $loan2->monto = $message->monto;
        $loan2->interes = $message->interes;
        $loan2->sistema_id=3;
        $loan2->save();

        
        $message->estado = 1;
        $message->save();

        return redirect('/localmessage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = LocalMessage::find($id);
        $message->delete();
        return redirect('/localmessage');
    }
}
