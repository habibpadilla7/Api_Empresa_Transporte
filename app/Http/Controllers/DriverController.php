<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Driver;
use App\DriverVehicle;
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
    public function store(Request $request)
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
        DB::transaction(function () use ($request){      
            
            $driver = Driver::create([
                'typeIdentification'    => $request->typeIdentification,
                'numberIdentification'  => $request->numberIdentification,
                'name'                  => $request->name,
                'address'               => $request->address,
                'city'                  => $request->city,
                'department'            => $request->department,
                'country'               => $request->country,
                'phone'                 => $request->phone
            ]);
            $driverVehicle = DriverVehicle::create([
                'driver_id'  => $driver->id,
                'vehicle_id'    => $request->vehicle_id
            ]);
        });
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
            'phone' => ''
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
