<?php

namespace App\Http\Controllers;

use App\Tercero;

use Illuminate\Http\Request;

use App\Http\Requests\CreateTerceroRequest;


class TerceroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terceros= Tercero::orderBy('id','asc')->paginate();
        return view('terceros.index',compact('terceros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terceros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTerceroRequest $request)
    {
        $tercero = Tercero::create($request->all());
        return redirect('terceros');
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
        $terceros = Tercero::find($id);
        return view('terceros.edit',compact('terceros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,CreateTerceroRequest $request)
    {
        $terceros = Tercero::find($id);
        $terceros->update($request->all());
        return redirect('terceros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $terceros=Tercero::find($id);
        $terceros->delete();
        return redirect("terceros");
    }
}
