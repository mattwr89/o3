<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function showPage ($test){
        $test = [
            'about' => 'Witaj w serwisie!',
            'contact' => 'Napisz do nas!'
        ];
    }
}
