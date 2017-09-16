<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('isAdmin');
    }
    public function index(){
        return view ('posts.index');
        //        return ("if you've got to this page, you are an Admin");
    }

}
