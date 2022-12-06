<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\About;
use App\Models\them;
use App\Models\Game;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

session_start();


class FormAdminController extends Controller
{
    

public function first($test)
{
    if($test == "user")
    {
        $ahmed='user';
        return view('admin.one',compact('ahmed'));
    }
    if($test == "coach")
    {
        $ahmed='coach';
        return view('admin.one',compact('ahmed'));
    }
    if($test == "acdamy")
    {
        $ahmed='acadamy';
        return view('admin.one',compact('ahmed'));
    }

    else{
        return view('index');
    }
     
}
public function twoo()
{ 
    if(!isset($_SESSION['email_user']))
    {
        return view('admin.one')->withErrors('ياعم ابداء من هنا لو سمحت');

    }else{

        $get_id = User::select('id')->where('email',$_SESSION['email_user'])->get();
        $idd=$get_id[0]->id;
        $_SESSION['ID']=$idd;
 
   
        return view('admin.two');

    }
   
}
public function threee()
{
    return view('admin.three');
}
public function for()
{
    return view('admin.for');
}
public function finish()
{
    return view('admin.finsh');
}

 
// secound
public function secound(Request $request)
{

   $validate=$request->validate([
    'email'=>'unique:users',
    'password'=>'min:8|confirmed',
    'location'=>'min:8',
    
   ]);
 
   

 if($request->photo)
 {
     
    $img=time(). '.' .$request->photo->extension();
    
    $request->photo->move(public_path('Logo'),$img);
 }

 
     $user=User::create([
        'name'=>$request['name'],
        'email'=>$request['email'],
        'password'=>Hash::make($request['password']),
        'location'=>$request['location'],
        'state'=>$request['state'],
        'photo'=> $img,
       

    ]);
    $_SESSION['email_user']=$request['email'];

if($request['state'] == "user")
{
     return redirect()->route('login');
}else{
    return redirect()->route('twoo');

}




}
//third
public function two2(Request $request)
{
 return redirect()->route('two_get');
} 
 
public function store_two(Request $request)
{
    $request->validate([
        'descrption'=>['min:20'],
    ]);
 
    if($request->image1)
    {
        
       $img1=rand().time(). '.' .$request->image1->extension();
       
       $request->image1->move(public_path('About'),$img1);
    }
    if($request->image2)
    {
        
       $img2=rand(). time() .'.' .$request->image2->extension();
       
       $request->image2->move(public_path('About'),$img2);
    }
    if($request->image3)
    {
       $img3=rand().time() . '.' .$request->image3->extension();
       
       $request->image3->move(public_path('About'),$img3);
    }else{
        $img3=$img2;
    }
 
     $about=About::create([

        'descrption'=>$request['descrption'],
        'image1'=>$img1,
        'image2'=>$img2,
        'image3'=>$img3,
        'user_id'=>$_SESSION['ID'],
    ]);
    return redirect()->route('threee');
} 


public function three(Request $request)
{
    $imageName1 = rand().'.'.$request->photo1->extension();
    $request->photo1->move(public_path('Gemes'), $imageName1);
    $imageName2 = rand().'.'.$request->photo2->extension();
    $request->photo2->move(public_path('Gemes'), $imageName2); 
    $imageName3 = rand().'.'.$request->photo3->extension();
    $request->photo3->move(public_path('Gemes'), $imageName3);
 

  $data = [
['photo'=>$imageName1,'name'=>$request['name1'],'descrption1'=>$request['descrption1'],'user_id'=>$_SESSION['ID']],
['photo'=>$imageName2 ,'name'=>$request['name2'],'descrption1'=>$request['descrption2']
,'user_id'=>$_SESSION['ID']],
['photo'=>$imageName3,'name'=>$request['name3'],'descrption1'=>$request['descrption3']
,'user_id'=>$_SESSION['ID']],
   
    ];
    
     Game::insert( $data); 
     
     return redirect()->route('for');
}



public function them(Request $request)
{
  $validater=$request->validate([
    'theam'=>'required',
  ]);
 

  $theam=them::create([
        'theam'=>$request['theam'],
        'user_id'=>$_SESSION['ID'],
    ]);
    return redirect()->route('finish');
}

}
