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

<?php $cb->get_css('js/plugins/simplemde/simplemde.min.css'); ?>

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
  <h2 class="content-heading" id="sobremi"><i class="fa fa-user-circle me-1"></i> Sobre mi</h2>
  <div class="block block-rounded">
    <div class="block-content">
      <div class="row items-push">
        <?php
          $data = $connect->query("SELECT * FROM sobre_mi")->fetchAll();
          foreach ($data as $row) {
        ?>
        <div class="col-lg-6 offset-lg-1">
          <span class="fs-2 fw-bold">¿Quien es César Nuñez?</span> <br>
          <form action="php/sobremiController.php" method="post" name="update_info_sobre_mi">
            <small>
              <input type="text" class="form-control" value="<?php echo $row['subtitulo'];?>" 
              placeholder="<?php echo $row['subtitulo'];?>" name="subtitulo" required>
            </small>
            <hr width="50">
              <p class="">
                <label class="form-label" for="example-textarea-input">Descripción:</label>
                <textarea class="form-control" id="example-textarea-input" name="descripcion" 
                  rows="7" required
                  placeholder="Descripción sobre ti.."><?php echo $row['descripcion'];?></textarea>
              </p>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary me-1" name="update_info_sobre_mi">
                  <i class="fa-solid fa-floppy-disk"></i>
                  Actualizar
                </button>
              </div>
          </form>
            <p class="text-center">- O -</p>
            <!-- foto de portada-->
            <form action="php/sobremiController.php" method="post" name="update_foto_sobre_mi"
              enctype="multipart/form-data">
              <div class="mb-3">
                <label class="form-label" for="example-text-input">Foto:</label>
                <div class="input-group">
                  <input type="file" class="form-control" id="inputGroupFile04" 
                    aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                    name="foto" accept="image/*">
                    <button class="btn btn-primary" type="submit" id="inputGroupFileAddon04"
                      name="update_foto_sobre_mi">
                      <i class="fa-solid fa-floppy-disk"></i>
                      Actualizar
                    </button>
                </div>
              </div>
            </form>
        </div>
        <div class="col-lg-4">
            <div class="text-center">
              <a href="assets/media/sobre_mi/<?php echo $row['foto'];?>" download>
                <img class="img-fluid rounded" src="assets/media/sobre_mi/<?php echo $row['foto'];?>" class="rounded">
              </a>
            </div>
        </div>
        <?php }?>
      </div>
    </div>
  </div>

  <div class="block block-rounded">
    <div class="block-content" id="mihistoria">
      <div class="row items-push">
        <?php
          $data = $connect->query("SELECT * FROM mi_historia")->fetchAll();
          foreach ($data as $row) {
        ?>
        <div class="col-lg-3">
          <div class="text-center">
            <img class="img-fluid rounded" src="assets/media/mi_historia/<?php echo $row['foto'];?>" class="rounded">
          </div>
        </div>
        <div class="col-lg-7 offset-lg-1">
          <span class="fs-2 fw-bold">Conoce mi historia</span>
          <hr width="50">
            <!-- foto mi_historia-->
            <form action="php/sobremiController.php" method="post" name="update_foto_historia"
              enctype="multipart/form-data">
              <div class="mb-3">
                <label class="form-label" for="example-text-input">Foto:</label>
                <div class="input-group">
                  <input type="file" class="form-control" id="inputGroupFile04" 
                    aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                    name="foto" accept="image/*">
                    <button class="btn btn-primary" type="submit" id="inputGroupFileAddon04"
                      name="update_foto_historia">
                      <i class="fa-solid fa-floppy-disk"></i>
                      Actualizar
                    </button>
                </div>
              </div>
            </form>
            <p class="text-center">- O -</p>
          <div class="block" style="height: 3%!important">
            <form action="php/sobremiController.php" method="post" name="update_mi_historia"
              enctype="multipart/form-data">
              <label class="form-label" for="example-text-input">Descripción:</label>
              <textarea class="js-simplemde" id="simplemde" name="descripcion"
              ><?php echo $row['descripcion'];?></textarea>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary me-1" name="update_mi_historia">
                  <i class="fa-solid fa-floppy-disk"></i>
                  Actualizar
                </button>
              </div>
            </form>
          </div>
        </div>
      <?php }?>
      </div>
    </div>
  </div>
  <!-- END Settings -->

