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
  data-assets-path="/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/assets/js/config.js"></script>
  </head>

  <body>
    <?php
    if(auth()->user()->type == "1"){
      $a = "Admin";
    }else if(auth()->user()->type == "2"){
      $a = "verificator";
    }
    ?>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="/{{$a}}/home" class="app-brand-link">
                <img src="\assets\1.png" style="width:200px;height:40px">
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="/{{$a}}/home" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Donasi</span>
            </li>
            <!-- Layouts -->
            <?php
            if(auth()->user()->type == "2"){
              ?>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-check"></i>
                <div data-i18n="Layouts">Verifikasi Barang</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/verificator/verifyonline" class="menu-link">
                    <div data-i18n="Without menu">Verifikasi Online</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/verificator/verifyonsite" class="menu-link">
                    <div data-i18n="Without navbar">Verifikasi Onsite</div>
                  </a>
                </li>
              </ul>
            </li>
          <?php } else{?>
            <!-- User interface -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">Barang Donasi</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/admin/donation" class="menu-link">
                    <div data-i18n="Accordion">Daftar Barang Donasi</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="admin/listbarang" class="menu-link">
                    <div data-i18n="Accordion">Jenis Barang Donasi</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-heart"></i>
                <div data-i18n="User interface">Mitra Donasi</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/admin/partner" class="menu-link">
                    <div data-i18n="Accordion">Data Mitra</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="admin/approvepartner" class="menu-link">
                    <div data-i18n="Accordion">Pengajuan Mitra</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Karyawan</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="User interface">Manajemen Karyawan</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/admin/dataemployee" class="menu-link">
                    <div data-i18n="Accordion">Data Karyawan</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="admin/presensiemployee" class="menu-link">
                    <div data-i18n="Accordion">Absensi Karyawan</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="admin/performemployee" class="menu-link">
                    <div data-i18n="Accordion">Kinerja Karyawan</div>
                  </a>
                </li>
              </ul>
            </li>
          <?php } ?>
            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Bantuan</span></li>
            <li class="menu-item">
              <a
                href="/verificator/help"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Bantuan</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="/verificator/documentation"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Dokumentasi</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
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
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="/assets/img/avatars/avatar.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="/assets/img/avatars/{{ auth()->user()->foto_profil }}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <?php
                            if(auth()->user()->type == "1"){
                              $a = "Admin";
                            }else if(auth()->user()->type == "2"){
                              $a = "Verifikator ";
                            }
                            ?>
                            <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                            <small class="text-muted">{{ $a }}</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <?php
                      if(auth()->user()->type == "1"){
                        $a = "admin";
                      }else if(auth()->user()->type == "2"){
                        $a = "verificator";
                      }
                      ?>
                      <a class="dropdown-item" href="/{{$a}}/profile">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Profilku</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Pengaturan</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <span class="d-flex align-items-center align-middle">
                        <button type="submit" class="btn btn-danger btn-flat">
                          <i class="nav-icon fa fa-sign-out-alt"></i>
                            Logout
                        </button>
                        </span>
                      </form>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">Verifikasi Online</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                  <table class="table" style="margin-top:20px">
                    <thead>
                      <tr>
                        <th>Project</th>
                        <th>Client</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php foreach($data as $d){?>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$d->nama_barang}}</strong></td>
                        <td>{{$d->name}}</td>
                        <td>
                        <?php if($d->status_cek == 0){ ?>
                        <span class="badge bg-label-danger me-1">Belum Divalidasi</span></td>
                        <?php }else{ ?>
                        <span class="badge bg-label-success me-1">Divalidasi</span></td>
                        <?php } ?>
                        <td>
                          <div class="dropdown">
                            <a href="/verificator/showverif/<?php echo $d->id ?>">
                              Validasi Sekarang
                            </a>
                          </div>
                        </td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , Bantu.an
                </div>
              </div>
            </footer>
            <!-- / Footer -->

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

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
