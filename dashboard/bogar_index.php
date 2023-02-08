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
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>
<link rel="stylesheet" href="custom.css">
<!-- Hero -->
<?php
  $data = $connect->query("SELECT * FROM hero_index")->fetchAll();
  foreach ($data as $row) {
?>
<div class="bg-image" style="background-image: 
                      url('assets/media/hero_index/<?php echo $row['foto_cover_hero'];?>')">
  <div class="bg-black-50">
    <div class="content content-top text-center">
      <div class="py-5">
        <!-- logo_hero -->
        <div class="mb-3">
          <a class="img-link" download="" href="assets/media/hero_index/<?php echo $row['logo_hero'];?>">
            <img class="img-avatar img-avatar96 " 
              src="assets/media/hero_index/<?php echo $row['logo_hero'];?>" 
              alt="">  
          </a>
        </div>
          <!-- upload photo -->
          <h1 class="h5 fw-bold mb-2 d-flex justify-content-center">
            <div class="col-6">
              <!-- foto de perfil o logo-->
              <form action="php/indexController.php" method="post" name="update_logo_hero"
                enctype="multipart/form-data">
                <div class="mb-3">
                  <label class="form-label text-white" for="example-text-input">Logo o foto:</label>
                    <div class="input-group">
                      <input type="file" class="form-control" id="inputGroupFile04" 
                        aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                        name="logo_hero" accept="image/*">
                      <button class="btn btn-primary" type="submit" id="inputGroupFileAddon04" 
                        name="update_logo_hero">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Actualizar
                      </button>
                    </div>
                </div>
              </form>
              <!-- foto de portada-->
              <form action="php/indexController.php" method="post" name="update_foto_cover_hero"
                enctype="multipart/form-data">
                <div class="mb-3">
                  <label class="form-label text-white" for="example-text-input">Foto de portada:</label>
                  <div class="input-group">
                    <input type="file" class="form-control" id="inputGroupFile04" 
                      aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                      name="foto_cover_hero" accept="image/*">
                      <button class="btn btn-primary" type="submit" id="inputGroupFileAddon04"
                        name="update_foto_cover_hero">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Actualizar
                      </button>
                  </div>
                </div>
              </form>
            </div>
          </h1>
        <span class="text-white text-bold">- O - </span>
        <form action="php/indexController.php" method="post" name="update_hero_info">
          <!-- fullaname -->
          <h1 class="h5 fw-bold mb-2 d-flex justify-content-center">
            <div class="col-3">
                <label class="form-label text-white" for="example-text-input">Nombres o nombre de portafolio:</label>
                <input type="text" class="form-control text-center" id="example-text-input" name="fullname" 
                  placeholder="Ej:<?php echo $row['fullname'];?>" value="<?php echo $row['fullname'];?>">
            </div>
          </h1>
          <!-- profesion -->
          <h2 class="h5 fw-medium text-white-75 d-flex justify-content-center">
            <div class="col-3">
                <label class="form-label text-white" for="example-text-input">Profesión:</label>
                <input type="text" class="form-control text-center" id="example-text-input" name="profesion" 
                  placeholder="Ej: <?php echo $row['profesion'];?>" value="<?php echo $row['profesion'];?>">
            </div>
          </h2>
          <h2 class="h5 fw-medium text-white-75 d-flex justify-content-center">
            <div class="col-8">
                <label class="form-label text-white" for="example-text-input">Lema o eslogan:</label>
                <input type="text" class="form-control text-center" id="example-text-input" name="lema" 
                  placeholder="Ej: <?php echo $row['lema'];?>" value="<?php echo $row['lema'];?>">
            </div>
          </h2>
          <!-- END Personal -->
          <!-- Actions -->
          <!-- <input class="btn btn-primary me-1" type="submit" value="Actualizar"> -->
          <button type="submit" class="btn btn-primary me-1" name="update_hero_info">
              <i class="fa-solid fa-floppy-disk"></i>
              Actualizar
          </button>
          <!-- <input type="submit" class="btn btn-primary me-1" value="Actualizar" name="update_hero_info"/> -->
          <!-- END Actions -->
        </form>
        <?php
          }
        ?>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Settings -->
  <div class="block block-rounded" id="infoindex">
    <div class="block-content" id="cesarnunez">
      <div class="row items-push">
        <div class="col-lg-3">
          <div class="text-center">
          <?php
            $data = $connect->query("SELECT * FROM info_bogar_index")->fetchAll();
            foreach ($data as $row) {
          ?>
            <a href="assets/media/hero_index/<?php echo $row['foto_index'];?>" download="">
              <img class="img-fluid rounded" src="assets/media/hero_index/<?php echo $row['foto_index'];?>" class="rounded">
            </a>
          <?php }?>
          </div>
        </div>
        <div class="col-lg-7 offset-lg-1">
          <?php
            $data = $connect->query("SELECT * FROM info_bogar_index")->fetchAll();
            foreach ($data as $row) {
          ?>
            <!-- foto de portada-->
            <form action="php/indexController.php" method="post" name="update_foto_index"
              enctype="multipart/form-data">
              <div class="mb-3">
                <label class="form-label" for="example-text-input">Foto:</label>
                <div class="input-group">
                  <input type="file" class="form-control" id="inputGroupFile04" 
                    aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                    name="foto_index" accept="image/*">
                    <button class="btn btn-primary" type="submit" id="inputGroupFileAddon04"
                      name="update_foto_index">
                      <i class="fa-solid fa-floppy-disk"></i>
                      Actualizar
                    </button>
                </div>
              </div>
            </form>
            <p class="text-center">- O -</p>
            <form action="php/indexController.php" method="post" name="update_info_bogar_index">
              <span class="fs-5 fw-bold">
                <div class="mb-4">
                  <label class="form-label" for="example-text-input">Nombres</label>
                  <input type="text" class="form-control" id="example-text-input" name="fullname" 
                    placeholder="Ej: <?php echo $row['fullname'];?>" value="<?php echo $row['fullname'];?>">
                </div>
              </span>
              <p class="">
                <label class="form-label" for="example-textarea-input">Descripción breve sobre ti</label>
                <textarea class="form-control" id="example-textarea-input" name="descripcion" 
                  rows="7" 
                  placeholder="Descripción sobre ti.."><?php echo $row['descripcion'];?></textarea>
              </p>
              <button type="submit" class="btn btn-primary me-1" name="update_info_bogar_index">
                <i class="fa-solid fa-floppy-disk"></i>
                Actualizar
              </button>
            </form>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
  <!-- END Settings -->
  <!-- Image Cards Media Widgets -->
    <h2 class="content-heading d-flex justify-content-between align-items-center" id="colaboracionVideo">
      <span class="fw-semibold">Colaboraciones <i class="fa fa-video opacity-50 me-1"></i></span>
       <button type="button" class="btn btn-sm btn-alt-primary" 
        data-bs-toggle="modal" data-bs-target="#modal-add-colaboracion">
          <i class="fa fa-plus opacity-50 me-1"></i> Añadir
        </button>
    </h2>
    <!-- Modal -->
    <?php require 'bogar_modal_add_colaboracion.php'; ?>
    <div class="row">
      <!-- Row #1 -->
      <?php
        $data = $connect->query("SELECT * FROM colaboraciones_video")->fetchAll();
        foreach ($data as $row) {
      ?>
      <div class="col-md-6 col-xl-4">
        <a class="block shadow-none border-start bg-image" 
          style="background-image: 
                      url('assets/media/colaboraciones_video/<?php echo $row['bg_image'];?>');"
          href="<?php echo $row['url'];?>" target="_blank">
          <div class="block-content block-content-full bg-black-50">
            <div class="pt-7">
              <h3 class="h4 text-white fw-bold mb-3">
                <?php echo $row['titulo'];?>
              </h3>
              <h4 class="text-white-75 fw-medium fs-sm mb-0">
                <span class="me-2">
                  <i class="fa fa-location-dot opacity-75 me-1"></i> <?php echo $row['lugar'];?>
                </span>
                <span>
                  <i class="fa fa-calendar opacity-75 me-1"></i> <?php echo $row['fecha'];?>
                </span>
              </h4>
            </div>
          </div>
        </a>
        <!-- Crud options -->
        <div class="row g-sm">
          <div class="col-6">
            <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)"
              data-bs-toggle="modal" data-bs-target="#modal-edit-colaboracion<?php echo $row['id_colaboracion'];?>">
              <i class="fa fa-pencil me-1 text-muted"></i> Editar
            </a>
          </div>
          <div class="col-6">
            <a class="btn w-100 btn-alt-warning" href="php/indexController.php?colaboracion=<?php echo $row['id_colaboracion']?>">
              <i class="fa fa-trash me-1"></i> Eliminar
            </a>
          </div>
        </div>
      </div>
      <?php require 'bogar_modal_edit_colaboracion.php'; ?>
      <?php }?>
      <!-- END Row #1 -->
    </div>
  <!-- END Image Cards Media Widgets -->

  <!-- Simple Media Widgets -->
    <!-- <h2 class="content-heading">Música <small><i class="fa fa-music opacity-50 me-1"></i></small></h2> -->
    <h2 class="content-heading d-flex justify-content-between align-items-center" id="musica">
      <span class="fw-semibold">Música <i class="fa fa-music opacity-50 me-1"></i></span>
       <button type="button" class="btn btn-sm btn-alt-primary" 
        data-bs-toggle="modal" data-bs-target="#modal-add-musica">
          <i class="fa fa-plus opacity-50 me-1"></i> Añadir
        </button>
    </h2>
    <?php require 'bogar_modal_add_music.php'; ?>
    <div class="row">
      <!-- Row #1 -->
      <?php
        $data = $connect->query("SELECT * FROM musica")->fetchAll();
        foreach ($data as $row) {
      ?>
        <div class="col-md-6 col-xl-4">
          <div class="block block-rounded block-link-pop">
            <div class="block-content block-content-full">
              <div class="row g-sm">
                <div class="ms-1 text-start">
                  <p class="fs-lg fw-semibold mb-0">
                    <?php echo $row['titulo'];?>
                  </p>
                  <p class="fs-sm fw-semibold text-muted mb-0">
                    <?php echo $row['fecha'];?>
                  </p>
                  <span>
                    <?php echo substr($row['descripcion'], 0, 50 );?>
                    <a class="text-secondary" data-bs-toggle="collapse" href="#collapseExample<?php echo $row['id_musica'];?>" 
                      role="button" aria-expanded="false" aria-controls="collapseExample">
                      [...Leer más]
                    </a>
                  <div class="collapse" id="collapseExample<?php echo $row['id_musica'];?>">
                    <div class="card card-body">
                      <?php echo $row['descripcion'];?>
                    </div>
                  </div>
                    
                  </span>
                </div>
              </div>
              <div class="row g-sm col-12">
                &nbsp;
                <div class="audio-player">
                  <audio controls>
                    <source src="assets/media/musica/<?php echo $row['cancion'];?>" type="audio/mp3">
                    Your browser does not support the audio element.
                  </audio>
                </div>
              </div>
              <hr>
              <div class="row g-sm">
                <div class="col-6">
                  <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="modal" 
                  data-bs-target="#modal-edit-musica<?php echo $row['id_musica'];?>">
                    <i class="fa fa-pencil me-1 text-muted"></i> Editar
                  </a>
                </div>
                <div class="col-6">
                  <a class="btn w-100 btn-alt-warning" 
                    href="php/indexController.php?cancion=<?php echo $row['id_musica']?>">
                    <i class="fa fa-trash me-1"></i> Eliminar
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php require 'bogar_modal_edit_musica.php'; ?>
      <?php }?>
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
<?php require 'inc/_global/views/footer_end.php'; ?>