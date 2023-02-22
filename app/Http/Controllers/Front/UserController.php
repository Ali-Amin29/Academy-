<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;  
use App\Models\User;
use App\Models\them;
use App\Models\About;
use App\Models\Game;
use App\Models\teams;
use App\Models\Detalis_game;


class UserController extends Controller
{
    public function index()
    {  
         $coach = User::where('state','acadamy')->orWhere('state','coach')->get();
        return view('welcome',compact('coach'));
    }

    public function them($id)
    {
        $users=User::find($id);
        return view('theam.index',compact('users'));
    }

    public function details_game($id)
    {
 $game=Game::find($id);
        $details=Detalis_game::where('games_id',$id)->get();
          return view('theam.detalis',compact('details','game'));
    }

}
