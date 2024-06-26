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

    <title>Add Facility</title>

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

            <div class="container-xxl flex-grow-1 container-p-y">
                    <div class=" col-lg-12 pb-5">
                        <div class="card-xl shadow">
                            <div class="table-responsive text-nowrap rounded-lg">
                                <table class="table bg-colorPrimary">
                                    <thead class=" bg-colorThird">
                                        <tr class=" bg-colorSecondary">
                                              <form action="{{ route('store.facility') }}" method="POST" enctype="multipart/form-data">
                                                      @csrf
                                                      <th> <label for="name">Name Facility</label> </th>
                                                      <th><label for="description_facility">Description</label></th>
                                                      <th><label for="image">Image</label></th>
                                                      <th><label for="preview">Preview</label></th>
                                                      <td><label for="submit"></label></td>
                                                            
                                        </tr>
                                    </thead>
                                                      <tbody class="table-border-bottom-0">
                                                        <td><input type="text" id="name" name="name"></td>
                                                        <td><input type="text" id="description_facility" name="description_facility"></td>
                                                        <td><input type="file" id="image" name="image" onchange="getImagePreview(event)"></td>
                                                        
                                                        <td id="preview"></td>  
                                                        <td><button type="submit" class="text-white bg-colorThird font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none" >Submit</button></td>        
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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      function getImagePreview(event)
        {
          var image=URL.createObjectURL(event.target.files[0]);
          var imagediv= document.getElementById('preview');
          var newimg=document.createElement('img');
          imagediv.innerHTML='';
          newimg.src=image;
          newimg.width="150";
          imagediv.appendChild(newimg);
        }

    </script>   
    
    
    
  </body>
</html>








