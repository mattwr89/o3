<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  
   public function show($test){
        $strona = [
            'about' => 'Witaj w serwisie!',
            'contact' => 'Napisz do nas!'
        ];
        return $strona[$test];
    }
}
