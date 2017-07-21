<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DollarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dollars = \App\Dollar::all();
        return [
            'success' => true,
            'data' => $dollars
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
         $dollar = new \App\Dollar;
         $dollar->coin = trim($request->coin);
         $dollar->price = trim($request->price);
         $dollar->name = trim($request->name);
         if ((!empty($dollar->coin)) && (!empty($dollar->price)) && (!empty($dollar->name))){
           $dollar->save();
             return [
                 'success' => true,
                 'data' => "Coin '{$dollar->coin}' was saved",
                 'coin' => $dollar->coin,
                 'price' => $dollar->price,
                 'name' => $dollar->name
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
        $dollar = \App\Dollar::where('coin', '=', $id)->first();
        if (!is_null($dollar))
            return [
                'success' => true,
                'data' => $dollar
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
