<?php
	require 'php/connection.php';
	if(empty($_SESSION['name']))
		header('Location: bogar_login.php');
?>

<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_style = 'dark-glass';
?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/magnific-popup/magnific-popup.css'); ?>

<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<?php
  $data = $connect->query("SELECT * FROM hero_sobre_mi")->fetchAll();
  foreach ($data as $row) {
?>
<?php
  $data = $connect->query("SELECT * FROM hero_index")->fetchAll();
  foreach ($data as $cover) {
?>
<div class="bg-image" style="background-image: 
                      url('assets/media/hero_index/<?php echo $cover['foto_cover_hero'];?>')">
<?php }?>
  <div class="bg-black-50">
    <div class="content content-top text-center">
      <div class="py-5">
      <form action="php/sobremiController.php" method="post" name="update_hero_sobre_mi">
        <h1 class="h5 fw-bold mb-2 d-flex justify-content-center">
          <div class="col-8">
              <label class="form-label text-white" for="example-text-input">Titulo:</label>
              <input type="text" class="form-control text-center" id="example-text-input" name="titulo" 
                placeholder="Ej:<?php echo $row['titulo'];?>" value="<?php echo $row['titulo'];?>">
          </div>
        </h1>
        <h2 class="h5 fw-bold mb-2 d-flex justify-content-center">
          <div class="col-6">
            <label class="form-label text-white" for="example-text-input">Subtitulo:</label>
            <input type="text" class="form-control text-center" id="example-text-input" name="subtitulo" 
              placeholder="Ej:<?php echo $row['subtitulo'];?>" value="<?php echo $row['subtitulo'];?>">
          </div>
        </h2>
        <button type="submit" class="btn btn-primary me-1" name="update_hero_sobre_mi">
          <i class="fa-solid fa-floppy-disk"></i>
          Actualizar
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php
  }
?>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
 <!-- Settings -->
  <h2 class="content-heading"><i class="fa fa-user-circle me-1"></i> Sobre mi</h2>
  <div class="block block-rounded">
    <div class="block-content">
      <div class="row items-push">
        <div class="col-lg-6 offset-lg-1">
          <span class="fs-2 fw-bold">¿Quien es César Nuñez?</span> <br>
          <small>Músico/baterista interprete con más de 15 años de experiencia.</small>
          <hr width="50">
          <p class="text-muted">
            Soy un enamorado de la música y sus ritmos. Alguien apasionado por ayudar y compartir mis conocimientos y habilidades. Proporciono un servicio profesional, de calidad, siempre aplicando mis conocimientos y experiencia, cumpliendo con ética, responsabilidad, compromiso y propósito a la realización de las metas y objetivos que surgen de cada proyecto.
          </p>
          <a class="btn rounded-pill btn-alt-primary mb-2" href="javascript:void(0)">
            <i class="fa fa-arrow-down me-1"></i> Conoce mi historia
          </a>
        </div>
        <div class="col-lg-4">
            <div class="text-center">
                <img class="img-fluid rounded" src="http://admin.cesarnunezonline.com/img/upload_images/CNOnline%20Instrumento1(about2).png" class="rounded" alt="...">
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content" id="cesarnunez">
      <div class="row items-push">
        <div class="col-lg-3">
          <div class="text-center">
            <img class="img-fluid rounded" src="http://admin.cesarnunezonline.com/img/upload_images/Cesar%20Nunez%20Online%20INdex.png" class="rounded" alt="...">
          </div>
        </div>
        <div class="col-lg-7 offset-lg-1">
          <span class="fs-2 fw-bold">Conoce mi historia</span>
          <hr width="50">
          <p class="text-muted">
            Soy un enamorado de la música y sus ritmos. Alguien apasionado por ayudar y compartir mis conocimientos y habilidades. Proporciono un servicio profesional, de calidad, siempre aplicando mis conocimientos y experiencia, cumpliendo con ética, responsabilidad, compromiso y propósito a la realización de las metas y objetivos que surgen de cada proyecto.
          </p>
          <a class="btn rounded-pill btn-alt-primary mb-2" href="javascript:void(0)">
            <i class="fa fa-arrow-down me-1"></i> Conoce mi historia
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- END Settings -->

