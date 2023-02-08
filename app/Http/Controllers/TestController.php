<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
        //Create Function 
        public function GetHomePage()
        {
           $phone=[
            ['Type'=>'iPhone','Price'=>3500,'Color'=>'Black'],
            ['Type'=>'Samsung','Price'=>2500,'Color'=>'White'],
            ['Type'=>'Huwaui','Price'=>1100,'Color'=>'Blue']
           ];

           return Response()->json($phone);

           return view('welcome',["phone"=>$phone]);
        }
}
