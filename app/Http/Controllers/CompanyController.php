<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
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
            'representatives_id' => ''
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

        $company = Company::findOrFail($id);
        $company->load($this->relationships);
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
