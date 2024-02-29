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

    <title>User(EH)</title>

    <meta name="description" content="" />


    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/evergreenlogobgcrop.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />
    <script src="../assets/vendor/js/helpers.js"></script>
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

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              @include('admin.layout.header_admin')                          

          </nav>

            <div class="container-xxl flex-grow-1 container-p-y">
                <div class=" col-lg-12 py-5">
                    <div class="card shadow ">
                      <h5 class="card-header bg-colorThird"></h5>
                      <div class="table-responsive text-nowrap">
                        <table class="table bg-colorPrimary">
                          <thead class=" bg-colorThird">
                            <tr>
                              <th>User Name</th>
                              <th>Email</th>
                              <th>Birth Date</th>
                              <th>Phone</th>
                              <th>Last Seen</th>
                              <th>Status</th>
                              <th>Action</th>
                             
                            
                            </tr>
                          </thead>
                          <tbody class="table-border-bottom-0">
                            @foreach($user as $key => $list)
                            <tr>
                              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $list->name }}</strong></td>
                              <td>{{ $list->email }}</td>
                              <td>
                                {{ $list->birth_date }}
                              </td>
                              <td>
                                {{ $list->phone }}
                              </td>
                              <td><span class="badge bg-label-warning me-1">{{ Carbon\Carbon::parse($list->last_seen)->diffForHumans() }}</span></td>
                              
                              <td>
                              <span class="badge {{ $list->last_seen >= now()->subMinutes(2) ? 'bg-label-primary' : 'bg-label-danger' }} me-1">
                                {{ $list->last_seen >= now()->subMinutes(2) ? 'Online' : 'Offline' }}
                              </span>
                            </td>
                              <td>
                                <div class="dropdown">
                                  <a class="dropdown-item" id="delete" href="{{ route('delete.user',$list->id) }}"><i class="bx bx-trash me-1"></i> Delete</a>
                                  </button>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
              <!--/ Basic Bootstrap Table -->

            <!-- / Content -->
            
            @include('admin.layout.footer_admin');

            <div class="content-backdrop fade"></div>
          </div>
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
    <script src="../assets/js/delete-pop-up.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  


  </body>
</html>
