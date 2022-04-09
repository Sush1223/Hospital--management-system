
<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

        

        <div class="container" align="center"  style="padding: 100px;">

        @if(session()->has('message'))

             <div class="alert alert-warning alert-dismissible fade show" role="alert">
             <strong>{{session()->get('message')}} </strong> 
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>

                


            </div>
        @endif


        <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div style="padding: 15px;">
                <label>Doctor Name</label><br>
                <input type="text" style="color:black" name="name" value="{{$data->name}}">


            </div>

            <div style="padding: 15px;">
                <label>Phone</label><br>
                <input type="tel" style="color:black" name="phone" value="{{$data->phone}}">


            </div>

            <div style="padding: 15px;">
                <label>Speciality</label><br>
                <input type="text" style="color:black" name="speciality" value="{{$data->speciality}}">


            </div>

            <div style="padding: 15px;">
                <label>Room</label><br>
                <input type="text" style="color:black" name="room" value="{{$data->room}}">


            </div>
            <div style="padding: 15px;">
                <label>old Image</label><br>
               <img height="100" width="100" src="doctorimage/{{$data->image}}">


            </div>

            <div style="padding: 15px;">
                <label>Change Image</label><br>
                <input type="file" name="file">

            </div>

            <div style="padding: 15px;">
               
                <input type="submit" value="submit" class="btn btn-primary">

            </div>
            


            </form>

        </div>
            

        


        </div>
    
      
      </div>
      
    @include('admin.script')
  </body>
</html>