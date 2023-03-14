

<!DOCTYPE html>
<html lang="en">    
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
     
      <!-- partial -->
    @include('admin.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper d-flex align-middle  w-full ">
           
       <div class="mt-16 p-4  " align="center"> 
      
       <table >
            <thead>
              <tr class="  bg-green bg-slate-400  mb-5">
                <th  class=" p-2 bg-black">cus name </th>
                <th class=" p-2 bg-slate-500  ">email </th>
                <th class=" p-2 bg-black">number </th>
                <th class=" p-2 bg-slate-300">doctor name </th>
                <th class=" p-2">date </th>
                <th class=" p-2">message  </th>
                <th class=" p-2">satatus </th>
                <th class=" p-2">approve </th>
                <th class=" p-2">cancel </th>
              </tr>
            </thead>
            <tbody>
            @foreach($allDoctorAppointments as $allDoctorAppointment)
            <tr  class="bg-yellow-200 color-black"> 
            <td  class=" p-3">{{ $allDoctorAppointment->name}} </th>
                <td class=" p-3">{{ $allDoctorAppointment->email}}  </th>
                <td class=" p-3">{{ $allDoctorAppointment->number}}  </th>
                <td class=" p-3">{{ $allDoctorAppointment->date}}  </th>
                <td class=" p-3">{{ $allDoctorAppointment->message}}  </th>
                <td class=" p-3">{{ $allDoctorAppointment->satatus}}   </th>
                <td class=" p-3">{{ $allDoctorAppointment->name}}  </th>
              <td> <a class="btn btn-success" href="{{url('aprove',$allDoctorAppointment->id)}}">approve</a></td>
              <td> <a class="btn btn-danger" href="{{url('cancel',$allDoctorAppointment->id)}}">cancel</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
         
       </div>
         
          
            
          
       </div>
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.scripts')
   
    <!-- End custom js for this page -->
  </body>
</html>
