<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gender;
use App\Models\BloodGroup;
use App\Models\User;
use App\Models\Teacher;
use Validator;
use Hash;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genders = Gender::where('status', 1)->get();
        $blood_groups = BloodGroup::where('status', 1)->get();
        $teachers = Teacher::with('userInfo','genderInfo','bloodGroupInfo')->get();
        //return $teachers;
        return view('admin.teacher.add_teacher_index', compact('genders','blood_groups','teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'national_id' => 'required|string|max:255|unique:teachers',
            'phone' => 'required',
            'gender_id' => 'required',
            'blood_group_id' => 'required',
            'religion' => 'required',
            'dob' => 'required|date',
            'present_address' => 'required',
            'permenent_address' => 'required',
            'salary' => 'required|numeric',
            'email' => 'required|email',
            'user_name' => 'required|string|max:255',
            'password' => 'required|max:255',
            'resume' => 'mimes:pdf,docx',
            'photo' => 'mimes:jpeg,jpg,png,gif',
        ]);
        if($validator->fails())
        {
            $request->session()->flash('alert-danger', $validator->messages());
            return $validator->messages();
        }
        $user_data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => 'teacher',
            'user_type_id' => 3,
        ];
        $user = User::create($user_data);
        $teacher_data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'national_id' => $request->national_id,
            'phone' => $request->phone,
            'gender_id' => $request->gender_id,
            'blood_group_id' => $request->blood_group_id,
            'religion' => $request->religion,
            'dob' => $request->dob,
            'present_address' => $request->present_address,
            'permenent_address' => $request->permenent_address,
            'salary' => $request->salary,
            'joining_date' => $request->joining_date,
            'other_info' => $request->other_info,
            'resume' => null,
            'photo' => null,
            'status' => 1,
            'user_id' => $user->id,
        ];
        //
        if($request->has('resume'))
        {
            $image = $request->resume;
            //$image_name = basename($image->getClientOriginalName(), '.'.$image->getClientOriginalExtension());
            $image_extension = $image->getClientOriginalExtension();
            $rand_string = $this->generateRandomString();
            $recent_time =  date('Y_m_d_H_i_s');
            $path = "assets/upload/teachers/resumes";
            $final_image_name = $rand_string."_".$recent_time.".".$image_extension;
            $teacher_data["resume"] = $final_image_name;
            $image->move($path,  $final_image_name);
        }
        if($request->has('photo'))
        {
            $image = $request->photo;
            //$image_name = basename($image->getClientOriginalName(), '.'.$image->getClientOriginalExtension());
            $image_extension = $image->getClientOriginalExtension();
            $rand_string = $this->generateRandomString();
            $recent_time =  date('Y_m_d_H_i_s');
            $path = "assets/upload/teachers/photo";
            $final_image_name = $rand_string."_".$recent_time.".".$image_extension;
            $teacher_data["photo"] = $final_image_name;
            $image->move($path,  $final_image_name);
        }
        $teacher = Teacher::create($teacher_data);
        return redirect()->back();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
