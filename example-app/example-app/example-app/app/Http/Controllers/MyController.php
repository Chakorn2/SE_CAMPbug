<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvar = "hello World";

    function __construct(){

    }
    public function index(){
        //echo $this->myvar;
        return view('home');

    }
    public function store(Request $req){
        echo $data['myinput'] = $req->input('myinput');
        return view('myroute', $data);
    }
}
