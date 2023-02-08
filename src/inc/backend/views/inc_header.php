<?php
/**
 * backend/views/inc_header.php
 *
 * Author: pixelcave
 *
 * The header of each page
 *
 */
?>

<!-- Header -->
<header id="page-header">
  <!-- Header Content -->
  <div class="content-header">
    <!-- Left Section -->
    <div class="space-x-1">
      <!-- Toggle Sidebar -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <a href="bogar_index.php" type="button" class="btn btn-sm btn-alt-secondary">
        <i class="fa fa-house"></i>
      </a>
      <!-- END Toggle Sidebar -->

      <!-- Open Search Section -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <a href="bogar_sobre_mi.php" type="button" class="btn btn-sm btn-alt-secondary">
        <i class="fa fa-user d-sm-none"></i>
        <span class="d-none d-sm-inline-block fw-semibold"><i class="fa fa-user"></i> Sobre mi</span>
      </a>
      <!-- END Open Search Section -->

      <!-- Open Search Section -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <a href="bogar_servicios.php" type="button" class="btn btn-sm btn-alt-secondary">
        <i class="fa fa-book-open d-sm-none"></i>
        <span class="d-none d-sm-inline-block fw-semibold"><i class="fa fa-book-open"></i> Entrenamientos</span>
      </a>
      <!-- END Open Search Section -->

    </div>
    <!-- END Left Section -->

    <!-- Right Section -->
    <div class="space-x-1">
      <!-- User Dropdown -->
      <div class="dropdown d-inline-block">
        <a href="bogar_blog.php" type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown">
          <i class="fa fa-blog d-sm-none"></i>
          <span class="d-none d-sm-inline-block fw-semibold"><i class="fa fa-blog"></i> Blog</span>
        </a>
        <a href="bogar_contact.php" type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown">
          <i class="fa fa-phone d-sm-none"></i>
          <span class="d-none d-sm-inline-block fw-semibold"><i class="fa fa-phone"></i> Contáctame</span>
        </a>
      </div>
      <!-- END User Dropdown -->
    </div>
    <!-- END Right Section -->
  </div>
  <!-- END Header Content -->

  <!-- Header Search -->
  <div id="page-header-search" class="overlay-header bg-body-extra-light">
    <div class="content-header">
      <form class="w-100" action="be_pages_generic_search.php" method="POST">
        <div class="input-group">
          <!-- Close Search Section -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
            <i class="fa fa-fw fa-times"></i>
          </button>
          <!-- END Close Search Section -->
          <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
          <button type="submit" class="btn btn-secondary">
            <i class="fa fa-fw fa-search"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- END Header Search -->

  <!-- Header Loader -->
  <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
  <div id="page-header-loader" class="overlay-header bg-primary">
    <div class="content-header">
      <div class="w-100 text-center">
        <i class="far fa-sun fa-spin text-white"></i>
      </div>
    </div>
  </div>
  <!-- END Header Loader -->
</header>
<!-- END Header -->
