
<!DOCTYPE html>
<html lang="en">



<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student Management System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('./asset/mdi/css/materialdesignicons.min.css')}})">
  <link rel="stylesheet" href="{{asset('./asset/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('./asset/rickshaw/rickshaw.min.css')}}" />
  <link rel="stylesheet" href="{{asset('./bower_components/chartist/dist/chartist.min.css')}}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('./css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.html" />
</head>
<body class="sidebar-dark">
  <!-- partial:partials/_settings-panel.html -->
  <div class="settings-panel">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
      </li>
    </ul>
    <div class="tab-content" id="setting-content">
      <div class="tab-pane fade show active" id="layouts-section" role="tabpanel" aria-labelledby="layouts-tab">
        <div class="color-tiles">
          <div class="tiles primary" id="primary-theme"></div>
          <div class="tiles success" id="success-theme"></div>
          <div class="tiles warning" id="warning-theme"></div>
          <div class="tiles danger" id="danger-theme"></div>
          <div class="tiles pink" id="pink-theme"></div>
          <div class="tiles info" id="info-theme"></div>
          <div class="tiles dark" id="dark-theme"></div>
          <div class="tiles light" id="light-theme"></div>
        </div>
       
        <div class="dropdown d-none d-md-block">
          <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="Layouts-type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Layouts
          </button>
          <div class="dropdown-menu" aria-labelledby="Layouts-type">
            <a class="dropdown-item" href="#" id="boxed-layout-view">Boxed</a>
            <a class="dropdown-item" href="#" id="compact-layout-view">Compact menu</a>
            <a class="dropdown-item" href="#" id="icon-only-layout-view">Icon Menu</a>
            <a class="dropdown-item" href="#" id="rtl-layout-view">RTL</a>
            <a class="dropdown-item" href="#" id="hidden-menu-1-layout-view">Hidden Menu 1</a>
            <a class="dropdown-item" href="#" id="hidden-menu-2-layout-view">Hidden Menu 2</a>
          </div>
        </div>
      </div>
  
    </div>
  </div>
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{URL::to('admin_dashboard')}}"><img src="{{URL::asset('images/nogor_logo.svg')}}" alt="Logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        
        
        
        <ul class="navbar-nav ml-lg-auto">
          
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-outline"></i>
              <span class="">Menu</span>
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="{{URL::to('view_profile')}}">
                <div class="sender-img">
                  <img src="{{URL::asset('images/soumik1.jpg')}}" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Admin Profile</p>
                  
                </div>
              </a>




              <a class="dropdown-item" href="{{URL::to('admin_logout')}}">
                <div class="sender-img">
                  
                  <span class="badge badge-primary">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Logout</p>
                  
                </div>
              </a>
             
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="{{URL::asset('images/soumik1.jpg')}}" alt="">
            </div>
            <div class="details">
              <p class="user-name">Soumik Nafiul Ferdous</p>
              <p class="designation">admin</p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Select</span>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('add_student')}}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Add Student</span>

              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Course Student</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('cse_stu')}}">CSE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('eee_stu')}}">EEE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('civil_stu')}}">Civil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('bba_stu')}}">BBA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('mba_stu')}}">MBA</a>
                  </li>
                </ul>
              </div>
            </li>
            <!--main pages end-->
            <!--sample pages start-->

                        <li class="nav-item">
              <a class="nav-link" href="{{URL::to('all_student')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">All Students</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#authSubmenu" aria-expanded="false" aria-controls="authSubmenu">
                <i class="mdi mdi-lock-outline menu-icon"></i>
                <span class="menu-title">Teacher Section</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="authSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('add_teacher')}}">
                      Add Teacher
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('all_teacher')}}">
                      Teacher List
                    </a>
                
                </ul>
              </div>
            </li>

            
            
            
            <!--sample pages end-->
            <!--ui features start-->
            
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            @yield('content')
     
    </div>
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('./asset/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('./asset/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('./asset/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('./nasset/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('./asset/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('./asset/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('./asset/flot/jquery.flot.categories.js')}}"></script>
  <script src="{{asset('./asset/flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('./asset/rickshaw/vendor/d3.v3.js')}}"></script>
  <script src="{{asset('./asset/rickshaw/rickshaw.min.js')}}"></script>
  <script src="{{asset('./bower_components/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{asset('./asset/chartist-plugin-legend/chartist-plugin-legend.js')}}"></script>
  <script src="{{asset('./asset/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('./asset/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <!-- End plugin js for this page-->

  <script src="{{asset('./asset/datatables.net/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('asset/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('./js/data-table.js')}}"></script>
  <!-- inject:js -->
  <script src="{{asset('./js/off-canvas.js')}}"></script>
  <script src="{{asset('./js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('./js/misc.js')}}"></script>
  <script src="{{asset('./js/settings.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('./js/dashboard_1.js')}}"></script>
  <!-- End custom js for this page-->
   <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js')}}"></script>
  
  <!-- <script>
    
    $(document).on("click", "#delete", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
      bootbox.confirm("are you want delete this",function(confirmed){
        if(confirmed){
          window.location.href=link;
        };
      });
    });
  </script> -->
</body>
</html>
