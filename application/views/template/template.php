<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, monster admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, "
    />
    <meta
      name="description"
      content="Monster is powerful and clean admin dashboard template, inpired from Google's Material Design"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Datamart LLDIKTI XI</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/monsteradmin/"
    />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="<?= base_url(); ?>assets/images/logo-lldikti.png"
    />
    <!-- Custom CSS -->
    <link
      rel="stylesheet"
      href="<?= base_url(); ?>assets/libs/apexcharts/dist/apexcharts.css"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
       <link
      rel="stylesheet"
      type="text/css"
      href="<?= base_url(); ?>assets/libs/select2/dist/css/select2.min.css"
    />
    <link href="<?= base_url(); ?>dist/css/style.min.css" rel="stylesheet" />
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
   
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-lg navbar-dark">
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
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="icon-arrow-left-circle"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
            
              <!-- ============================================================== -->
              <!-- End Comment -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Messages -->
              <!-- ============================================================== -->
            
              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- mega menu -->
              <!-- ============================================================== -->
           
              <!-- ============================================================== -->
              <!-- End mega menu -->
              <!-- ============================================================== -->
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
             
             
             
            
             
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="home" class="feather-icon"></i
                  ><span class="hide-menu">Kelembagaan</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="<?= base_url('kl/profil_pt'); ?>"
                      aria-expanded="false"
                      ><i class="mdi mdi-adjust"></i
                      ><span class="hide-menu">Profil PT</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="<?= base_url('kl/daftar_pt'); ?>"
                      aria-expanded="false"
                      ><i class="mdi mdi-adjust"></i
                      ><span class="hide-menu">Daftar PT</span></a
                    >
                  </li>
                    <li class="sidebar-item">
                    <a
                      class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="<?= base_url('kl/daftar_prodi'); ?>"
                      aria-expanded="false"
                      ><i class="mdi mdi-adjust"></i
                      ><span class="hide-menu">Daftar Prodi</span></a
                    >
                  </li>
                   
                </ul>
              </li>
        
            <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="user" class="feather-icon"></i
                  ><span class="hide-menu">Sumber Daya</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link has-arrow waves-effect waves-dark"
                      href="javascript:void(0)"
                      aria-expanded="false"
                      ><i class="mdi  mdi-adjust"></i
                      ><span class="hide-menu">Dosen</span></a
                    >
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="<?= base_url('sd/semua_dosen'); ?>" class="sidebar-link"
                          ><span class="hide-menu">Semua Dosen </span></a
                        >
                      </li>
                       <li class="sidebar-item">
                        <a href="<?= base_url('sd/dosen_homebase'); ?>" class="sidebar-link"
                          ><span class="hide-menu">Dosen Homebase </span></a
                        >
                      </li>
                       <li class="sidebar-item">
                        <a href="<?= base_url('sd/jenjang_pendidikan'); ?>" class="sidebar-link"
                          ><span class="hide-menu">Jenjang Pendidikan </span></a
                        >
                      </li>
                       <li class="sidebar-item">
                        <a href="<?= base_url('sd/jabfung'); ?>" class="sidebar-link"
                          ><span class="hide-menu">Jabatan Fungsional</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="<?= base_url('sd/status_kepegawaian'); ?>" class="sidebar-link"
                          ><span class="hide-menu">Status Kepegawaian</span></a
                        >
                      </li>
                       <li class="sidebar-item">
                        <a href="<?= base_url('sd/jk'); ?>" class="sidebar-link"
                          ><span class="hide-menu">Jenis Kelamin</span></a
                        >
                      </li>
                     
                    </ul>
                  </li>
                
                 
                 
                </ul>
              </li>
              
              <li class="sidebar-item">
                <a
                  class="
                    sidebar-link
                    two-column
                    has-arrow
                    waves-effect waves-dark
                  "
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="users" class="feather-icon"></i
                  ><span class="hide-menu">Akademik & Kemahasiswaan </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="inbox-email.html" class="sidebar-link"
                      ><i class="mdi mdi-email"></i
                      ><span class="hide-menu"> Email </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="inbox-email-detail.html" class="sidebar-link"
                      ><i class="mdi mdi-email-alert"></i
                      ><span class="hide-menu"> Email Detail </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="inbox-email-compose.html" class="sidebar-link"
                      ><i class="mdi mdi-email-secure"></i
                      ><span class="hide-menu"> Email Compose </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ticket-list.html" class="sidebar-link"
                      ><i class="mdi mdi-book-multiple"></i
                      ><span class="hide-menu"> Ticket List </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ticket-detail.html" class="sidebar-link"
                      ><i class="mdi mdi-book-plus"></i
                      ><span class="hide-menu"> Ticket Detail </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="app-chats.html" class="sidebar-link"
                      ><i class="mdi mdi-comment-processing-outline"></i
                      ><span class="hide-menu"> Chats Apps </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="app-calendar.html" class="sidebar-link"
                      ><i class="mdi mdi-calendar"></i
                      ><span class="hide-menu"> Calender </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="app-taskboard.html" class="sidebar-link"
                      ><i class="mdi mdi-bulletin-board"></i
                      ><span class="hide-menu"> Taskboard </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="app-notes.html" class="sidebar-link"
                      ><i class="mdi mdi-arrange-bring-forward"></i
                      ><span class="hide-menu"> Notes </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="app-todo.html" class="sidebar-link"
                      ><i class="mdi mdi-clipboard-text"></i
                      ><span class="hide-menu"> Todo </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="app-invoice.html" class="sidebar-link"
                      ><i class="mdi mdi-book"></i
                      ><span class="hide-menu"> Invoice </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="app-contacts.html" class="sidebar-link"
                      ><i class="mdi mdi-account-box"></i
                      ><span class="hide-menu"> Contact </span></a
                    >
                  </li>
                </ul>
              </li>
           
           
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="codepen" class="feather-icon"></i
                  ><span class="hide-menu">Sistem Informasi</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link has-arrow waves-effect waves-dark"
                      href="javascript:void(0)"
                      aria-expanded="false"
                      ><i class="mdi  mdi-adjust"></i
                      ><span class="hide-menu">Pelaporan</span></a
                    >
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="table-basic.html" class="sidebar-link"
                          ><span class="hide-menu">Checkpoint 1</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="table-dark-basic.html" class="sidebar-link"
                          ><span class="hide-menu">Checkpoint 2 </span></a
                        >
                      </li>
                     
                   
                    </ul>
                  </li>
                
                 
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="#"
                      aria-expanded="false"
                      ><i class="mdi mdi-adjust"></i
                      ><span class="hide-menu">PDDIKTI PT</span></a
                    >
                  </li>
                </ul>
              </li>

                <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="file-text" class="feather-icon"></i
                  ><span class="hide-menu">Kerja Sama</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  
                 
                   <li class="sidebar-item">
                    <a
                      class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="#"
                      aria-expanded="false"
                      ><i class="mdi mdi-adjust"></i
                      ><span class="hide-menu">#</span></a
                    >
                  </li>
                  
                </ul>
              </li>
               <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="target" class="feather-icon"></i
                  ><span class="hide-menu">Perencanaan</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="#"
                      aria-expanded="false"
                      ><i class="mdi mdi-adjust"></i
                      ><span class="hide-menu">Capaian IKU </span></a
                    >
                  </li>
                   
                </ul>
              </li>
             <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="file-text" class="feather-icon"></i
                  ><span class="hide-menu">Umum</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  
                 
                   <li class="sidebar-item">
                    <a
                      class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="#"
                      aria-expanded="false"
                      ><i class="mdi mdi-adjust"></i
                      ><span class="hide-menu">#</span></a
                    >
                  </li>
                  
                </ul>
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
       
                                              
     
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

              

        <?=$contents ?>
        
       
  
      
        </div>
    
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">Lembaga Layanan Pendidikan Tinggi Wilayah XI Kalimantan</footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
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
          <!-- Tab 2 -->
        
          
          </div>
          <!-- End Tab 2 -->
          <!-- Tab 3 -->
         
       
            
          </div>
          <!-- End Tab 3 -->
        </div>
      </div>
    </aside>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="<?= base_url(); ?>dist/js/app.min.js"></script>
    <script src="<?= base_url(); ?>dist/js/app.init.horizontal.js"></script>
    <script src="<?= base_url(); ?>dist/js/app-style-switcher.horizontal.js"></script>
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

    <script src="<?= base_url(); ?>dist/js/pages/dashboards/dashboard1.js"></script>
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
    <script src="<?= base_url(); ?>/dist/js/pages/datatable/datatable-advanced.init.js"></script>
    
    <script src="<?= base_url(); ?>assets/libs/chart.js/dist/Chart.min.js"></script>
      <script type="text/javascript">
    <?php if($this->session->flashdata('success')){ ?>
    toastr.success("<?php echo $this->session->flashdata('success'); ?>");
<?php }else if($this->session->flashdata('delete')){  ?>
    toastr.error("<?php echo $this->session->flashdata('delete'); ?>");
<?php }else if($this->session->flashdata('update')){  ?>
    toastr.info("<?php echo $this->session->flashdata('update'); ?>");
<?php } ?>
</script>
<script>
$(document).ready(function(){
  $('[data-tooltip="tooltip"]').tooltip();   
});
</script>
<script>
        //setting datatables
        $('#zero_config').DataTable({
            "cache": true, 
        });
    </script>
