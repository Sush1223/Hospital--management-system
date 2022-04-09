
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

        <div style="padding: 100px;  align-items:center" >

            <table>

                <tr style="background-color:black">
                    <th style="padding: 15px;">Patient_Name</th>
                    <th style="padding: 15px;">Email</th>
                    <th style="padding: 15px;">Phone</th>
                    <th style="padding: 15px;">Doctor_Name</th>
                    <th style="padding:15px">Message</th>
                    <th style="padding: 15px;">Status</th>
                    <th style="padding:15px">Approved</th>
                    <th style="padding: 15px;">Cancelled</th>
                    <th style="padding: 15px;">Send_Mail</th>
                </tr>

                @foreach($data as $appoint)
                <tr align="center" style="background-color:skyblue;">
                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->phone}}</td>
                    <td>{{$appoint->doctor}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->status}}</td>
                    <td><a href="{{url('approved',$appoint->id)}}" class="btn btn-success">Approved</a></td>
                    <td><a href="{{url('cancelled',$appoint->id)}}" class="btn btn-danger">Cancelled</a></td>
                    <td><a href="{{url('emailview',$appoint->id)}}" class="btn btn-primary">Send Mail</a></td>
                </tr>

                @endforeach


            </table>
        </div>

        </div>s
    
      
      </div>
      
    @include('admin.script')
  </body>
</html>