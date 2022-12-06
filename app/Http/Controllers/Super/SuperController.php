<?php

namespace App\Http\Controllers\Super;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\About;
use App\Models\Game;
use App\Models\teams;
use App\Models\Chat;
use Auth;
class SuperController extends Controller
{
     public function index()
     {
          $user=User::where('state','coach')->orwhere('state','acadamy')->get();
         
     
          return view('dashbort.Super.index',compact('user'));
     }
     
     public function  show_user($id)
     {
           
        
          $users=User::where('id',$id)->get();
         
          $abouts=About::where('user_id',$id)->get();
          $games=Game::where('user_id',$id)->get();
          $teams=teams::where('user_id',$id)->get();
        
     
          return view('dashbort.Super.show',compact('users','abouts','games','teams'));
     }

     public function massage($id)
     {
      
          $massage=User::where('id',$id)->get();
          $All_chat=Chat::where('user_id',$id)->get();
           
          return view('dashbort.Super.massage',compact('massage','All_chat'));
          
     }
     public function massage_send(Request $request)
     {
   
    
          $massage=Chat::create([
               'content'=>$request['content'],
               'user_id'=>$request['user_id'],
               'seen'=>$request['seen'],
               
          ]);
         
          return redirect()->back();
          
     }

     
     // public function get_massage()
     // {
     //      $All_chat=Chat::get();

     //      return view('dashbort.Super.massage',compact('All_chat'));
          
     // }


}