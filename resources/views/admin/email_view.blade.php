
<!DOCTYPE html>
<html lang="en">
  <head>

  <br><br>    
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

            <div class="container" align="center" style="padding-top: 100px;"   >
             @if(session()->has('message'))

             <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session()->get('message')}} </strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>

                


            </div>
            @endif
                <form action="{{url('sendemail',$data->id)}}" method="POST">
                    @csrf
                    <div style="padding:15px">
                        <label>Greetings</label><br>
                        <input type="text" style="color:black" name="greeting" placeholder="Write The Name" required="">
                    </div>
                    <label>Body</label><br>
                    <div style="padding:15px">
                        <input type="text" style="color:black" name="body"  required="">
                    </div>
                    
                    
                    <div style="padding:15px">
                        <label>Action Text</label><br>
                        <input type="text" style="color:black" name="actiontext" placeholder="actiontext"  required="">
                    </div>

                    <div style="padding:15px">
                        <label>Action Url</label><br>
                        <input type="text" style="color:black" name="actionurl" placeholder="actionurl"  required="">
                    </div>

                    <div style="padding:15px">
                        <label>End part</label><br>
                        <input type="text" style="color:black" name="endpart" placeholder="endpart"  required="">
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