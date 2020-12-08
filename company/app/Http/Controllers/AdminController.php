<?php

namespace App\Http\Controllers;

use App\PROJECT;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function get_index(){
        return view('backend.index');
    }
    public function get_CompanyName(){
        return view('backend.CompanyName');
    }
    public function get_Person(){
        return view('backend.Person');
    }
    public function post_CompanyName(Request $request){
        PROJECT::created($request->all());
    }
    public function post_Person(Request $request){
        PROJECT::created($request->all());
    }
}
