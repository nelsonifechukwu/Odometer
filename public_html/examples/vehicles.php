 <?php
require_once('../backend/header-client.php');
include('../backend/create_vehicle.php');
?> 



<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/FleetMA favicon.png">
  <title>
    FleetMA | Vehicles
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
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-normal">
            <img style="width: 80%;" src="../assets/img/logo.png" alt="">
          </a>
        </div>
        <ul class="nav">
          <li>
            <a href="./dashboard.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active">
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
          <li>
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
            <a href="./allocationsphp">
              <i class="tim-icons icon-badge"></i>
              <p>Allocations</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" data="blue">
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
            <a class="navbar-brand" href="javascript:void(0)">Vehicle Overview</a>
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
          <div class="col-md-9">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">Vehicles </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive table-hover">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>VIN</th>
                        <th>Name</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>License no.</th>
                  
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php include('../backend/get_vehicles.php');

                    if($query_vehicles){

                    while($vehicles = mysqli_fetch_assoc($query_vehicles)){

                    ?>
                    <tr>
                    
                      <td><?php echo $vehicles['VIN']; ?></td>
                      <td><?php echo $vehicles['vehicle_name']; ?></td>
                      <td><?php echo $vehicles['vehicle_model']; ?></td>
                      <td><?php echo $vehicles['model_year']; ?></td>
                      <td><?php echo $vehicles['license_number']; ?></td>
                     
                    
                    </tr>
                    
                    <?php }

                    }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
           <div class="col-md-3">
               <div class="card">
                   <div class="card-header">
                       <h3>Mileage Odometer</h3>
                   </div>
                   <div class="card-body">
                       <!--This is where the mileage will be-->
                            <?php include('../backend/get_distance.php');

                    if($query_distance){

                    while($distance_ = mysqli_fetch_assoc($query_distance)){

                    ?>
                    <tr>
                        DATE-TIME:
                   <h4> <td><?php echo $distance_['created_at']; ?></td> </h4>
                   
                        MILEAGE IN KM:
                    <h4>  <td><?php echo $distance_['distance']; ?></td> </h4>
                       
                       
                     
                    </tr>
                    
                    <?php }

                    }?>
                   </div>
                   <div class="card-footer">
                       <form method="post" action="">
                           <div class="form-group">
                        <input type="submit" class="btn btn-info" name="reset" id="reset" value="RESET"
                          >
                      </div>
                       </form>
                   </div>
               </div>
           </div>
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
            <a href="javascript:void(0)" target="_blank">WeSolve</a> team for a better web.
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
        <!-- <li class="button-container">
          <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
          <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
            Documentation
          </a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
          <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li> -->
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
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
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

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
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
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
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