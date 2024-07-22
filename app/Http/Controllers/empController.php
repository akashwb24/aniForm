<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class empController extends Controller
{
    function setdata(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $mobile = $request->mobile;
        $password = $request->password;

        DB::table('employee')->insert([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'mobile' => $mobile,
        ]);

        $records = DB::table('employee')->get();
        return view('empForm', ['data' => $records])->with('msg', 'Inserted Successfully');
        //return redirect()->back()->with('msg', 'Inserted Successfully');
    }
}
