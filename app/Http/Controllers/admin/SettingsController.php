<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class SettingsController extends Controller
{
    public function generalSettingsIndex()
    {
        return view('admin.settings.general_settings');
    }
    public function generalSettingsIndexPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'brand_name' => 'required',
            'brand_title' => 'required',
            'currency' => 'required',
            'currency_symbol' => 'required',
            'is_rtl' => 'required',
            'is_frontend' => 'required',
            'brand_footer' => 'required',
        ]);
        if($validator->fails())
        {
            return $request->session()->flash('alert-danger', $validator->messages());
            //return redirect()->back();
        }
        $data = [
            "brand_name" => $request->brand_name,
            "brand_title" => $request->brand_title,
            "currency" => $request->currency,
            "currency_symbol" => $request->currency_symbol,
            "is_rtl" => $request->is_rtl,
            "is_frontend" => $request->is_frontend,
            "brand_footer" => $request->brand_footer,
        ];
        if($request->has('brand_logo'))
        {
            return $request->all();
        }
        return "logo not selected";
    }
    public function paymentSettingsIndex()
    {
        return view('admin.settings.payment_settings');
    }
    public function smsSettingsIndex()
    {
        return view('admin.settings.sms_settings');
    }
    public function emailSettingsIndex()
    {
        return view('admin.settings.email_settings');
    }
    public function academicYearIndex()
    {
        return view('admin.settings.academic_year');
    }
}
