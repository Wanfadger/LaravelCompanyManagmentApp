<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueTestController extends Controller
{
    //
    public function index(){
        return ["name" => "wanfadger" , "occupation"=>"developer"];
    }
}
