<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Auth;
 
class IndexControler extends Controller
{
     public function index()
     {
          return view('dashbort.index');
     }

     
}