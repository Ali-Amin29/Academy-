@extends('dashbort.layouts.layout')
@section('content')

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
         <th>text</th>
         <th>delete</th>
       </tr>
     </thead>
     <tbody> 
          @foreach ($user as $user )
               
          

       <tr>
         <td>{{$user->name}}</td>
         </div>

         <td><img width="80px"height="60px" src="{{ asset('Logo/'.$user->photo) }}" alt="" srcset=""></td>
{{-- -----------------------------------SHOW ------------------- --}}
         <td>
          <form action="{{route('super_show_all_user',$user->id)}}" method="get">
          <button class="btn btn-warning"><i class="fa-solid fa-eye"></i> show</button>
     </form>
     </td>
{{-- -----------------------------------END SHOW ------------------- --}}
{{-- -----------------------------------UPDATE ------------------- --}}

         <td>
          <form action="{{route('super_send_massage',$user->id)}}" method="get">
          <button class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> massage</button>
          </form>
     </td>
{{-- -----------------------------------END UPDATE ------------------- --}}
{{-- -----------------------------------DELETE ------------------- --}}

         <td>
          <form action="{{route('Games.destroy',$user->id)}}" method="POST">
            @csrf
            {{ method_field('DELETE') }}

          <button class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i> delete</button>
          </form>
     </td>
     {{-- -----------------------------------END DELTE ------------------- --}}

       </tr>

      
        @endforeach
     </tbody>
   </table>

@endsection