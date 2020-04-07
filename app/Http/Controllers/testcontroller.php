<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    public function welcome ()
    {

    	return  view ('welcome');
    }
}