<!-- Experiencias y trayectoria -->
<h2 class="content-heading"><i class="fa fa-list-check me-1"></i> 
    Trayectorias y experiencias
</h2>
  <div class="row items-push">
    <div class="col-md-6 col-xl-3">
      <!-- Story #1 -->
      <div class="block block-rounded d-flex flex-column h-100 mb-0">
        <div class="block-content block-content-full bg-image flex-grow-0" style="height: 180px; background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo43.jpg');">
          <span class="badge bg-black-50 fw-bold p-2 text-uppercase">
            Business
          </span>
        </div>
        <div class="block-content flex-grow-1">
          <h5 class="mb-1">
            <a class="text-dark" href="javascript:void(0)">
              Starting your own home based online business from scratch
            </a>
          </h5>
          <p class="fw-medium fs-sm text-muted">
            <?php echo $cb->get_name(); ?> &middot; 24 min
          </p>
        </div>
        <div class="block-content py-3 bg-body-light flex-grow-0">
          <div class="row g-0 fs-sm text-center">
            <div class="col-4">
              <a class="text-muted fw-semibold" href="javascript:void(0)">
                <i class="far fa-fw fa-eye opacity-50 me-1"></i> 1.5k
              </a>
            </div>
            <div class="col-4">
              <a class="text-muted fw-semibold" href="javascript:void(0)">
                <i class="fa fa-fw fa-heart opacity-50 me-1"></i> 300
              </a>
            </div>
            <div class="col-4">
              <a class="text-muted fw-semibold" href="javascript:void(0)">
                <i class="fa fa-fw fa-comments opacity-50 me-1"></i> 750
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Story #1 -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Story #1 -->
      <div class="block block-rounded d-flex flex-column h-100 mb-0">
        <div class="block-content block-content-full bg-image flex-grow-0" style="height: 180px; background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo43.jpg');">
          <span class="badge bg-black-50 fw-bold p-2 text-uppercase">
            Business
          </span>
        </div>
        <div class="block-content flex-grow-1">
          <h5 class="mb-1">
            <a class="text-dark" href="javascript:void(0)">
              Starting your own home based online business from scratch
            </a>
          </h5>
          <p class="fw-medium fs-sm text-muted">
            <?php echo $cb->get_name(); ?> &middot; 24 min
          </p>
        </div>
        <div class="block-content py-3 bg-body-light flex-grow-0">
          <div class="row g-0 fs-sm text-center">
            <div class="col-4">
              <a class="text-muted fw-semibold" href="javascript:void(0)">
                <i class="far fa-fw fa-eye opacity-50 me-1"></i> 1.5k
              </a>
            </div>
            <div class="col-4">
              <a class="text-muted fw-semibold" href="javascript:void(0)">
                <i class="fa fa-fw fa-heart opacity-50 me-1"></i> 300
              </a>
            </div>
            <div class="col-4">
              <a class="text-muted fw-semibold" href="javascript:void(0)">
                <i class="fa fa-fw fa-comments opacity-50 me-1"></i> 750
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Story #1 -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Story #1 -->
      <div class="block block-rounded d-flex flex-column h-100 mb-0">
        <div class="block-content block-content-full bg-image flex-grow-0" style="height: 180px; background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo43.jpg');">
          <span class="badge bg-black-50 fw-bold p-2 text-uppercase">
            Business
          </span>
        </div>
        <div class="block-content flex-grow-1">
          <h5 class="mb-1">
            <a class="text-dark" href="javascript:void(0)">
              Starting your own home based online business from scratch
            </a>
          </h5>
          <p class="fw-medium fs-sm text-muted">
            <?php echo $cb->get_name(); ?> &middot; 24 min
          </p>
        </div>
        <div class="block-content py-3 bg-body-light flex-grow-0">
          <div class="row g-0 fs-sm text-center">
            <div class="col-4">
              <a class="text-muted fw-semibold" href="javascript:void(0)">
                <i class="far fa-fw fa-eye opacity-50 me-1"></i> 1.5k
              </a>
            </div>
            <div class="col-4">
              <a class="text-muted fw-semibold" href="javascript:void(0)">
                <i class="fa fa-fw fa-heart opacity-50 me-1"></i> 300
              </a>
            </div>
            <div class="col-4">
              <a class="text-muted fw-semibold" href="javascript:void(0)">
                <i class="fa fa-fw fa-comments opacity-50 me-1"></i> 750
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Story #1 -->
    </div>
     <div class="col-md-6 col-xl-3">
      <!-- Story #1 -->
      <div class="block block-rounded d-flex flex-column h-100 mb-0">
        <div class="block-content block-content-full bg-image flex-grow-0" style="height: 180px; background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo43.jpg');">
          <span class="badge bg-black-50 fw-bold p-2 text-uppercase">
            Business
          </span>
        </div>
        <div class="block-content flex-grow-1">
          <h5 class="mb-1">
            <a class="text-dark" href="javascript:void(0)">
              Starting your own home based online business from scratch
            </a>
          </h5>
          <p class="fw-medium fs-sm text-muted">
            <?php echo $cb->get_name(); ?> &middot; 24 min
          </p>
        </div>
        <div class="block-content py-3 bg-body-light flex-grow-0">
          <div class="row g-0 fs-sm text-center">
            <div class="col-4">
              <a class="text-muted fw-semibold" href="javascript:void(0)">
                <i class="far fa-fw fa-eye opacity-50 me-1"></i> 1.5k
              </a>
            </div>
            <div class="col-4">
              <a class="text-muted fw-semibold" href="javascript:void(0)">
                <i class="fa fa-fw fa-heart opacity-50 me-1"></i> 300
              </a>
            </div>
            <div class="col-4">
              <a class="text-muted fw-semibold" href="javascript:void(0)">
                <i class="fa fa-fw fa-comments opacity-50 me-1"></i> 750
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Story #1 -->
    </div>
  </div>
  <!-- END Experiencias y trayectoria -->

  <!-- Simple Gallery (.js-gallery class is initialized in Helpers.jqMagnific()) -->
  <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
  <h2 class="content-heading"><i class="far fa-image me-1"> </i> Galería de imágenes</h2>
  <div class="row items-push js-gallery img-fluid-100">
    <?php for ($i = 17; $i < 29; $i++) { ?>
      <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo<?php echo $i; ?>@2x.jpg">
          <?php $cb->get_photo($i, false, 'img-fluid'); ?>
        </a>
      </div>
    <?php } ?>
  </div>
  <!-- END Simple Gallery -->