<!-- Experiencias y trayectoria -->
<h2 class="content-heading"><i class="fa fa-list-check me-1"></i> 
    Trayectorias y experiencias
</h2>
  <div class="row items-push">
    <p><span class="text-mute">Giras dentro de la República Mexicana y el extranjero.</span></p>
    <?php
      $data = $connect->query("SELECT * FROM expe_traye")->fetchAll();
      foreach ($data as $row) {
    ?>
      <div class="col-md-6 col-xl-4">
        <!-- Story #1 -->
        <div class="block block-rounded d-flex flex-column h-100 mb-0">
          <div class="block-content block-content-full bg-image flex-grow-0" 
            style="height: 180px; background-image: 
              url('assets/media/expe_traye/<?php echo $row['imagen'];?>');">
            <span class="badge bg-black-50 fw-bold p-2 text-uppercase">
              <?php echo $row['tipo'];?>
            </span>
          </div>
          <div class="block-content flex-grow-1">
            <h5 class="mb-1">
              <a class="text-dark" href="javascript:void(0)">
                <?php echo $row['titulo'];?>
              </a>
            </h5>
            <p class="fw-medium fs-sm text-muted">
              <?php echo $row['descripcion'];?>
            </p>
            <p class="fw-medium fs-sm text-muted">
              <i class="fa-solid fa-fw fa-location-dot"></i>
              <?php echo $row['lugar'];?> 
              &middot; 
              <i class="fa-regular fa-fw fa-calendar me-1"></i>
              <?php echo $row['fecha'];?>
            </p>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary me-1" name="update_mi_historia">
                <i class="fa-solid fa-floppy-disk"></i>
                Actualizar
              </button>
            </div>
            <br>
            <form action="php/sobremiController.php" method="post" name="update_foto_historia"
                enctype="multipart/form-data">
                <div class="mb-3">
                  <p class="text-center">- O -</p>
                  <label class="form-label" for="example-text-input">
                    Imagen: (Imagen actual: <a class="text-primary" 
                      href="assets/media/expe_traye/<?php echo $row['imagen'];?>" 
                      download>
                      <?php echo $row['imagen'];?>
                      <i class="fa-regular fa-arrow-down-to-line"></i>
                    </a> )
                  </label>
                  <input type="file" class="form-control" id="inputGroupFile04" 
                    aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                    name="foto" accept="image/*">
                </div>
                <div class="mb-3">
                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary me-1" name="update_mi_historia">
                      <i class="fa-solid fa-floppy-disk"></i>
                      Actualizar
                    </button>
                  </div>
                </div>
              </form>
          </div>
          <div class="block-content py-3 bg-body-light flex-grow-0">
            <div class="row g-0 fs-sm text-center">
              <div class="col-6">
                <a class="text-muted fw-semibold" href="javascript:void(0)">
                  <i class="far fa-fw fa-edit me-1"></i> Editar
                </a>
              </div>
              <div class="col-6">
                <a class="fw-semibold text-warning" href="javascript:void(0)">
                  <i class="fa fa-fw fa-trash me-1"></i> Eliminar
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- END Story #1 -->
      </div>
    <?php }?>
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
<script >
  document.querySelector('.play').onclick = player;
  console.log(player);

  function player(event) {
    const clicked = event.target;
    console.log(clicked);
    clicked.classList.toggle('playing');
    const song = document.querySelector('.audio');

    if (song.paused || song.ended) {
      song.play();
    } else {
      song.pause();
    }
  }
</script>
<script src="custom.js"></script>

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/simplemde/simplemde.min.js'); ?>
<?php $cb->get_js('js/plugins/ckeditor/ckeditor.js'); ?>

<!-- Page JS Helpers (SimpleMDE + CKEditor plugins) -->
<script>Codebase.helpersOnLoad(['js-ckeditor', 'js-simplemde']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>