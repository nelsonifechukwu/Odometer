 <?php
require_once('../backend/header-client.php');
include('../backend/create_vehicle.php');
?> 




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/FleetMA favicon.png">
  <title>
  FleetMA | Add Vehicle
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="white-body white-content">
  <div class="wrapper">
    <div class="sidebar" data="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper" >
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-normal">
            <img style="width: 80%;" src="../assets/img/logo.png" alt="logo">
          </a>
        </div>
        <ul class="nav">
        <li>
          <a href="./dashboard.php">
            <i class="tim-icons icon-chart-pie-36"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li>
          <a href="./vehicles.php">
            <i class="tim-icons icon-delivery-fast"></i>
            <p>Vehicle Overview</p>
          </a>
        </li>
        <li>
          <a href="./drivers.php">
            <i class="tim-icons icon-single-02"></i>
            <p>Driver Overview</p>
          </a>
        </li>
        <li  class="active">
          <a href="./add-vehicle.php">
            <i class="tim-icons icon-simple-add"></i>
            <p>
              Add Vehicle
            </p>
          </a>
        </li>
        <li>
          <a href="./add-drivers.php">
            <i class="tim-icons icon-simple-add"></i>
            <p>Add Drivers</p>
          </a>
        </li>
        <li>
            <a href="./allocations.php">
              <i class="tim-icons icon-badge"></i>
              <p>Allocations</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" data-="blue">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Add Vehicle</a>
          </div>
          <div id="navigation">
            <ul class="navbar-nav ml-auto">
              <div class="navbar-wrapper d-flex align-items-center">
                <div class="h3 display d-flex align-self-center">Welcome, CLMT</div>
              </div>
            </ul>
          </div>
        </div>
      </nav>

      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <form method="post" action="">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Add new vehicle </h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label>Vehicle Name</label>
                        <input type="text" class="form-control" name="vehicle_name" id="vehicleName" placeholder="Vehicle Name"
                        required>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                        <label>Vehicle Model</label>
                        <input type="text" class="form-control" name="vehicle_model" id="vehicleModel" placeholder="Vehicle Model"
                        required>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                        <label>Model Year</label>
                        <input type="number" class="form-control" name="model_year" id="modelYear" placeholder="Model Year"
                          required>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label> License No.</label>
                        <input type="text" class="form-control" name="license_number" id="licenseNumber" placeholder="License Number"
                        required>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label> VIN</label>
                        <input type="number" class="form-control" name="VIN" placeholder="VIN" id="VIN"
                        required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label> Section/Category</label>
                        <input type="text" class="form-control" name="section" id="section" placeholder="Section/Category"
                          >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                   <div class="col-8">
                      <div class="form-group">
                        <label>Allocate to:</label>
                        <select class="form-control" id="inputGroupSelect02">
                          <option selected>Select Driver...</option>
                          <?php include('../backend/get_drivers.php');

                      if($query_users){

                      while($users = mysqli_fetch_assoc($query_users)){
                    
                      ?>
                        <option><?php echo $users['driver_name']; ?></option>
                      <?php }

                      }?>
                        </select>
                      </div>
                   </div>
                  </div>
                  
                </form>
              </div>
              <div class="card-footer">
                <button type="submit" name="create_vehicle" class="btn btn-fill btn-info">Add</button>
              </div>
            </div>
          </form>
          </div>
          
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> made with <i class="tim-icons icon-heart-2"></i> by the
            <a href="javascript:void(0)" target="_blank">WeSolve</a> team for a better world.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu p-3">
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
        <li class="adjustments-line text-center"><a href="../backend/logout.php" class="nav-item dropdown-item"><p class="lead text-white"><i class="tim-icons icon-button-power"></i> Log Out</p></a></li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function () {
      $().ready(function () {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function (event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function () {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function () {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function () {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function () {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function () {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function () {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function () {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function () {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function () {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
</body>

</html>