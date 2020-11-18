<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;
class DriverController extends Controller
{
   
    public function index()
    {
        //

        $drivers = Driver::all();

        return response()->json(['data' => $drivers]);
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
            'phone' => '',
            'state_id'=> ''
        ]);
        $drivers = Driver::create($data);
        return $drivers;

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

        $driver = Driver::findOrFail($id);
        return response()->json(['data' => $driver]);
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
        $data = request()->validate([
            'typeIdentification' => '',
            'numberIdentification' => '',
            'name' => '',
            'address' => '',
            'city' => '',
            'department' => '',
            'country' => '',
            'phone' => '',
            'state_id'=> ''
        ]);
        $driver->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        $driver->delete();
    }
}
