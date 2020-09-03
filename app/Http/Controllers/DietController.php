<?php

namespace App\Http\Controllers;

use App\Diet;
use Illuminate\Http\Request;

class DietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createDiet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $diet = new Diet;
       $diet->dietType = $request->dietType;
       $diet->dietDescription = $request->dietDescription;
       // dd($diet);
       $diet->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function show(Diet $diet)
    {
      return view('dietshow', [
        'diet' => $diet
      ]);    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function edit(Diet $diet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diet $diet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diet $diet)
    {
        //
    }

    public function showdiets(){
      $diets = Diet::all();

      return view('diet', compact('diets'));
    }
}
