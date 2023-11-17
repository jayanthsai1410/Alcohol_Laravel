<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href = "/public">
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
    <div style="position: relative; top:60px;right:-150px">
    <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
     <div><label>title</label>
    <input type = "text" name = "name" value = "{{$data->name}}" required></div>   
    <div><label>price</label>
    <input type = "text" name = "price" value = "{{$data->price}}" required></div>   
    <div><label>old image</label>
    <img height="200" height="200" src = "/foodimage/{{$data->image}}" >
    </div>
    <div><label>description</label>
    <input type = "text" name = "description" value = "{{$data->description}}" required></div>  
    <div>
        <input style="background-color: aliceblue; color:black" type ="submit" value = "Save">
    </div> 
    <div>
        <label>New Image</label>
        <input type="file" name = "image" required>
    </div>
</form>
  <div>



  
    </div>
    @include("admin.adminscript")
       
  
  </body>
</html>