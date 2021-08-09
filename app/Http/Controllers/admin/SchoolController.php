<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;
use Validator;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::all();
        return view('admin.school.add_school_index', compact('schools'));
    }
    // public function schoolView()
    // {
    //     return view('admin.school.view_school_index');
    // }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|string|max:255|unique:schools',
            'name' => 'required|string|max:255|unique:schools',
            'phone' => 'required',
            'registration_date' => 'required|date',
            'email' => 'required',
            'logo' => 'mimes:jpeg,jpg,png,gif',
        ]);
        if($validator->fails())
        {
            $request->session()->flash('alert-danger', $validator->messages());
            return $validator->messages();
        }
        $data =  [
            "code" => $request->code,
            "name" => $request->name,
            "address" => $request->address,
            "phone" => $request->phone,
            "registration_date" => $request->registration_date,
            "email" => $request->email,
            "fax" => $request->fax,
            "footer" => $request->footer_text,
            "currency" => $request->currency,
            "currency_symbol" => $request->currency_symbol,
            "latitude" => $request->latitude,
            "longitude" => $request->longitude,
            "google_api" => $request->google_api,
            "is_rtl" => $request->is_rtl,
            "is_frontend" => $request->is_frontend,
            "logo" => null,
            "status" => 1,
        ];
        if($request->has('logo'))
        {
            $image = $request->logo;
            //$image_name = basename($image->getClientOriginalName(), '.'.$image->getClientOriginalExtension());
            $image_extension = $image->getClientOriginalExtension();
            $rand_string = $this->generateRandomString();
            $recent_time =  date('Y_m_d_H_i_s');
            $path = "assets/upload/schools";
            $final_image_name = $rand_string."_".$recent_time.".".$image_extension;
            $data["logo"] = $final_image_name;
            $image->move($path,  $final_image_name);
        }
        $school = School::create($data);
        return redirect()->back();
    }
    function generateRandomString($length = 15) 
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++)
        {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
