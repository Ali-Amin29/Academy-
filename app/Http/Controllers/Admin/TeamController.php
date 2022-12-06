<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\teams;
use App\Models\Game;
use Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams=teams::where('user_id',Auth::user()->id)->get();
        return view('dashbort.Team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $games=Game::select('name','id')->where('user_id',Auth::user()->id)->get();
         
        return view('dashbort.Team.create',compact('games'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->photo)
        {
           $img=time(). '.' .$request->photo->extension();
           $request->photo->move(public_path('Team'),$img);
        }

      
       $team=teams::create([

        'name'=>$request['name'],
        'descrption'=>$request['descrption'],
        'photo'=>$img,
        'game_id'=>$request['game'],
        'user_id'=>Auth::user()->id,
        
       ]);

       return redirect()->route('Team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teams = teams::WHERE('id',$id)->get();
    
        return view('dashbort.Team.show',compact('teams'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
