<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    // 
    public function getFirstPage() {
        return view("finalPages.firstPage");
    }

    public function getSecondPage() {
        return view("finalPages.secondPage");
    }

}
