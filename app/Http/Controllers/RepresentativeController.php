<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Representative;
class RepresentativeController extends Controller
{
    
    public function index()
    {
        //

        $representatives = Company::all();

        $representatives->load($this->relationships);
        return response()->json(['data' => $companys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $reques)
    {
        
        $data = request()->validate([
            'typeIdentification' => '',
            'numberIdentification' => '',
            'name' => '',
            'address' => '',
            'city' => '',
            'department' => '',
            'country' => '',
            'phone' => ''
        ]);
        $companys = Company::create($data);
        return $companys;

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

        $product = Products::findOrFail($id);
        $product->load($this->relationships);
        return response()->json(['data' => $product]);
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
