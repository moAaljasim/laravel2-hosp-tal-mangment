

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
        <div class="container-fluid page-body-wrapper ">
         <div class="container pt-40 border h-96" align="center">
            <form action="">
                
                
                <div >
                    <label for="" class="mr-5 mb-3">doctor Name</label>
                    <input type="text" placeholder="add new doc..." name="doctor Name">
                    <label for=""></label>
                </div>
                <div >
                    <label for="" class="mr-5 mb-3">room number</label>
                    <input type="text" placeholder="add new doc..." name="room number">
                    <label for=""></label>
                </div>
                <div >
                    <label for="" class="mr-3 mb-3 ">phone number</label>
                    <input type="text" placeholder="add new doc..." name="name">
                  
                </div>
            </form>
         </div>   
    </div>
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.scripts')
   
    <!-- End custom js for this page -->
  </body>
</html>
