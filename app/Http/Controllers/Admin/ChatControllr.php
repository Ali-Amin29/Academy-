<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chat;
use Auth;
class ChatControllr extends Controller
{
    
    public function index()
    {
       $chats=Chat::where('user_id',Auth::user()->id)->get();

return view('dashbort.layouts.layout',compact('chats'));
} 

}