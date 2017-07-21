<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EthereumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ethereums = \App\Ethereum::all();
        return [
            'success' => true,
            'data' => $ethereums
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
         $etherum = new \App\Ethereum;
         $etherum->coin = trim($request->coin);
         $etherum->price = trim($request->price);
         $etherum->name = trim($request->name);
         if ((!empty($etherum->coin)) && (!empty($etherum->price)) && (!empty($etherum->name))){
           $etherum->save();
             return [
                 'success' => true,
                 'data' => "Coin '{$etherum->coin}' was saved",
                 'coin' => $etherum->coin,
                 'price' => $etherum->price,
                 'name' => $etherum->name
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
        $ethereum = \App\Ethereum::where('coin', '=', $id)->first();
        if (!is_null($ethereum))
            return [
                'success' => true,
                'data' => $ethereum
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
