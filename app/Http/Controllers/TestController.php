<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){

        return view('layouts.admin-dash-master');
    }

    public function index(){
        return view('layouts.frontend.pages.intro');

    }


    public function main(){
        return view('layouts.frontend.pages.main-form');

    }


}
