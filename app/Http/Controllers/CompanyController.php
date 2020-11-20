<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Company;
use App\Representative;
class CompanyController extends Controller
{

    public $relationships = ['vehicles','vehicles.drivervehicles'];


    public function index()
    {
        //

        $companys = Company::all();

        $companys->load($this->relationships);
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
            'phone' => '',
        ]);

        DB::transaction(function () use ($request){

            //RepresentativeController::store($request);
            
            $representante = Representative::create([
                'typeIdentification'    => $request->repreLTypeIdentification,
                'numberIdentification'  => $request->repreLNumberIdentification,
                'name'                  => $request->repreLName,
                'address'               => $request->repreLAddress,
                'city'                  => $request->repreLCity,
                'department'            => $request->repreLDepartment,
                'country'               => $request->repreLCountry,
                'phone'                 => $request->repreLPhone
            ]);
            $company = Company::create([
                'typeIdentification'    => $request->typeIdentification,
                'numberIdentification'  => $request->numberIdentification,
                'name'                  => $request->name,
                'address'               => $request->address,
                'city'                  => $request->city,
                'department'            => $request->department,
                'country'               => $request->country,
                'phone'                 => $request->phone,
                'representative_id'     => $representante->id
            ]);
        });


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

        $company = Company::findOrFail($id);
        $company->load($this->relationships);
        return response()->json(['data' => $company]);
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
            'representatives_id' => ''
        ]);
        $company->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
    }
}
