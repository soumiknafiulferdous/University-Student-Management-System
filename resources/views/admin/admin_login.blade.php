<!DOCTYPE html>
<html lang="en">



<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student Management System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('asset/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('asset/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('asset/font-awesome/css/font-awesome.min.css')}}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.html" />
</head>

<body class="sidebar-dark">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Admin Login</h3>

              <p class="alert-danger">
                <?php
                   $message=Session::get('message');
                   if($message){
                   echo $message;
                   Session::put('message',null);
                 }
                ?>

              </p>
              <form method="post" action="{{url('admindashboard')}}">
                {{ csrf_field() }}
                <br>
                <div class="form-group">
                  <label>Email Address *</label>
                  <input type="text" class="form-control p_input" name="admin_user">
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input type="password" class="form-control p_input" name="admin_password">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">

                  <a href="#" class="forgot-pass"></a>
                </div>
                <br>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>

                <small class="text-center d-block"><a href="#"> </a></small>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('asset/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('asset/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('asset/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('asset/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/misc.js')}}"></script>
  <script src="{{asset('js/settings.js')}}"></script>
  <!-- endinject -->
</body>



</html>
