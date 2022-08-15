<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Route;

class UserController extends Controller
{
    public function  __construct(){
        $this->middleware('auth')->except('showUser3'); ;
    }

   public function showuser(){
       return "Ahmed";
   }

    public function showUser3(){
        return "Ahmed";
    }
}

