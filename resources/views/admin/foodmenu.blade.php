<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
  <div style="position: relative; top:60px;right:-150px">
    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
        @csrf
     <div><label>title</label>
    <input type = "text" name = "name" placeholder="Write a title" required></div>   
    <div><label>price</label>
    <input type = "text" name = "price" placeholder="Price" required></div>   
    <div><label>image</label>
    <input type = "file" name = "image"  required></div>   
    <div><label>description</label>
    <input type = "text" name = "description" placeholder="Description" required></div>  
    <div>
        <input style="background-color: aliceblue; color:black" type ="submit" value = "Save">
    </div> 
    
</form>
  <div>
<table bgcolor="black">
<tr>
<th style="padding:30px">Food Name</th>
<th style="padding:30px">Price</th><th style="padding:30px">Description</th><th style="padding:30px">Image</th><th style="padding:30px">Action</th><th style="padding:30px">Action2</th>

</tr>


@foreach($data as $data)
<tr align="center">
  <td>{{$data->name}}</td>
  <td>{{$data->price}}</td>
  <td>{{$data->description}}</td>
  <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td><td><a href ="{{url('/deletemenu',$data->id)}}">Delete</td>

  <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td><td><a href ="{{url('/updatemenu',$data->id)}}">Update</td>

</tr>
@endforeach
</table>



  </div>










  </div>




    </div>
    
    @include("admin.adminscript")
       
  
  </body>
</html>