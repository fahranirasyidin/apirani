<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BabSatuController extends Controller
{
    public function a1(){
        $artikel=Artikel::where('id',17)->where('users_id',160);

        return $artikel;
  }
    public function a2(){
        
    }
}
