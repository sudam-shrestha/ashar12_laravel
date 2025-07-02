<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PageController;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name("welcome");

Route::get("/about", [PageController::class, 'about'])->name("about");


Route::get("/companies", [CompanyController::class, 'index']);

Route::get("/company/create", function () {
    return view("company.create");
});

Route::post("/company/store", [CompanyController::class, 'store']);


Route::get("/company/edit/{id}", function ($id) {
    $company = Company::find($id);
    return view("company.edit", compact('company'));
})->name("company.edit");

Route::patch("/company/update/{id}", function (Request $request, $id) {
    // return $request;
    $company = Company::find($id);
    $company->name = $request->name;
    $company->email = $request->email;
    $company->phone = $request->phone;
    $company->address = $request->address;
    $file = $request->logo;
    if ($file) {
        if ($company->logo) {
            unlink($company->logo);
        }
        $file_name = uniqid() . "." . $file->getClientOriginalExtension();
        $file->move("images", $file_name);
        $company->logo = "images/" . $file_name;
    }
    $company->save();
    return redirect()->back();
});

Route::delete("/company/delete/{id}", function ($id) {
    $company = Company::find($id);
    if ($company->logo) {
        unlink($company->logo);
    }
    $company->delete();
    return redirect()->back();
});
// ctrl+space 12345.avif
// CRUD
// C->create post
// R->read get
// U->update put/patch
// D->delete delete
