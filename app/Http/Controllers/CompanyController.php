<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;
use App\Models\db;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = companies::paginate(6);

        return view('companies.companyList', [
            'company' => $company
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('companies.companyAdd',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $company = new companies;
        // $company->name = $request->input('name');
        // $company->CEO = $request->input('CEO');
        // $company->pvm_code = $request->input('pvm_code');
        // $company->address = $request->input('address');
        // $company->phone_number = $request->input('phone_number');
        // $company->email = $request->input('email');
        // $company->description = $request->input('description');
        // $company->save();

        $company = companies::create([
            'name' => $request->input('name'),
            'CEO' => $request->input('CEO'),
            'pvm_code' => $request->input('pvm_code'),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            'description' => $request->input('description')

        ]);

        return redirect('/companies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = companies::find($id);

        return view('companies.edit')->with('company', $company);
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
        $company = companies::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'CEO' => $request->input('CEO'),
                'pvm_code' => $request->input('pvm_code'),
                'address' => $request->input('address'),
                'phone_number' => $request->input('phone_number'),
                'email' => $request->input('email'),
                'description' => $request->input('description')

        ]);

        return redirect('/companies');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(companies $company)
    {
        $company->delete();

        return redirect('/companies');
    }
}
