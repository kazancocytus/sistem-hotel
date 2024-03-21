<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Evergreen Hotel</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/evergreenlogobgcrop.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
    @vite('resources/css/app.css')
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        
      @include('admin.layout.sidebar_admin');

        <!-- Layout container -->
        <div class="layout-page bg-colorPrimary">
          <!-- Navbar -->
              @include('admin.layout.header_admin')
          <!-- / Navbar -->

          <!-- Content wrapper -->
        
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y ">
              
                <div class="col-lg-12 mb-4 order-0 ">
                  <div class="card  ">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h3 class="card-title text-primary text-3xl">Hello Rallyn !</h3>
                          <p class="mb-4 text-xl">
                            Welcome to Dashboard Admin Evergreen Hotel
                          </p>

                         
                          
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4 ">
                          <img
                            src="../assets/img/illustrations/woman.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Basic Bootstrap Table -->

            <div class="col-lg-12 py-3">
              <div class="card shadow">
                <div class="table-responsive rounded-lg text-nowrap">
                  <table class="table bg-colorPrimary">
                    <thead class=" bg-colorSecondary">
                      <tr class="font-josefin">
                        <th>No Reservation</th>
                        <th>Customer Name</th>
                        <th>Phone</th>
                        <th>Suites Room</th>
                        <th>Deluxe Room</th>
                        <th>Standart Room</th>
                        <th>Check-in</th>
                        <th>Check-out</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach($transaction as $transactions)
                      <tr>
                        <td>{{ $transactions->no_reservation }} </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $transactions->name }}</strong></td>
                        <td>{{ $transactions->phone }}</td>
                        <td>{{ $transactions->suite }}</td>
                        <td>{{ $transactions->deluxe }}</td>
                        <td>{{ $transactions->standart }}</td>
                        <td>{{ $transactions->check_in }}</td>
                        <td>{{ $transactions->check_out }}</td>
                        <td> ${{ $transactions->price }}</td>
                        
                           
                        <td><span class="badge {{ $transactions->check_out >= now()->subDay()->startOfDay() ? 'bg-label-warning' : 'bg-label-success' }} me-1">
                          {{ $transactions->check_out >= now()->subDay()->startOfDay() ? 'Not yet' : 'Already' }}</span></td>
                        <td>
                          
                          <div class="dropdown">
                              <a class="dropdown-item" id="delete" href="{{ route('delete.report',$transactions->id) }}"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div>

              </div>
              
              <!--/ Basic Bootstrap Table -->




            </div>
                <a href="" class="text-white bg-colorThird font-medium rounded-lg text-sm px-5 py-2 me-2 mb-5
                 focus:outline-none">Cetak Data</a>
              
              
                <!-- Expense Overview -->
              
                <!--/ Expense Overview -->
                 

                <!-- / Content -->

            @include('admin.layout.footer_admin');

            <div class="content-backdrop fade"></div>
        
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


<!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
  <script src="../assets/js/delete-pop-up.js"></script>


    @include('sweetalert::alert')
  </body>
</html> 
