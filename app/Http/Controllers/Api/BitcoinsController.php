<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BitcoinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bitcoins = \App\Bitcoin::all();
        return [
            'success' => true,
            'data' => $bitcoins
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
         $bitcoin = new \App\Bitcoin;
         $bitcoin->coin = trim($request->coin);
         $bitcoin->price = trim($request->price);
         $bitcoin->name = trim($request->name);
         if ((!empty($bitcoin->coin)) && (!empty($bitcoin->price)) && (!empty($bitcoin->name))){
           $bitcoin->save();
             return [
                 'success' => true,
                 'data' => "Coin '{$bitcoin->coin}' was saved",
                 'coin' => $bitcoin->coin,
                 'price' => $bitcoin->price,
                 'name' => $bitcoin->name
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
        $bitcoin = \App\Bitcoin::where('coin', '=', $id)->first();
        if (!is_null($bitcoin))
            return [
                'success' => true,
                'data' => $bitcoin
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
