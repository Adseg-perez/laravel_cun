<?php

namespace App\Http\Controllers;

use App\Marca;
use App\Producto;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $marca = Marca::find(1);
        return $marca->full_name;
        //return csrf_token();
        //jqB4LkWsQYNSeUwy2fXB3xY9vBDRmT6qucGjmRVL
        //EXkETva3Ow71BWEMrzVPDAqASaC5r47UzuJIpW3X
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marca = Marca::find(11);
        $marca->lista_producto;
        return $marca;
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    /*	return $marca->name;
    	$marca-> marca = 'Nike';
    */  $data = $request->all();
        $marca = Marca::create($data);
        return $marca;


    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
