<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FormController extends Controller
{
    function getregister(Request $request)
    {
        DB::table('employee')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'mobile' => $request->mobile,
        ]);

        return back()
            ->with('success', 'Registered Successfully.');
    }
}