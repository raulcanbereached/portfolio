<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulesController extends Controller
{
    public function index(){
      return(view('templates/modules'));
    }
}
