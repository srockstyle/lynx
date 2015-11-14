<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class WelcomeController extends BaseController
{
    public function getIndex(){
      return view('welcome.index');
    }

}
