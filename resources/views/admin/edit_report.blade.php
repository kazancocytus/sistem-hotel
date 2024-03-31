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

    <title>Edit Report</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/evergreenlogobgcrop.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css " />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href=" {{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')  }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css')  }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js')  }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js')  }}"></script>
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

            <div class="container-xxl flex-grow-1 container-p-y">
                    <div class=" col-lg-12 pb-5">
                        <div class="card-xl shadow">
                            <div class="table-responsive text-nowrap rounded-lg">
                                <table class="table bg-colorPrimary">
                                    <thead class=" bg-colorThird">
                                        <tr class=" bg-colorSecondary">
                                        <form action="{{ route('update.report') }}" method="POST">
                                        @csrf
                                                        <input type="hidden" name="id" id="id" value="{{ $transaction->id }}">
                                                          <th><label for="name">Name</label></th>                                                 
                                                          <th><label for="suite">Suite</label></th>
                                                          <th><label for="deluxe">Deluxe</label></th>
                                                          <th><label for="standart">Standart</label></th>
                                                          <td><label for="check_in">Check In</label></td>     
                                                          <td><label for="check_out">Check Out</label></td>
                                                          <td><button type="submit">Submit</button></td>
                                        </tr>
                                    </thead>
                                                        <tbody class="table-border-bottom-0">
                                                            <td><input type="text" id="name" name="name" value="{{ $transaction->name }}"></td>
                                                            <td><input type="text" id="suite" name="suite" value="{{ $transaction->suite }}"></td>
                                                            <td><input type="text" id="deluxe" name="deluxe" value=" {{ $transaction->deluxe}}"></td>
                                                            <td> <input type="text" id="standart" name="standart" value="{{ $transaction->standart }}"></td>
                                                            <td><input type="date" id="check_in" name="check_in" value="{{ $transaction->check_in }}"></td>
                                                            <td><input type="date" id="check_out" name="check_out" value="{{ $transaction->check_out }}"></td>
                                                            <!-- <label for="price">Price</label><input type="text" id="price" name="price" value="{{ $transaction->price }}" disabled> -->
                                                            <td><button type="submit" class="text-white bg-colorThird font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Submit</button></td>
                                              </form> 
                                                        </tbody>                          
                                </table>
                            </div> 
                        </div>
                    </div>
                 
                  
                  
                        
                <!--/ Basic Bootstrap Table -->

                <!-- / Content -->

             @include('admin.layout.footer_admin');
  
            </div>
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

    <script src="../assets/js/edit-pop-up.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>
@include('sweetalert::alert')
