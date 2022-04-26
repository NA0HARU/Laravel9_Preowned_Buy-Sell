<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        //echo "Index Funtion";
        return view('home.index');
}
    public function test(){
        return view('home.test');
    }
    public function param($id,$number)
    {
        //echo "Parameter 1 :",$id;
        //echo "<br>Parameter 2 :",$number;
        //echo "<br>Sum parameters :",$id+$number;
        return view('home.test2',
            [
            'id' => $id,
                'number'=> $number
        ]);
    }
    public function save(Request $request)
    {
        echo "Save Funtion<br>";
        echo "Name:",$_REQUEST["fname"];
        echo "<br>Surname:",$_REQUEST["lname"];
    }
}
