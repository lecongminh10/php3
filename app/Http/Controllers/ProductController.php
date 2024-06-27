<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data=[
            [
                "id" =>"1",
                "name" =>"Iphone"
            ],
            [
                "id" =>"1",
                "name" =>"Iphone"
            ],
        ];

        return view('index' , ['data'=> $data]);

    }
    public function show($id){
        
    }
    
    public function edit(Request $request){
        echo $request->id;
    }
}