</div>
<!-- END Page Content -->

<!-- Subscribe Today -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34@2x.jpg');">
  <div class="bg-white-90">
    <div class="content">
      <div class="py-5 text-center">
        <h3 class="fw-bold text-black-75 mb-2">Join Us Today</h3>
        <h4 class="fw-medium text-muted mb-4">Are you ready to get started?</h4>
        <a class="btn btn-lg btn-primary" href="javascript:void(0)">Subscribe for only $19/month</a>
      </div>
    </div>
  </div>
</div>
<!-- END Subscribe Today -->
<!-- Toast error msg -->
<?php if (isset($_SESSION['message'])) { ?> 
  <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <!-- <img src="..." class="rounded me-2" alt="..."> -->
        <strong class="me-auto"> 
          <i class="<?= $_SESSION['icon']?> text-<?= $_SESSION['message_type']?>"></i>
          <?= $_SESSION['title']?>
        </strong>
        <!-- <small>11 mins ago</small> -->
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        <?= $_SESSION['message']?>
      </div>
    </div>
  </div>
<?php } ?>
<!-- jQuery (required for Magnific Popup plugin) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/magnific-popup/jquery.magnific-popup.min.js'); ?>

<!-- Page JS Helpers (Magnific Popup Plugin) -->
<script>Codebase.helpersOnLoad(['jq-magnific-popup']);</script>

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
