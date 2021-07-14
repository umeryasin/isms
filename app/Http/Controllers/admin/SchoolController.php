<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function addSchool()
    {
        return view('admin.school.add_school_index');
    }
    public function schoolView()
    {
        return view('admin.school.view_school_index');
    }
}
