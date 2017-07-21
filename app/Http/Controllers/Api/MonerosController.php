<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MonerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moneros = \App\Monero::all();
        return [
            'success' => true,
            'data' => $moneros
        ];
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
         $monero = new \App\Monero;
         $monero->coin = trim($request->coin);
         $monero->price = trim($request->price);
         $monero->name = trim($request->name);
         if ((!empty($monero->coin)) && (!empty($monero->price)) && (!empty($monero->name))){
           $monero->save();
             return [
                 'success' => true,
                 'data' => "Coin '{$monero->coin}' was saved",
                 'coin' => $monero->coin,
                 'price' => $monero->price,
                 'name' => $monero->name
             ];
         } else {
             return [
                 'success' => false,
                 'data' => "Some error occurred"
             ];
         }

     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $monero = \App\Monero::where('coin', '=', $id)->first();
        if (!is_null($monero))
            return [
                'success' => true,
                'data' => $monero
            ];
        return [
            'success' => false,
            'data' => $id . ' not found'
        ];
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
