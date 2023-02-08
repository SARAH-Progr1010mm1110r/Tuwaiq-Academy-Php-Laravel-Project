<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//To be able to read the data from the dataset
use Illuminate\Support\Facades\DB;



class PhoneAppController extends Controller
{
    //Create Function To Print Welcome word on the screen
    public function GitWelcome()
    {

          $phone=[
            ['Type'=>'iPhone','Price'=>3500,'Color'=>'Black'],
            ['Type'=>'Samsung','Price'=>2500,'Color'=>'White'],
            ['Type'=>'Huwaui','Price'=>1100,'Color'=>'Blue']
           ];

      // dd($phone); 
       
       //return as json format
       //return Response()->json($phone);

       return view('welcome',["phone"=>$phone]);
       //dd("Welcome");
    }

    public function GitPhoneData()
    {

        $phone=DB::table('products')->get();
         // dd($phone); 
        return view('showphone',["phone"=>$phone]);
    }

    public function GitPhoneDataid($id)
    {
        $phone = DB::table('products')->find($id);

        return view('checkout',["phone"=>$phone]);

    }

    public function Getinvoice(Request $request)
    {
        /*
        dd($request);
        echo($request->name); 
        echo "<br>"; 
        echo($request->address); 
        echo "<br>"; 
        echo($request->email); 
        */
        

        $price=$request->price;
        $QTY=1;
        $total=$price*$QTY;
        $tax=$total*0.15;
        $Alltotal=$total+$tax;
        $dis=0;
        $net=$Alltotal-$dis;
        $invoicdate=date("Y-m-d");
        $costName=$request->name;
        $productname=$request->productname;

        //dd($invoicdate);

        $row=[
            'CostName'=> $costName,
            'InvDate'=> $invoicdate,
            'ProductName'=> $productname,
            'Price'=> $price,
            'Quantity'=> $QTY,
            'Tax'=> $tax,
            'Discount'=> $dis,
            'Net'=> $net
        ];

        DB::table('invoic')->insert($row);

        $datainv=DB::table('invoic')->orderBy('id','desc')->first();

        return view('invoic',['inv'=>$datainv]); 

        //return view('invoic');
        
       // $row=["Name"=>"Aseel","Email"=>"aseel@gmail.com"];
      //DB::table('testone')->insert($row);

    }

}
