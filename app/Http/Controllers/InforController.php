<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InforController extends Controller
{

    public function thongtinsv(){
        $thongtin =[
            'msv'=> 'PH40002',
            'ten'=>'Lê Công Minh',
            'email'=>'minhlcph40002@fpt.edu.vn',
            'sdt'=>'0392853609',

        ];
        return view('inforSv' , ['thongtin' =>$thongtin]);
    }
}