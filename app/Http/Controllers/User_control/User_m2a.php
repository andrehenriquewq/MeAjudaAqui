<?php

namespace App\Http\Controllers\User_control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MeAjudaAqui;
class User_m2a extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problema = MeAjudaAqui::all();
        #chamar a view com
        return view('view_user.index')->with(['problema'=>$problema]);
    }

    /**
     * Show the form for creating a new resource.
     * Mostre o formulário para criar um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('view_user.create')->with(['tipos' => MeAjudaAqui::$tiposDeProblemas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      MeAjudaAqui::create($request->all());
      return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // return view('view_user.table-historico');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $problema = MeAjudaAqui::find($id);
        #dd($problema);
        return view('view_user.edit')->with(['problema'=>$problema]); // passando dados pra view
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
        $problema = MeAjudaAqui::find($id);

        $problema->update($request->all());

        return redirect()->route('user.index');
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
