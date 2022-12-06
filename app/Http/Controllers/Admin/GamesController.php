<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use Auth;
class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $games=Game::where('user_id',Auth::user()->id)->get();
      return view('dashbort.Games.index',compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashbort.Games.create');
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
           $request->photo->move(public_path('Gemes'),$img);
        }
        
        $games=Game::create([
            'name'=>$request['name'],
            'descrption1'=>$request['descrption'],
            'photo'=>$img,
            'user_id'=>Auth::user()->id,
        ]);
        return redirect()->route('Games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $games=Game::find($id);
          
        return view('dashbort.Games.show',compact('games'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $games=Game::where('id',$id)->get();
         
         return view('dashbort.Games.update',compact('games'));
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
        if($request->photo)
        {
           $img=time(). '.' .$request->photo->extension();
           $request->photo->move(public_path('Gemes'),$img);
        }
        $games=Game::find($id);
        $games->update([
            'name'=>$request['name'],
            'descrption1'=>$request['descrption'],
            'photo'=>$img,
            'user_id'=>Auth::user()->id,
        ]);
       
        return redirect()->route('Games.index');

    }

    public function detalis($id)
    {
        return $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $games=Game::find($id);
        $games->delete();

        return redirect()->route('Games.index');
    }
}
