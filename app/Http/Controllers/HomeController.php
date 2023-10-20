<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leaverecods;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    //HR login Details
    public function hr_login()
    {
    return view('hr_login');
    }
    public function show_login(Request $request)
    {
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials))
        {
         $request->session()->regenerate();
         return redirect()->route('hr_home');
        }
       return back()->withErrors([
         'email'=>'credentials Do not match'
       ]);
    }
    public function hr_home()
    {
        return view('hr_home');
    }

      
   //Employee login deails
 public function employee_login()
 {
    return view('employee_login');
 }
public function emp_login(Request $request)
{
    $credentials=$request->only('email','password');
    If(Auth::attempt($credentials))
    {
      $request->session()->regenerate()  ;
      return redirect()->route('employee_home');
    }
    return back()->withErrors([
        'email'=>'credentials do not match'

    ]);

}
public function employee_home()
{
    return view('employee_home');
}
public function leave_request()
{
    return view('leave');
}
public function request_send(Request $request)
{$data=$request->all();
$request->validate([
   'type'=>'required',
   'start_date'=>'required',
   'end_date'=>'required',
   'reason'=>'required',
]);
$data['leave_status']=0;
Leaverecods::create($data);
return redirect()->route('leave_request');
}
//HR view leave records
public function view_leaverecords() 
{ 
    $data=Leaverecods::all();
    return view('view_leaverecords',compact('data'));

}
// public function adminview_products()
// {
//   $product=Product::all();
//   return view('adminview_products',compact('product'));
// }
//Leave status update
public function update_status($id)
{
 DB::table('leaverecods')->where('leave_request_id',$id)->update(['leave_status'=>1]);
 return redirect()->route('view_leaverecords');
}
//logout
public function logout()
{
    if(Auth::user()->type='HR')
    {
        Auth::logout();
        return redirect()->route('hr_login');
    }
    else
    {
        Auth::logout();
        return redirect()->route('employee_login');

    }
}
}

