<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
class VehicleController extends Controller
{
    public $relationships = ['company','drivervehicles'];


    public function index()
    {
        //

        $vehicles = Vehicle::all();

        $vehicles->load($this->relationships);
        return response()->json(['data' => $vehicles]);
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
        $data = request()->validate([
            'company_id' => '',
            'plaque' => '',
            'motor' => '',
            'chassis' => '',
            'model' => '',
            'registrationDate' => '',
            'seatedPassengers' => '',
            'standingPassengers' => '',
            'weight' => '',
            'dry' => '',
            'grossWeight' => '',
            'numberDoors'=> '',
            'brand' => '',
            'line' => '',
            'state_id' => ''
        ]);
        $vehicles = Vehicle::create($data);
        return $vehicles ;
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
        $vehicle = Vehicle::findOrFail($id);
        return response()->json(['data' => $vehicle]);
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
            'company_id' => '',
            'plaque' => '',
            'motor' => '',
            'chassis' => '',
            'model' => '',
            'registrationDate' => '',
            'seatedPassengers' => '',
            'standingPassengers' => '',
            'weight' => '',
            'dry' => '',
            'grossWeight' => '',
            'numberDoors '=> '',
            'brand' => '',
            'line' => '',
            'state_id' => ''
        ]);
        $vehicle->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
    }
}
