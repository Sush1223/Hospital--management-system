
<!DOCTYPE html>
<html lang="en">
  <head>

  <br><br>    
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

            <div class="container" align="center" style="padding-top: 100px;"   >
             @if(session()->has('message'))

             <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session()->get('message')}} </strong> to the data base Successfully
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>

                


            </div>
            @endif
                <form action="{{url('upload-doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px">
                        <label>Doctor Name</label><br>
                        <input type="text" style="color:black" name="name" placeholder="Doctor Name" required="">
                    </div>
                    <label>Phone</label><br>
                    <div style="padding:15px">
                        <input type="tel" style="color:black" name="number" placeholder="Phone Number" required="">
                    </div>
                    <label>Speciality</label><br>
                    <div style="padding:15px">
                        <select name="speciality" style="color:black; width: 224px;" required="">
                            <option>--Select--</option>
                            <option value="skin">skin</option>
                            <option value="heart">heart</option>
                            <option value="nose">nose</option>
                            <option value="eyes">eyes</option>



                        </select>
                    </div>
                    <div style="padding:15px">
                        <label>Room No</label><br>
                        <input type="text" style="color:black" name="room" placeholder="room"  required="">
                    </div>
                    <div style="padding:15px">
                        <label >Doctor Image</label><br>
                        <input type="file" name="file" style="width: 200px; padding:1px" required="">

                    </div>
                    <div style="padding:15px">
                        <input type="submit" value="submit" class="btn btn-success" style="width:200px;height:50px;" required="">
                    </div>

                </form>

            </div>

        </div>
    
      
      </div>
      
    @include('admin.script')
  </body>
</html>