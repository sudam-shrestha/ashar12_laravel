<?php

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about", function () {
    return view("about");
});


Route::get("/companies", function () {
    $companies = Company::all();
    return view("company.index", compact("companies"));
});

Route::get("/company/create", function () {
    return view("company.create");
});

Route::post("/company/store", function (Request $request) {
    // return $request;
    $company = new Company();
    $company->name = $request->name;
    $company->email = $request->email;
    $company->phone = $request->phone;
    $company->address = $request->address;
    $file = $request->logo;
    if($file){
        $file_name = uniqid(). "." .$file->getClientOriginalExtension();
        $file->move("images", $file_name);
        $company->logo = "images/".$file_name;
    }
    $company->save();
    return redirect("/companies");
});
// ctrl+space 12345.avif
// CRUD
// C->create post
// R->read get
// U->update put/patch
// D->delete delete
