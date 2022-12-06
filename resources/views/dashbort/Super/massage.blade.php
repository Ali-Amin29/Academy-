@extends('dashbort.layouts.layout')
@section('content')

<style>
  .ahmed{
    width: 60px;
    height: 50px;
    border-radius: 50%;
 
    position: fixed ;
    bottom: 20px;
    right: 100px
  }.ahmed i{
 
    font-size:60px;
    color: #0056B3
  }
</style>
<section style="background-color: #eee;">  
     
  <div class="container py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-6">
@foreach ($massage as $massage )
  

        <div class="card" id="chat2" style="width:400px">
          <div class="card-header d-flex justify-content-between align-items-center p-3">
            <h5 class="mb-0">{{$massage->name }}</h5>
            <button type="button" class="btn btn-primary btn-sm" data-mdb-ripple-color="dark">call with me</button>
          </div>

     
          <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative;overflow-y: scroll; height: 400px;width:400px">
             
            <div class="d-flex flex-row justify-content-start">
              <img src="{{ asset('Logo/'.$massage->photo) }}"
                alt="avatar 1" style="width: 45px; height: 100%;">
              <div>
               @foreach ($All_chat as $All_chats )
                 
              
  <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">
    {{ $All_chats->content }}
                </p>
               <span style="font-size: 9px;
               color: #2c24a5"> {{ $All_chats->created_at->diffForHumans() }}</span>
                {{-- $p->created_at->diffForHumans(); --}}

                @endforeach
              </div>
            </div>
 
            <div class="d-flex flex-row justify-content-end mb-4 pt-1">
              <div>
                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Hiii, I'm good.</p>
            
                
              </div>
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava4-bg.webp"
                alt="avatar 1" style="width: 45px; height: 100%;">
            </div>

          
 
 
        
          </div>

          {{-- ------------------------------------------- --}}
          <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3" style="width: 400px">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp"
              alt="avatar 3" style="width: 40px; height: 100%;">


              <form action="{{ route('send_img_for_acdmiya') }}" method="post">
                @csrf
            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
              placeholder="Type message" name="content"> 
             
              <input type="hidden" value="{{ $massage->id }}" name="user_id"> 
              <input type="hidden" value="0" name="seen"> 
            </form>


            @endforeach


            <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
            <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a>
            <a class="ms-3" href="#!"><i class="fas fa-paper-plane"></i></a>
          </div>
        </div>

      </div>
    </div>

  </div>
   
<div class="ahmed">
  <i class="fas fa-comment"></i>
 
</div>

@endsection