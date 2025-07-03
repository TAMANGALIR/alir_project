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
    // ✅ Basic validation
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required',
    ]);

    // ✅ Save to DB
    $company = new Company();
    $company->name = $request->name;
    $company->email = $request->email;
    $company->phone = $request->phone;
    $company->address = $request->address;

    // ✅ Handle logo upload
    $file = $request->logo;
    if ($file) {
        $file_name = uniqid() . "." . $file->getClientOriginalExtension();
        $file->move("Images", $file_name);
        $company->logo = "Images/" . $file_name;
    }

    $company->save();

    // ✅ Redirect to companies page
    return redirect("/companies");
});
