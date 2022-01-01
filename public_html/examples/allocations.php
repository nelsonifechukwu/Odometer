 <?php
require_once('../backend/header-client.php');
include('../backend/create_driver.php');
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
    FleetMA | Allocations
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
          <li >
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
          <li class="active">
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
            <a class="navbar-brand" href="javascript:void(0)">Allocations</a>
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
                  <h5 class="title">Allocate Vehicles </h5>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label>Event Name</label>
                          <input type="text" class="form-control" name="allocation_name" id="allocationName"
                            placeholder="Enter name" required>
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label>No. of Vehicles needed</label>
                          <input type="number" class="form-control" name="vehicle_number_needed" id="vehicleNumberNeeded"
                            placeholder="No. of vehicles needed" required>
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label>No. of Drivers needed</label>
                          <input type="number" class="form-control" name="driver_number_needed" id="driverNumberNeeded"
                            placeholder="No. of drivers needed" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label>Start Date</label>
                          <input type="date" class="form-control" name="start_date" id="driverNumberNeeded"
                            placeholder="start date" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label>End Date</label>
                          <input type="date" class="form-control" name="endDate" id="endDate"
                            placeholder="End Date" required>
                        </div>
                      </div>
                    </div>
                  <div class="table-responsive table-hover">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>Select vehicle</th>
                        <th>Select Driver</th>
                      </tr>
                    </thead>
                    <tbody id="allocationTable">
                        
                    </tbody>
                  </table>
                </div>
                </form>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-fill btn-info">Add</button>
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
  <script>
    let allocationTable = document.getElementById("allocationTable");
    let noOfVehiclesNeededInput = document.getElementById("vehicleNumberNeeded");
    
    noOfVehiclesNeededInput.addEventListener('blur', function (event) {
    let count = 0
    allocationTable.innerHTML = "";
     while(count < noOfVehiclesNeededInput.value){
         console.log('iterating')
         allocationTable.innerHTML +=`
            <tr>
                            <td>
                                <div class="form-group">
                        <select class="form-control" id="selectVehicle${count}">
                          <option selected>Select Vehicle...</option>
                          <?php include('../backend/get_vehicles.php');

                      if($query_vehicles){

                      while($vehicles = mysqli_fetch_assoc($query_vehicles)){
                    
                      ?>
                        <option value="<?php echo $vehicles['vehicle_name']; ?>"><?php echo $vehicles['vehicle_name']; ?> with License number : <?php echo $vehicles['license_number']; ?></option>
                      <?php }

                      }?>
                        </select>
                      </div>
                            </td>
                            <td>
                                <div class="form-group">
                        <select class="form-control" id="selectDriver${count}">
                          <option selected>Select Driver...</option>
                          <?php include('../backend/get_drivers.php');

                      if($query_users){

                      while($users = mysqli_fetch_assoc($query_users)){
                    
                      ?>
                        <option value="<?php echo $users['driver_name']; ?>"><?php echo $users['driver_name']; ?></option>
                      <?php }

                      }?>
                        </select>
                      </div>
                            </td>
                        </tr>
         `
         count++
     }
    });
  </script>
</body>

</html>