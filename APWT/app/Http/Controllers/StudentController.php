<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function dashboard(){
        return view('section');
    }

    public function studentCard(){
        return view('work_card');
    }
}
