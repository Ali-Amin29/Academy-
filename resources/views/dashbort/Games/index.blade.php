@extends('dashbort.layouts.layout')
@section('content')
<style>
  .action{
    width: 50px;
  }
</style>

@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
@endif

<button style="float:right" class="btn btn-success"><i class="fa-solid fa-plus"></i>  add</button>
 
<table class="table table-hover">
     <thead>
       <tr>
         <th>name</th>
         
         <th>photo</th>
         <th>shwo</th>
         <th>update</th>
         <th>delete</th>
         <th>details</th>
       </tr>
     </thead>
     <tbody> 
          @foreach ($games as $game )
               
          

       <tr>
         <td>{{$game->name}}</td>
         </div>

         <td><img width="80px"height="60px" src="{{ asset('Gemes/'.$game->photo) }}" alt="" srcset=""></td>
{{-- -----------------------------------SHOW ------------------- --}}
         <td class="action">
          <form action="{{route('Games.show',$game->id)}}" method="get">
          <button class="btn btn-warning"><i class="fa-solid fa-eye"></i>  </button>
     </form>
     </td>
{{-- -----------------------------------END SHOW ------------------- --}}
{{-- -----------------------------------UPDATE ------------------- --}}

<td class="action">
  <form action="{{route('Games.edit',$game->id)}}" method="get">
          <button class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>  </button>
          </form>
     </td>
{{-- -----------------------------------END UPDATE ------------------- --}}
{{-- -----------------------------------DELETE ------------------- --}}

<td class="action">
  <form action="{{route('Games.destroy',$game->id)}}" method="POST">
            @csrf
            {{ method_field('DELETE') }}

          <button class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i>  </button>
        </form>
        {{-- ----------------------------more detalis ----------- --}}
          <td>
            <form action="{{ route('Game_detalis.show',$game->id)}}" method="get">
            <button class="btn btn-info"><i class="fa-solid fa-file-pen"></i></button>
          </td>
       
          </form>
     </td>
     {{-- -----------------------------------END DELTE ------------------- --}}

       </tr>

      
        @endforeach
     </tbody>
   </table>

@endsection