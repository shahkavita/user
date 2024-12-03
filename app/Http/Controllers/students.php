<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class students extends Controller
{
    //
    public function show_student()
    {
        $s1 = DB::table('students')->select()->get();
        return view('studentlist',['data'=>$s1]);
    }
    public function registerstudent(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'city'=>'required',
            'gender'=>'required',
            'phone'=>'required',
        ]);
        return $req->all();
    }
}
