<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
class DepartmentController extends Controller
{
    //
    public function department(){
      $dep = Department::all();
      return view('auth.register',compact('dep'));
    }
}
