<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    function getregister(Request $request)
    {
        //1inserted data into the database using query builder

        // DB::table('employee')->insert([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'mobile' => $request->mobile,
        // ]);
        //1till here inserted data into the database using query builder


        //2inserted data using raw sql in query builder below

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $mobile = $request->mobile;

        DB::insert('insert into employee (name, email, password, mobile) values (?,?,?,?)', [$name, $email, $password, $mobile]);
        //2till here inserted data using raw sql in query builder below


        return back()
            ->with('success', 'Registered Successfully.');
    }
}