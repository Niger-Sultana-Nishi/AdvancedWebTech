<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class LoginController extends Controller
{
    public function Login(){
        return view('login');
    }
    public function loginSubmit(Request $request){
        $student = Student::where('username',$request->username)
                            ->where('password',$request->password)
                            ->first();

        if($student){
            $request->session()->put('user',$student);
            return redirect()->route('studentSection');
        }
        return back();
    }
    public function logout() {
        session()->forget('user');
        return redirect()->route('login');
    }
}
