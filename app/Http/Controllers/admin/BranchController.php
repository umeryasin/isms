<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Branch;
use App\Models\User;
use Validator;
use Hash;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::with('schoolInfo','userInfo')->get();
        $schools = School::where('status', 1)->get();
        return view('admin.branch.add_branch_index', compact('schools','branches'));
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
            'school_id' => 'required|integer',
            'code' => 'required|string|max:255|unique:branches',
            'name' => 'required|string|max:255|unique:branches',
            'phone' => 'required',
            'registration_date' => 'required|date',
            'email' => 'required|email',
            'is_online_admission' => 'required|integer',
            'first_name' => 'required',
            'user_name' => 'required|unique:users',
            'login_email' => 'required|email|unique:users,email',
            'password' => 'required',
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
            'email' => $request->login_email,
            'password' => Hash::make($request->password),
            'user_type' => 'branch_admin',
            'user_type_id' => 2,
        ];
        $user = User::create($user_data);
        $branch_data = [
            'school_id' => $request->school_id,
            'code' => $request->code,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'registration_date' => $request->registration_date,
            'email' => $request->email,
            'fax' => $request->fax,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'google_api' => $request->google_api,
            'zoom_api_key' => $request->zoom_api_key,
            'zoom_secret_key' => $request->zoom_secret_key,
            'is_online_admission' => $request->is_online_admission,
            'facebook_url' => $request->facebook_url,
            'twitter_url' => $request->twitter_url,
            'linkedin_url' => $request->linkedin_url,
            'youtube_url' => $request->youtube_url,
            'instagram_url' => $request->instagram_url,
            'user_id' => $user->id,
            'status' => 1,
        ];
        $branch = Branch::create($branch_data);
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
}
