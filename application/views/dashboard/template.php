<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="Datamart LLDIKTI Wilayah XI Kalimantan, "
    />
    <meta
      name="description"
      content="Datamart LLDIKTI Wilayah XI Kalimantan"
    />
    <meta name="robots" content="noindex,nofollow" />
    <style type="text/css">
      .colorskin {
         background: #009efb;
  /* Old browsers */
  background: -moz-linear-gradient(left, #0178bc 0%, #00bdda 100%);
  /* FF3.6-15 */
  background: -webkit-linear-gradient(left, #0178bc 0%, #00bdda 100%);
  /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(to right, #0178bc 0%, #00bdda 100%);
      }
    </style>
    <title>Datamart LLDIKTI XI</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/monsteradmin/"
    />
    <!-- Favicon icon -->
   
    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet-omnivore@latest/leaflet-omnivore.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link
      rel="stylesheet"
      href="<?= base_url(); ?>assets/libs/apexcharts/dist/apexcharts.css"
    />
    <!-- Custom CSS -->
     <link
      rel="stylesheet"
      type="text/css"
      href="<?= base_url(); ?>assets/libs/select2/dist/css/select2.min.css"
    />
    <link href="<?= base_url(); ?>dist/css/style.css" rel="stylesheet" />

     <style>
  #mapsy { width: 100%; height: 600px; padding: 0; }
</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <svg
        class="tea lds-ripple"
        width="37"
        height="48"
        viewbox="0 0 37 48"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
          stroke="#009efb"
          stroke-width="2"
        ></path>
        <path
          d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
          stroke="#009efb"
          stroke-width="2"
        ></path>
        <path
          id="teabag"
          fill="#009efb"
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"
        ></path>
        <path
          id="steamL"
          d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke="#009efb"
        ></path>
        <path
          id="steamR"
          d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13"
          stroke="#009efb"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        ></path>
      </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-lg navbar-dark ">
          <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-lg-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
               <a class="navbar-brand" href="<?= base_url('dashboard'); ?>">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="<?= base_url(); ?>assets/images/logo-lldikti.png"
                  alt="homepage"
                  class="dark-logo" width="50px"
                />
                <!-- Light Logo icon -->
                <img
                  src="<?= base_url(); ?>assets/images/logo-lldikti.png"
                  alt="homepage"
                  class="light-logo" width="50px"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
              Datamart LLDIKTI XI
              </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="topbartoggler d-block d-lg-none waves-effect waves-light"
              href="javascript:void(0)"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
              ><i class="ti-more"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav me-auto">
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
           
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
             
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Language  -->
              <!-- ============================================================== -->
             
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <!-- User Profile-->
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Personal</span>
              </li>

             
                <li class="sidebar-item">
                <a href="<?= base_url(''); ?>" 
                  class="sidebar-link"
                 
                 
                  ><i data-feather="monitor" class="feather-icon"></i
                  ><span class="hide-menu">Dashboard </span></a
                >
               
              </li>
             
              <li class="sidebar-item">
                <a href="<?= base_url('dashboard/pts'); ?>" 
                  class="sidebar-link"
                 
                 
                  ><i data-feather="home" class="feather-icon"></i
                  ><span class="hide-menu">Perguruan Tinggi </span></a
                >
               
              </li>
                <li class="sidebar-item">
                <a href="<?= base_url('dashboard/prodi'); ?>" 
                  class="sidebar-link"
                 
                 
                  ><i data-feather="server" class="feather-icon"></i
                  ><span class="hide-menu">Program Studi </span></a
                >
               
              </li>

               <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="user" class="feather-icon"></i
                  ><span class="hide-menu">Dosen </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="<?= base_url('dashboard/dosen'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i
                      ><span class="hide-menu"> Statisik Dosen </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url('dashboard/dosen_serdos'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i
                      ><span class="hide-menu"> Dosen Tersertifikasi </span></a
                    >
                  </li>
                   <li class="sidebar-item">
                    <a href="<?= base_url('dashboard/semua_dosen'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i
                      ><span class="hide-menu">Semua Dosen </span></a
                    >
                  </li>
                
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="users" class="feather-icon"></i
                  ><span class="hide-menu">Mahasiswa </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="<?= base_url('dashboard/mhs_smt'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i
                      ><span class="hide-menu"> Jumlah Mahasiswa </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url('dashboard/mhs_masuk'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i
                      ><span class="hide-menu">Mahasiswa Masuk </span></a
                    >
                  </li>
                   <li class="sidebar-item">
                    <a href="<?= base_url('dashboard/mhs_keluar'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i
                      ><span class="hide-menu">Mahasiswa Keluar </span></a
                    >
                  </li>
                
                </ul>
              </li>
             
            
             
            
             
              <li class="sidebar-item">
                <a href="<?= base_url('dashboard/pelaporan_pt'); ?>" 
                  class="sidebar-link"
                 
                 
                  ><i data-feather="database" class="feather-icon"></i
                  ><span class="hide-menu">Pelaporan PT</span></a
                >
               
              </li>
            
          
             
           
            
              
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->

      

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
         
        </div>

        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
     <?=$contents ?>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">LLDIKTI Wilayah XI Kalimantan</footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
     
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <aside class="customizer">
      <a href="javascript:void(0)" class="service-panel-toggle"
        ><i class="fa fa-spin fa-cog"></i
      ></a>
      <div class="customizer-body">
        <ul class="nav customizer-tab" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              id="pills-home-tab"
              data-bs-toggle="pill"
              href="#pills-home"
              role="tab"
              aria-controls="pills-home"
              aria-selected="true"
              ><i class="mdi mdi-wrench fs-6"></i
            ></a>
          </li>
         
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <!-- Tab 1 -->
          <div
            class="tab-pane fade show active"
            id="pills-home"
            role="tabpanel"
            aria-labelledby="pills-home-tab"
          >
            <div class="p-3 border-bottom">
              <!-- Sidebar -->
              <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
              <div class="form-check mt-3">
                <input
                  type="checkbox"
                  name="theme-view"
                  class="form-check-input"
                  id="theme-view"
                />
                <label class="form-check-label" for="theme-view">
                  <span>Dark Theme</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  class="sidebartoggler form-check-input"
                  name="collapssidebar"
                  id="collapssidebar"
                />
                <label class="form-check-label" for="collapssidebar">
                  <span>Collapse Sidebar</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="sidebar-position"
                  class="form-check-input"
                  id="sidebar-position"
                />
                <label class="form-check-label" for="sidebar-position">
                  <span>Fixed Sidebar</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="header-position"
                  class="form-check-input"
                  id="header-position"
                />
                <label class="form-check-label" for="header-position">
                  <span>Fixed Header</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="boxed-layout"
                  class="form-check-input"
                  id="boxed-layout"
                />
                <label class="form-check-label" for="boxed-layout">
                  <span>Boxed Layout</span>
                </label>
              </div>
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Navbar BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Navbar BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
          </div>
          <!-- End Tab 1 -->
 
          <!-- End Tab 3 -->
        </div>
      </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <script src="<?= base_url(); ?>dist/js/app.min.js"></script>
    <script src="<?= base_url(); ?>dist/js/app.init.horizontal.js"></script>
    <script src="<?= base_url(); ?>dist/js/app-style-switcher.horizontal.js"></script>
    <!-- Theme settings -->
    <script src="<?= base_url(); ?>dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url(); ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url(); ?>dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url(); ?>dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url(); ?>dist/js/feather.min.js"></script>
    <script src="<?= base_url(); ?>dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="<?= base_url(); ?>assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="<?= base_url(); ?>dist/js/pages/dashboards/dashboard2.js"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>assets/libs/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/dist/js/pages/datatable/custom-datatable.js"></script>
    <!-- start - This is for export functionality only -->
     <script src="<?= base_url(); ?>assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <script src="<?= base_url(); ?>/dist/js/pages/datatable/datatable-advanced.init.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
 
    <script src="<?= base_url(); ?>/dist/js/pages/datatable/datatable-api.init.js"></script>
     <script src="<?= base_url(); ?>assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url(); ?>assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="<?= base_url(); ?>dist/js/pages/forms/select2/select2.init.js"></script>


<script>
        //setting datatables
        $('#zero_config').DataTable({
            "cache": true, 
        });
    </script>
   <?php
    // Data institusi pendidikan

     $colors = [
        "#1f77b4", // Biru
        "#ff7f0e", // Oranye
        "#2ca02c", // Hijau
        "#d62728", // Merah
        "#9467bd", // Ungu
        "#8c564b"  // Coklat
    ];
    ?>

    <script>
       var categories = <?php echo json_encode(array_column($gf_bentuk_pt, 'nm_bp')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_bentuk_pt, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Bentuk Perguruan Tinggi',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>
    <script>
       var categories = <?php echo json_encode(array_column($gf_akred_pt, 'nm_akred')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_akred_pt, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('akred_pt', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Akreditas Perguruan Tinggi',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>

    <script>
       var categories = <?php echo json_encode(array_column($gf_provinsi_pt, 'provinsi')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_provinsi_pt, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('provinsi_pt', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah PT Per Provinsi',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>
    <script>
       var categories = <?php echo json_encode(array_column($gf_kab_pt, 'kab_kota_pt')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_kab_pt, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('kab_pt', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah PT Per Kota/Kabupaten',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>

    <script>
       var categories = <?php echo json_encode(array_column($gf_akred_prodi, 'nm_akred')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_akred_prodi, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('akred_prodi', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Akreditas Program Studi',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>
  
  <script>
       var categories = <?php echo json_encode(array_column($gf_bidang_prodi, 'nm_kel_bidang')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_bidang_prodi, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('bidang_prodi', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Bidang Program Studi',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>
  
  <script>
       var categories = <?php echo json_encode(array_column($gf_jenjang_prodi, 'nm_jenj_didik')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_jenjang_prodi, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('jenjang_prodi', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jenjang Program Studi',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>
  <script>
       var categories = <?php echo json_encode(array_column($gf_nama_prodi, 'nm_prodi')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_nama_prodi, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('nama_prodi', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Nama Program Studi',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>
  
  
  <script>
       var categories = <?php echo json_encode(array_column($gf_dosen_ikatan_kerja, 'nm_ikatan_kerja')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_dosen_ikatan_kerja, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('dosen_ikatan_kerja', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Dosen Berdasarkan Ikatan Kerja',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>

<script>
       var categories = <?php echo json_encode(array_column($gf_dosen_jabfung, 'jabatan_akademik')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_dosen_jabfung, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('dosen_jabfung', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Dosen Berdasarkan Jabatan Akademik',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>

<script>
       var categories = <?php echo json_encode(array_column($gf_dosen_jenjang_tertinggi, 'jenjang_tertinggi')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_dosen_jenjang_tertinggi, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('dosen_jenjang_tertinggi', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Dosen Berdasarkan Jenjang Pendidikan',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>

    <script>
       var categories = <?php echo json_encode(array_column($gf_dosen_jk, 'jk')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_dosen_jk, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('dosen_jk', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Dosen Berdasarkan Jenis Kelamin',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>

  <script>
       var categories = <?php echo json_encode(array_column($gf_dosen_kelompok, 'Kelompok_No_Reg')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_dosen_kelompok, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('dosen_kelompok', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Dosen Berdasarkan Kelompok',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>

<script>
       var categories = <?php echo json_encode(array_column($gf_dosen_stat_aktif, 'nm_stat_aktif')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_dosen_stat_aktif, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('dosen_stat_aktif', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Dosen Berdasarkan Status Keaktifan',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>

    <script>
       var categories = <?php echo json_encode(array_column($gf_dosen_stat_pegawai, 'nm_stat_pegawai')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_dosen_stat_pegawai, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('dosen_stat_pegawai', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Dosen Berdasarkan Status Pegawai',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>

 <script>
       var categories = <?php echo json_encode(array_column($gf_jumlah_mhs_smt, 'id_smt')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_jumlah_mhs_smt, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('jumlah_mhs_smt', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Mahasiswa Per Semester',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>
    <script>
       var categories = <?php echo json_encode(array_column($gf_jumlah_dosen_smt, 'id_smt')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_jumlah_dosen_smt, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('jumlah_dosen_smt', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Dosen Per Semester',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>
    <script>
       var categories = <?php echo json_encode(array_column($gf_jumlah_dosen_ajar_smt, 'id_smt')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_jumlah_dosen_ajar_smt, 'jumlah_dosen'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('jumlah_dosen_ajar_smt', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Dosen Ajar Per Semester',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>
    <script>
       var categories = <?php echo json_encode(array_column($gf_mhs_masuk, 'tahun')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_mhs_masuk, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('mhs_masuk', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Mahasiswa Masuk Per Tahun',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>

    <script>
       var categories = <?php echo json_encode(array_column($gf_mhs_keluar, 'tahun')); ?>;
            var seriesData = <?php echo json_encode(array_column($gf_mhs_keluar, 'jumlah'),JSON_NUMERIC_CHECK); ?>;
// Logging to verify correct types
            
       Highcharts.chart('mhs_keluar', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Mahasiswa Keluar Per Tahun',
        align: 'center'
    },

    xAxis: {
        categories: categories,
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    
    plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
    series: [
        {
            name: 'Jumlah',
            data: seriesData,
              colorByPoint: true,
                            
                            showInLegend: false
        }
       
    ]
});

    </script>

<script type="text/javascript">
$(document).ready(function() {
    var table = $('#tb_dosen').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": "<?php echo site_url('dashboard/ajax_dosen')?>",
            "type": "POST"
        },
        "columnDefs": [
            { "targets": [0], "orderable": false }
        ]
    });

    // Export button click
    $('#export-btn').on('click', function() {
        window.location.href = "<?php echo site_url('dashboard/export_dosen')?>";
    });
       // Export button click
    $('#export-btnn').on('click', function() {
        window.location.href = "<?php echo site_url('dashboard/export_semua_dosen')?>";
    });
});
</script>

<script>
    $(document).ready(function() {
    // Event listener for Edit button
    $(document).on('click', '.btn-edit', function() {
        var dosenId = $(this).data('id');  // Get the dosen ID
        var namaDosen = $(this).data('nama');  // Get the nama_dosen

        // Set values in the modal
        $('#dosenId').val(dosenId);  // Set the dosen ID to a hidden input field
        $('#namaDosen').val(namaDosen);  // Set the nama_dosen to the form input

        // Show the modal
        $('#editModal').modal('show');
    });

    // Event listener for form submission (to handle saving changes)
    $('#editDosenForm').on('submit', function(e) {
        e.preventDefault();
        
        var dosenId = $('#dosenId').val();
        var namaDosen = $('#namaDosen').val();
        
        // You can send the data to the server to update the record
        $.ajax({
            url: 'your_update_url_here',  // URL for the update request
            type: 'POST',
            data: {
                dosenId: dosenId,
                namaDosen: namaDosen,
                // Add other form fields if needed
            },
            success: function(response) {
                // Handle the response
                console.log(response);
                // Close the modal and update the table if needed
                $('#editModal').modal('hide');
            }
        });
    });
});

</script>



  </body>
</html>
