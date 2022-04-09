
<!DOCTYPE html>
<html lang="en">
  <head>
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

        <div style="padding: 100px;"  align="center">

        <table>

                <tr style="background-color:black">
                    <th style="padding: 15px;">Doctor_Name</th>
                    <th style="padding: 15px;">Phone</th>
                    <th style="padding: 15px;">Speciality</th>
                    <th style="padding: 15px;">Room_No</th>
                    <th style="padding:15px">Image</th>
                    <th style="padding:15px">Delete</th>
                    <th style="padding:15px">Update</th>
                    
                </tr>

                @foreach($data as $doctor)

                <tr align="center" style="background-color:skyblue;">
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->speciality}}</td>
                    <td>{{$doctor->room}}</td>
                    <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>
                    <td><a onclick="return confirm('Are You Sure you want to delete {{$doctor->name}}')"  class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                    <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
                </tr>

                @endforeach
        </table>        


        </div>
    </div>    
      
      </div>
      
    @include('admin.script')
  </body>
</html>