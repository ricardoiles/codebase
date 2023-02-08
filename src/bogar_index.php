<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_style = 'dark-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34@2x.jpg');">
  <div class="bg-black-50">
    <div class="content content-top text-center">
      <div class="py-5">
        <!-- Avatar -->
      <div class="mb-3">
        <a class="img-link" href="be_pages_generic_profile.php">
          <?php $cb->get_avatar(15, '', 96, 'img-thumb'); ?>
        </a>
      </div>
      <!-- END Avatar -->

      <!-- Personal -->
      <h1 class="h3 text-white fw-bold mb-2">
        Bogar Online
      </h1>
      <h2 class="h5 fw-medium text-white-75">
        Profesión 
        <br>
        <small>La música es la mejor medicina, terapia, rehabilitación y forma de expresión.</small>
      </h2>
      <!-- END Personal -->

      <!-- Actions -->
      <a href="bogar_sobre_mi.php" type="button" class="btn btn-primary me-1">
        <i class="far fa-user opacity-50 me-1"></i> Sobre mi
      </a>
      <a class="btn btn-alt-primary" href="#cesarnunez">
        <i class="fa fa-arrow-down opacity-50 mb-1"></i> Mi contenido
      </a>
      <!-- END Actions -->
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Settings -->
  <div class="block block-rounded">
    <div class="block-content" id="cesarnunez">
      <div class="row items-push">
        <div class="col-lg-3">
          <div class="text-center">
            <img class="img-fluid rounded" src="http://admin.cesarnunezonline.com/img/upload_images/Cesar%20Nunez%20Online%20INdex.png" class="rounded" alt="...">
          </div>
        </div>
        <div class="col-lg-7 offset-lg-1">
          <span class="fs-2 fw-bold">Cesar Nuñez</span>
          <hr width="50">
          <p class="text-muted">
            Soy un enamorado de la música y sus ritmos. Alguien apasionado por ayudar y compartir mis conocimientos y habilidades. Proporciono un servicio profesional, de calidad, siempre aplicando mis conocimientos y experiencia, cumpliendo con ética, responsabilidad, compromiso y propósito a la realización de las metas y objetivos que surgen de cada proyecto.
          </p>
          <a href="#colaboraciones" type="button" class="btn btn-primary me-1">
            <i class="fa fa-arrow-down opacity-50 mb-1"></i> Colaboraciones
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- END Settings -->
  <!-- Image Cards Media Widgets -->
    <h2 class="content-heading" id="colaboraciones">Colaboraciones <small><i class="fa fa-video opacity-50 me-1"></i></small></h2>
    <div class="row">
      <!-- Row #1 -->
      <div class="col-md-6 col-xl-4">
        <a class="block shadow-none border-start bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo20.jpg');" href="javascript:void(0)">
          <div class="block-content block-content-full bg-black-50">
            <div class="pt-7">
              <h3 class="h4 text-white fw-bold mb-3">
                Nombre del video con misma cant. caracteres
              </h3>
              <h4 class="text-white-75 fw-medium fs-sm mb-0">
                <span class="me-2">
                  <i class="fa fa-location-dot opacity-75 me-1"></i> Lugar
                </span>
                <span>
                  <i class="fa fa-calendar opacity-75 me-1"></i> Fecha
                </span>
              </h4>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-xl-4">
        <a class="block shadow-none border-start border-5 border-success bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo26.jpg');" href="javascript:void(0)">
          <div class="block-content block-content-full bg-black-50">
            <div class="pt-7">
              <h3 class="h4 text-white fw-bold mb-3">
                The most happy cities in the world
              </h3>
              <h4 class="text-white-75 fw-medium fs-sm mb-0">
                <span class="me-2">
                  <i class="far fa-clock opacity-75 me-1"></i> 12 min
                </span>
                <span>
                  <i class="far fa-comments opacity-75 me-1"></i> 132
                </span>
              </h4>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xl-4">
        <a class="block shadow-none border-start border-5 border-danger bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo28.jpg');" href="javascript:void(0)">
          <div class="block-content block-content-full bg-black-50">
            <div class="pt-7">
              <h3 class="h4 text-white fw-bold mb-3">
                Learn Laravel in one week the easy way
              </h3>
              <h4 class="text-white-75 fw-medium fs-sm mb-0">
                <span class="me-2">
                  <i class="far fa-clock opacity-75 me-1"></i> 20 min
                </span>
                <span>
                  <i class="far fa-comments opacity-75 me-1"></i> 420
                </span>
              </h4>
            </div>
          </div>
        </a>
      </div>
      <!-- END Row #1 -->
    </div>
  <!-- END Image Cards Media Widgets -->

  <!-- Simple Media Widgets -->
    <h2 class="content-heading">Música <small><i class="fa fa-music opacity-50 me-1"></i></small></h2>
    <div class="row">
      <!-- Row #1 -->
      <div class="col-md-6 col-xl-4">
        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div class="p-3">
              <i class="fa fa-2x fa-music text-primary"></i>
            </div>
            <div class="ms-1 text-end">
              <p class="fs-lg fw-semibold mb-0">
                14 Albums
              </p>
              <p class="fs-sm text-uppercase fw-semibold text-muted mb-0">
                Pop
              </p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-xl-4">
        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div class="p-3">
              <i class="fa fa-2x fa-film text-warning"></i>
            </div>
            <div class="ms-1 text-end">
              <p class="fs-lg fw-semibold mb-0">
                73 Movies
              </p>
              <p class="fs-sm text-uppercase fw-semibold text-muted mb-0">
                Horror
              </p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xl-4">
        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div class="p-3">
              <i class="fa fa-2x fa-gamepad text-danger"></i>
            </div>
            <div class="ms-1 text-end">
              <p class="fs-lg fw-semibold mb-0">
                120 Games
              </p>
              <p class="fs-sm text-uppercase fw-semibold text-muted mb-0">
                Adventure
              </p>
            </div>
          </div>
        </a>
      </div>
      <!-- END Row #1 -->
    </div>
    
  <!-- END Simple Media Widgets -->
</div>
<!-- END Page Content -->

<!-- Subscribe Today -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34@2x.jpg');">
  <div class="bg-white-90">
    <div class="content">
      <div class="py-5 text-center">
        <h3 class="fw-bold text-black-75 mb-2">Únete a mis entrenamientos</h3>
        <!--<h4 class="fw-medium text-muted mb-4">Are you ready to get started?</h4>-->
        <a class="btn btn-lg btn-primary" href="javascript:void(0)">Conocer entrenamientos</a>
      </div>
    </div>
  </div>
</div>
<!-- END Subscribe Today -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
