<?php
require_once('../backend/header-client.php');
include('../backend/get_distance.php');
$page = $_SERVER['PHP_SELF'];
?> 

<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/FleetMA favicon.png" />
  <title>
    FleetMA | Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="white-body white-content">
  <div class="wrapper">
    <div class="sidebar" data="blue">
     
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-normal">
            <img style="width: 80%;" src="../assets/img/logo.png" alt="logo">
          </a>
        </div>
        <ul class="nav">
          <li class="active">
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
            <a href="./allocations.php">
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
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <div  id="navigation">
            <ul class="navbar-nav ml-auto">
              <div class="navbar-wrapper d-flex align-items-center">
                <div class="h3 display d-flex align-self-center">Welcome, CLMT</div>
              </div>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH" />
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-6">
            <div class="card card-chart">
              <div class="card-header">
                <div class="row container">
                  <h2 class="card-title text-muted font-weight-bold">Vehicle status</h2>
                </div>
              </div>
              <div class="card-body">
              <div class="row container">
                <div class="col-6">
                  <p class="lead">Active</p>
                </div>
                <div class="col-6 ">
                  <p class="lead text-right text-success">30</p>
                </div>
              </div>
              <div class="row container">
                <div class="col-6">
                  <p class="lead">Inactive</p>
                </div>
                <div class="col-6 ">
                  <p class="lead text-right text-danger">5</p>
                </div>
              </div>
              <div class="row container">
                <div class="col-6">
                  <p class="lead">In service</p>
                </div>
                <div class="col-6 ">
                  <p class="lead text-right text-warning">3</p>
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card card-chart">
              <div class="card-header">
                <div class="row container">
                  <h2 class="card-title text-muted font-weight-bold">Vehicle allocation</h2>
                </div>
              </div>
              <div class="card-body">
              <div class="row container">
                <div class="col-6">
                  <p class="lead">Allocated</p>
                </div>
                <div class="col-6 ">
                  <p class="lead text-right text-success">33</p>
                </div>
              </div>
              <div class="row container">
                <div class="col-6">
                  <p class="lead">Unallocated</p>
                </div>
                <div class="col-6 ">
                  <p class="lead text-right text-danger">5</p>
                </div>
              </div>
            </div>
            </div>
          </div>
         
        </div>
        
        <div class="row">
            <div class="col-12">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Mileage</h5>
                <div class="row container">
                  <h3 class="card-title text-info font-weight-bold"><span id="mileageValue">0</span>km</h3>
                  <h4 class="ml-auto text-muted">Status: <span id="mileageStatus"></span></h4>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="mileageChart"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header">
                <div class="row container">
                  <h3 class="card-title text-info font-weight-bold">Notifications</h3> 
                </div>
                </div>
              <div class="card-body">
                <div class="row container">
                  <div class="col-12">
                    <div class="alert alert-info">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="tim-icons icon-simple-remove"></i>
                      </button>
                      <span>You just registered 2 more vehicles</span>
                    </div>
                  </div>
                </div>
                <div class="row container">
                  <div class="col-12">
                    <div class="alert alert-warning">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="tim-icons icon-simple-remove"></i>
                      </button>
                      <span>Vehicle 5 has only 50km left before servicing</span>
                    </div>
                  </div>
                </div>
                <div class="row container">
                  <div class="col-12">
                    <div class="alert alert-danger">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="tim-icons icon-simple-remove"></i>
                      </button>
                      <span>5 cars are out of service and are still in use</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
						<div class="col-12">
							<div class="card card-tasks">
								<div class="card-header">
									<h6 class="title d-inline">Tasks(3)</h6>
									<p class="card-category d-inline">today</p>
									<div class="dropdown">
										<button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
											<i class="tim-icons icon-settings-gear-63"></i>
										</button>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
											<a class="dropdown-item" href="#pablo">Add another task</a>
											<a class="dropdown-item" href="#pablo">Take a survey</a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="table-full-width table-responsive">
										<table class="table">
											<tbody>
												<tr>
													<td>
														<div class="form-check">
															<label class="form-check-label">
																<input class="form-check-input" type="checkbox" value="" />
																<span class="form-check-sign">
																	<span class="check"></span>
																</span>
															</label>
														</div>
													</td>
													<td>
														<p class="title">Service Bus 5</p>
														<p class="text-muted">Lekki, Lagos state WA 8:47 AM</p>
													</td>
													<td class="td-actions text-right">
														<button
															type="button"
															rel="tooltip"
															title=""
															class="btn btn-link"
															data-original-title="Edit Task"
														>
															<i class="tim-icons icon-pencil"></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check">
															<label class="form-check-label">
																<input class="form-check-input" type="checkbox" value="" checked="" />
																<span class="form-check-sign">
																	<span class="check"></span>
																</span>
															</label>
														</div>
													</td>
													<td>
														<p class="title">Upgrade Vehicles</p>
														<p class="text-muted">
															Ensure to upgrade vehicles to meet global standards
														</p>
													</td>
													<td class="td-actions text-right">
														<button
															type="button"
															rel="tooltip"
															title=""
															class="btn btn-link"
															data-original-title="Edit Task"
														>
															<i class="tim-icons icon-pencil"></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check">
															<label class="form-check-label">
																<input class="form-check-input" type="checkbox" value="" />
																<span class="form-check-sign">
																	<span class="check"></span>
																</span>
															</label>
														</div>
													</td>
													<td>
														<p class="title">Service all cars due</p>
														<p class="text-muted">
															Preventive maintenance is the best.
														</p>
													</td>
													<td class="td-actions text-right">
														<button
															type="button"
															rel="tooltip"
															title=""
															class="btn btn-link"
															data-original-title="Edit Task"
														>
															<i class="tim-icons icon-pencil"></i>
														</button>
													</td>
												</tr>
											</tbody>
										</table>
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
                document.write(new Date().getFullYear());
              </script>
               made with <i class="tim-icons icon-heart-2"></i> by the
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

          // $('.fixed-plugin .background-color span').click(function () {
          //   $(this).siblings().removeClass('active');
          //   $(this).addClass('active');

          //   var new_color = $(this).data('color');

          //   if ($sidebar.length != 0) {
          //     $sidebar.attr('data', new_color);
          //   }

          //   if ($main_panel.length != 0) {
          //     $main_panel.attr('data', new_color);
          //   }

          //   if ($full_page.length != 0) {
          //     $full_page.attr('filter-color', new_color);
          //   }

          //   if ($sidebar_responsive.length != 0) {
          //     $sidebar_responsive.attr('data', new_color);
          //   }
          // });

          $('.switch-sidebar-mini input').on('switchChange.bootstrapSwitch', function () {
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

            // we simulate the window resize to enable smoother transition
            var simulateWindowResize = setInterval(function () {
              window.dispatchEvent(new Event('resize'));
            }, 180);

            // we stop the simulation of Window Resize after the transitions are completed
            setTimeout(function () {
              clearInterval(simulateWindowResize);
            }, 1000);
          });

          $('.switch-change-color input').on('switchChange.bootstrapSwitch', function () {
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
    <script>
      $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
      });
    </script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
      window.TrackJS &&
        TrackJS.install({
          token: 'ee6fab19c5a04ac1a32a645abde4613a',
          application: 'black-dashboard-free',
        });
    </script>

    
      <script>
      demo.initDashboardPageCharts = function () {

        
          gradientChartOptionsConfigurationWithTooltipPurple = { //this specifies a format of the chart
            maintainAspectRatio: false,
            legend: {
              display: false
            },

            tooltips: {
              backgroundColor: '#f5f5f5',
              titleFontColor: '#333',
              bodyFontColor: '#666',
              bodySpacing: 4,
              xPadding: 12,
              mode: "nearest",
              intersect: 0,
              position: "nearest"
            },
            responsive: true,
            scales: {
              yAxes: [{
                barPercentage: 1.6,
                gridLines: {
                  drawBorder: false,
                  color: 'rgba(29,140,248,0.0)',
                  zeroLineColor: "transparent",
                },
                ticks: {
                  suggestedMin: 0, //this specifies the minimun value on the Y axis for this particular format of the chart
                  suggestedMax: 50, //this specifies the maximum value on the Y axis for this particular format of the chart
                  padding: 20,
                  fontColor: "#9a9a9a"
                }
              }],

              xAxes: [{
                barPercentage: 1.6,
                gridLines: {
                  drawBorder: false,
                  color: 'rgba(225,78,202,0.1)',
                  zeroLineColor: "transparent",
                },
                ticks: {
                  padding: 20,
                  fontColor: "#9a9a9a"
                }
              }]
            }
          };

          
          

        //  gradientBarChartConfiguration = {
        //     maintainAspectRatio: false,
        //     legend: {
        //       display: false
        //     },

        //     tooltips: {
        //       backgroundColor: '#f5f5f5',
        //       titleFontColor: '#333',
        //       bodyFontColor: '#666',
        //       bodySpacing: 4,
        //       xPadding: 12,
        //       mode: "nearest",
        //       intersect: 0,
        //       position: "nearest"
        //     },
        //     responsive: true,
        //     scales: {
        //       yAxes: [{

        //         gridLines: {
        //           drawBorder: false,
        //           color: 'rgba(29,140,248,0.1)',
        //           zeroLineColor: "transparent",
        //         },
        //         ticks: {
        //           suggestedMin: 60,
        //           suggestedMax: 120,
        //           padding: 20,
        //           fontColor: "#9e9e9e"
        //         }
        //       }], 

        //       xAxes: [{

        //         gridLines: {
        //           drawBorder: false,
        //           color: 'rgba(29,140,248,0.1)',
        //           zeroLineColor: "transparent",
        //         },
        //         ticks: {
        //           padding: 20,
        //           fontColor: "#9e9e9e"
        //         }
        //       }]
        //     }
        //   };




        //THIS IS THE BEGINNING OF THE CHART GRAPH VALUES

        //MILEAGE CHART
          var ctx = document.getElementById("mileageChart").getContext("2d");

          var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

          gradientStroke.addColorStop(1, 'rgba(0, 131, 245,0.2)');
          gradientStroke.addColorStop(0.2, 'rgba(0, 131, 245,0.0)');
          gradientStroke.addColorStop(0, 'rgba(0, 131, 245,0)'); //purple colors

          var data = {
            labels:['jan', 'feb', 'march'], //THE X AXES LABELS. I THINK THIS SHOULD BE HOURLY OR EVERY 6 HOURS DEPENDING ON HOW YOURE COLLECTING THE DATA
            datasets: [{
              label: "Data",
              fill: true,
              backgroundColor: gradientStroke,
              borderColor: '#0083F5',
              borderWidth: 2,
              borderDash: [],
              borderDashOffset: 0.0,
              pointBackgroundColor: '#0083F5',
              pointBorderColor: 'rgba(255,255,255,0)',
              pointHoverBackgroundColor: '#d048b6',
              pointBorderWidth: 20,
              pointHoverRadius: 4,
              pointHoverBorderWidth: 15,
              pointRadius: 4,
              data: [10,15,30], //THESE ARE THE GRAPH VALUES
            }]
          };

          var myChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: gradientChartOptionsConfigurationWithTooltipPurple //THIS IS THE CHART FORMAT. THAT MEANS IF YOU WANT TO ADJUST THE MINIMUM OR MAXIMUM VALUE OF THE Y AXES OF ANY CHART, JUST LOOK FOR THIS SPECIFIC OBJECT AND CHANGE THE VALUES
          });


          var myChartData = new Chart(ctx, config);
          $("#0").click(function () {
            var data = myChartData.config.data;
            data.datasets[0].data = chart_data;
            data.labels = chart_labels;
            myChartData.update();
          });
          // $("#1").click(function() {
          //   var chart_data = [80, 120, 105, 110, 95, 105, 90, 100, 80, 95, 70, 120];
          //   var data = myChartData.config.data;
          //   data.datasets[0].data = chart_data;
          //   data.labels = chart_labels;
          //   myChartData.update();
          // });

          // $("#2").click(function() {
          //   var chart_data = [60, 80, 65, 130, 80, 105, 90, 130, 70, 115, 60, 130];
          //   var data = myChartData.config.data;
          //   data.datasets[0].data = chart_data;
          //   data.labels = chart_labels;
          //   myChartData.update();
          // });


        };
    </script>

</body>

</html>