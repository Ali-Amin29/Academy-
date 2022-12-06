<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;  
use App\Models\User;
use App\Models\them;
use App\Models\About;
use App\Models\Game;
use App\Models\teams;


class UserController extends Controller
{
    public function index()
    {
        // $matchThese = ['state' => 'coach', 'state' => 'acadamy'];

        // $query->where([
        //     ['column_1', '=', 'value_1'],
        //     ['column_2', '<>', 'value_2'],
        //      ...
        // ]);
        
        // $coach="SELECT * FROM table WHERE state = 'coash'";
        
         $coach = User::where('state','acadamy')->orWhere('state','coach')->get();
 
        
        return view('welcome',compact('coach'));
    }

    public function them($id)
    {
        $users=User::find($id);

 
 
        return view('theam.index',compact('users'));
    }


}
