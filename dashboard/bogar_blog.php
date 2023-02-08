<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_style = 'dark-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/slick-carousel/slick.css'); ?>
<?php $cb->get_css('js/plugins/slick-carousel/slick-theme.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34@2x.jpg');">
  <div class="bg-black-50">
    <div class="content content-top text-center">
      <div class="py-5">
        <h1 class="fw-bold text-white mb-2">BLOG</h1>
        <h2 class="h4 fw-normal text-white-75">Últimas noticias y artículos de aprendizaje.</h2>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Blog and Sidebar -->
<div class="content">
  <div class="row g-xxl-5 items-push py-4">
    <!-- Posts -->
    <div class="col-xl-8">
      <div class="mb-5">
        <div class="overflow-hidden rounded mb-3" style="height: 200px;">
          <a class="img-link" href="bogar_detail_blog.php">
            <?php $cb->get_photo(3, true, 'img-fluid'); ?>
          </a>
        </div>
        <h3 class="fw-bold mb-2">The new version is now live!</h3>
        <div class="fs-sm fw-medium text-muted mb-2">
          <span class="me-3">
            <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> July 16, 2017
          </span>
          <a class="text-muted me-3" href="be_pages_generic_profile.php">
            <i class="fa fa-fw fa-user opacity-50 me-1"></i> John Smith
          </a>
          <a class="text-muted" href="javascript:void(0)">
            <i class="fa fa-fw fa-tag opacity-50 me-1"></i> News
          </a>
        </div>
        <p class="fs-sm mb-2">
          Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.
        </p>
        <a class="fs-sm link-fx fw-semibold" href="bogar_detail_blog.php">Read More..</a>
      </div>
      <div class="mb-5">
        <div class="overflow-hidden rounded mb-3" style="height: 200px;">
          <a class="img-link" href="bogar_detail_blog.php">
            <?php $cb->get_photo(7, true, 'img-fluid'); ?>
          </a>
        </div>
        <h3 class="fw-bold mb-2">How to work from home more efficiently</h3>
        <div class="fs-sm fw-medium text-muted mb-2">
          <span class="me-3">
            <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> July 10, 2017
          </span>
          <a class="text-muted me-3" href="be_pages_generic_profile.php">
            <i class="fa fa-fw fa-user opacity-50 me-1"></i> John Smith
          </a>
          <a class="text-muted" href="javascript:void(0)">
            <i class="fa fa-fw fa-tag opacity-50 me-1"></i> Inpiration
          </a>
        </div>
        <p class="fs-sm mb-2">
          Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.
        </p>
        <a class="fs-sm link-fx fw-semibold" href="bogar_detail_blog.php">Read More..</a>
      </div>
      <div class="mb-5">
        <div class="overflow-hidden rounded mb-3" style="height: 200px;">
          <a class="img-link" href="bogar_detail_blog.php">
            <?php $cb->get_photo(28, true, 'img-fluid'); ?>
          </a>
        </div>
        <h3 class="fw-bold mb-2">Travel the world and feel alive</h3>
        <div class="fs-sm fw-medium text-muted mb-2">
          <span class="me-3">
            <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> July 5, 2017
          </span>
          <a class="text-muted me-3" href="be_pages_generic_profile.php">
            <i class="fa fa-fw fa-user opacity-50 me-1"></i> John Smith
          </a>
          <a class="text-muted" href="javascript:void(0)">
            <i class="fa fa-fw fa-tag opacity-50 me-1"></i> Travel
          </a>
        </div>
        <p class="fs-sm mb-2">
          Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.
        </p>
        <a class="fs-sm link-fx fw-semibold" href="bogar_detail_blog.php">Read More..</a>
      </div>
      <div class="mb-5">
        <div class="overflow-hidden rounded mb-3" style="height: 200px;">
          <a class="img-link" href="bogar_detail_blog.php">
            <?php $cb->get_photo(30, true, 'img-fluid'); ?>
          </a>
        </div>
        <h3 class="fw-bold mb-2">Believe in your dreams and start working</h3>
        <div class="fs-sm fw-medium text-muted mb-2">
          <span class="me-3">
            <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> July 1, 2017
          </span>
          <a class="text-muted me-3" href="be_pages_generic_profile.php">
            <i class="fa fa-fw fa-user opacity-50 me-1"></i> John Smith
          </a>
          <a class="text-muted" href="javascript:void(0)">
            <i class="fa fa-fw fa-tag opacity-50 me-1"></i> Motivation
          </a>
        </div>
        <p class="fs-sm mb-2">
          Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.
        </p>
        <a class="fs-sm link-fx fw-semibold" href="bogar_detail_blog.php">Read More..</a>
      </div>
      <hr class="d-xl-none">
    </div>
    <!-- END Posts -->

    <!-- Sidebar -->
    <div class="col-xl-4">
      <!-- Twitter Feed -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title text-uppercase">Blogs</h3>
        </div>
        <div class="block-content block-content-full space-y-3">
            <div class="d-flex">
                <div class="flex-grow-1">
                    <h5>Titulo blog</h5>
                    <p class="fs-sm fw-medium mb-1">
                        In gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                    </p>
                    <div class="fs-sm fw-medium text-muted mb-2">
                        <span class="me-3">
                            <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> 05
                        </span>
                        <a class="text-muted me-3" href="be_pages_generic_profile.php">
                            <i class="fa fa-fw fa-user opacity-50 me-1"></i> Julio 2023
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- END Twitter Feed -->

    </div>
    <!-- END Sidebar -->
  </div>
</div>
<!-- END Blog and Sidebar -->



<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Slick Slider plugin) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/slick-carousel/slick.min.js'); ?>

<!-- Page JS Helpers (Slick Slider Plugin) -->
<script>Codebase.helpersOnLoad(['jq-slick']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>