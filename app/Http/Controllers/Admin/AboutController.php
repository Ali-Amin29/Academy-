<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Auth;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $abouts=About::where('user_id',Auth::user()->id)->get();
      return view('dashbort.About.index',compact('abouts'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashbort.About.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
      
        if($request->image1)
        {
            
           $img1=rand(). '.' .$request->image1->extension();
           
           $request->image1->move(public_path('About'),$img1);
        }
        if($request->image2)
        {
            
           $img2=rand(). '.' .$request->image2->extension();
           
           $request->image2->move(public_path('About'),$img2);
        }
        if($request->image3)
        {
           $img3=rand(). '.' .$request->image3->extension();
           
           $request->image3->move(public_path('About'),$img3);
        }else{
            $request['image3']=0;
        }
     
       
         $about=About::create([
    
            'descrption'=>$request['descrption'],
            'image1'=>$img1,
         
            'image2'=>$img2,
            'image3'=>$img3,
            'user_id'=>Auth::user()->id,
        ]);
        return redirect()->route('About.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $abouts=About::where('id',$id)->get();
         
        return view('dashbort.About.show',compact('abouts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abouts=About::where('id',$id)->get();
         
         return view('dashbort.About.update',compact('abouts'));
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
           $request->photo->move(public_path('About'),$img);
        }
        $abouts=About::find($id);
        $abouts->update([
            'name'=>$request['name'],
            'descrption1'=>$request['descrption'],
            'photo'=>$img,
            'user_id'=>Auth::user()->id,
        ]);
       
        return redirect()->route('About.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abouts=About::find($id);
        $abouts->delete();

        return redirect()->route('About.index');
    }
}
