<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\LoanCondition;

class LoanConditionController extends Controller
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
        $conditions = LoanCondition::where('user_id','=',Auth::id())->orderBy('created_at', 'desc')->get();
        return view('LoanCondition.index')->with('conditions',$conditions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('LoanCondition.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $condition = new LoanCondition();
        $campos = $request->all();

        $condition->user_id = Auth::user()->id;
        $condition->sistema_id = 2;
        $condition->monto = $campos['monto'];
        $condition->interes = $campos['interes'];

        if ($campos['estado'] == 'Activo')
        {
            $condition->estado = true;
        }
        else
        {
            $condition->estado = false;
        }

        $condition->save();

        return redirect('/loancondition');
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
        $condition = LoanCondition::findOrFail($id);
        return view('LoanCondition.edit')->with('condition',$condition);
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
        $condition = LoanCondition::findOrFail($id);
        $campos = $request->all();

        $condition->monto = $campos['monto'];
        $condition->interes = $campos['interes'];

        if ($campos['estado'] == 'Activo')
        {
            $condition->estado = true;
        }
        else
        {
            $condition->estado = false;
        }

        $condition->save();

        return redirect('/loancondition');
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
