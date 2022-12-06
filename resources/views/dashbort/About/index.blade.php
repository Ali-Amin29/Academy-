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

        <th>#</th>
         <th>descption</th>
         <th>about us</th>
         <th>slider </th>
         <th>slider</th>
         <th>show</th>

         <th>update</th>
         <th>delete</th>
       </tr>
     </thead>
     <tbody> 
          @foreach ($abouts as $about )
               
          

       <tr>
        <td style="width:30px">{{$about->id}}</td>

          <td>
            <p style="width:200px;overflow:hidden">
            {{$about->descrption}}
            </p>
          </td>
        </div>

         <td><img width="80px"height="60px" src="{{ asset('About/'.$about->image1) }}" alt="" srcset=""></td>
         <td><img width="80px"height="60px" src="{{ asset('About/'.$about->image2) }}" alt="" srcset=""></td>
         <td><img width="80px"height="60px" src="{{ asset('About/'.$about->image3) }}" alt="" srcset=""></td>
{{-- -----------------------------------SHOW ------------------- --}}
         <td>
          <form action="{{route('About.show',$about->id)}}" method="get">
          <button class="btn btn-warning"><i class="fa-solid fa-eye"></i> show</button>
     </form>
     </td>
{{-- -----------------------------------END SHOW ------------------- --}}
{{-- -----------------------------------UPDATE ------------------- --}}

         <td>
          <form action="{{route('About.edit',$about->id)}}" method="get">
          <button class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> update</button>
          </form>
     </td>
{{-- -----------------------------------END UPDATE ------------------- --}}
{{-- -----------------------------------DELETE ------------------- --}}

         <td>
          <form action="{{route('About.destroy',$about->id)}}" method="POST">
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