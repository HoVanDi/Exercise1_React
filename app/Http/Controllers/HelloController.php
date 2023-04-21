<?php

namespace App\Http\Controllers;  //namespace nơi lưu trữ

use Illuminate\Http\Request;

class HelloController extends Controller
{
public function xinchao(){
    $title = "đây là tiều đê ";
    $di ="Đi đẹp trai";
    $huu =" không đẹp trai";
    $arr =['title'=>$title,'di'=>$di, 'huu'=>$huu];
    return view('test')->with(['vien'=>$arr]);
}
}
