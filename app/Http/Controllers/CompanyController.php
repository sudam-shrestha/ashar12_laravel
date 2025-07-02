<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view("company.index", compact("companies"));
    }

    public function store(Request $request)
    {
        // return $request;
        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->address = $request->address;
        $file = $request->logo;
        if ($file) {
            $file_name = uniqid() . "." . $file->getClientOriginalExtension();
            $file->move("images", $file_name);
            $company->logo = "images/" . $file_name;
        }
        $company->save();
        return redirect("/companies");
    }
}
