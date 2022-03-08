<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;

class SingleCompanyController extends Controller
{
    public function show($companyName){
        
        $company = companies::where('name', $companyName)->get();
        //index'es are important for the 'check'

        return view('companies.singleCompany',[
            'companyNames' => $companyName,
            'single_company' => $company
        ]);
    }
}
