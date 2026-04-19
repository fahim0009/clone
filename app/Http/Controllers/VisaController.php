<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visa;

class VisaController extends Controller
{
   public function show($visa_no)
{
    $visa = Visa::where('visa_no', $visa_no)->firstOrFail();
    return view('visa.show', compact('visa'));
}

public function viewVisa($id)
{
    $visa = Visa::findOrFail($id);

    return view('visa/ksa-visa', compact('visa'));
}

public function qrView(Request $request)
{
    $passport = $request->Passport;
    $appNo = $request->AppNo;

    $visa = Visa::where('passport_number', $passport)->firstOrFail();

    return view('visa.ksa-visa', compact('visa'));
}

}