<script type="text/javascript">
    var table;
    $(document).ready(function() {
 
        //datatables
        table = $('#tb_dosen').DataTable({ 
 
            "processing": true, 
            "serverSide": true, 
            "order": [], 
             
            "ajax": {
                "url": "<?php echo site_url('sd/ajax_dosen')?>",
                "type": "POST"
            },
 
             
            "columnDefs": [
            { 
                "targets": [ 0 ], 
                "orderable": false, 
            },
            ],
 
        });
 
    });
 
</script>
<script type="text/javascript">
    new Chart(document.getElementById("akre_pt_seluruh"), {
        type: 'bar',
        data: {
            labels: ['A', 'B', 'C', 'Unggul', 'Baik Sekali', 'Baik', 'Belum Akreditasi'],
            datasets: [{
                    label: 'Akreditasi Perguruan Tinggi',
                    data: [<?= $get_jumlah_akred_seluruh_pt->A ?>, <?= $get_jumlah_akred_seluruh_pt->B ?>,
                        <?= $get_jumlah_akred_seluruh_pt->C ?>,
                        <?= $get_jumlah_akred_seluruh_pt->Unggul ?>,
                        <?= $get_jumlah_akred_seluruh_pt->Baik_Sekali ?>,
                        <?= $get_jumlah_akred_seluruh_pt->Baik ?>,
                        <?= $get_jumlah_akred_seluruh_pt->Belum_akred ?>
                    ],
                    backgroundColor: "#03a9f4",
                    fill: false,
                },

            ],
        },
        options: {
            title: {
                display: true,
                text: ''
            }
        }
    });
    </script>
    <script type="text/javascript">
    new Chart(document.getElementById("akre_ps_seluruh"), {
        type: 'bar',
        data: {
            labels: ['A', 'B', 'C', 'Unggul', 'Baik Sekali', 'Baik', 'Belum Akreditasi'],
            datasets: [{
                    label: 'Akreditasi Program Studi',
                    data: [<?= $get_jumlah_akred_seluruh_ps->A ?>, <?= $get_jumlah_akred_seluruh_ps->B ?>,
                        <?= $get_jumlah_akred_seluruh_ps->C ?>,
                        <?= $get_jumlah_akred_seluruh_ps->Unggul ?>,
                        <?= $get_jumlah_akred_seluruh_ps->Baik_Sekali ?>,
                        <?= $get_jumlah_akred_seluruh_ps->Baik ?>,
                        <?= $get_jumlah_akred_seluruh_ps->Belum_akred ?>
                    ],
                   backgroundColor: "#03a9f4",
                    fill: false,
                },

            ],
        },
        options: {
            title: {
                display: true,
                text: ''
            }
        }
    });
    </script>
     <script type="text/javascript">
    new Chart(document.getElementById("jumlah_pt"), {
        type: 'bar',
        data: {
            labels: ['Kalimantan Selatan', 'Kalimantan Tengah', 'Kalimantan Timur', 'Kalimantan Utara', 'Kalimantan Barat'],
            datasets: [{
                    label: 'Jumlah Perguruan Tinggi',
                    data: [<?= $get_jumlah_pt->Kalsel ?>,
                     <?= $get_jumlah_pt->Kalteng ?>,
                        <?= $get_jumlah_pt->Kaltim ?>,
                        <?= $get_jumlah_pt->Kalut ?>,
                        <?= $get_jumlah_pt->Kalbar ?>
                       
                    ],
                   backgroundColor: "#03a9f4",
                    fill: false,
                },

            ],
        },
        options: {
            title: {
                display: true,
                text: ''
            }
        }
    });
    </script>
     <script type="text/javascript">
    new Chart(document.getElementById("bar"), {
        type: 'bar',
        data: {
            labels: ['A', 'B', 'C', 'Unggul', 'Baik Sekali', 'Baik', 'Belum Akreditasi'],
            datasets: [{
                    label: 'Akreditasi Prodi',
                    data: [<?= $get_akred_ps_by_pt->A ?>,
                        <?= $get_akred_ps_by_pt->B ?>,
                        <?= $get_akred_ps_by_pt->C ?>,
                        <?= $get_akred_ps_by_pt->Unggul ?>,
                        <?= $get_akred_ps_by_pt->Baik_Sekali ?>,
                        <?= $get_akred_ps_by_pt->Baik ?>,
                        <?= $get_akred_ps_by_pt->Belum_akred ?>
                    ],
                    backgroundColor: "#03a9f4",
                    fill: false,
                },

            ],
        },
        options: {
            title: {
                display: true,
                text: 'Akreditasi Program Studi'
            }
        }
    });
    </script>
  </body>
</html>
