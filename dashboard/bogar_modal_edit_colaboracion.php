<div class="modal" id="modal-edit-colaboracion<?php echo $row['id_colaboracion'];?>" tabindex="-1" aria-labelledby="modal-large" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Editar video colaboración</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <h4>
                <i class="fa fa-video opacity-50 me-1"></i>
                <b><?php echo $row['titulo'];?></b>
            </h4>
            <form action="php/indexController.php" method="post" name="update_cover_colaboracion_video"
              enctype="multipart/form-data">
              <!-- id_colaboracion -->
              <input type="hidden" name="id_colaboracion" value="<?php echo $row['id_colaboracion'];?>">
              <div class="mb-3">
                <label class="form-label" for="example-text-input">Foto portada:</label> ( Foto actual:  
                <a download="" href="assets/media/colaboraciones_video/<?php echo $row['bg_image'];?>">
                    <?php echo $row['bg_image'];?>
                    <i class="fa fa-download opacity-50 me-1"></i>
                </a>)
                <div class="input-group">
                  <input type="file" class="form-control" id="inputGroupFile04" 
                    aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                    name="cover_colaboracion" accept="image/*">
                    <button class="btn btn-primary" type="submit" id="inputGroupFileAddon04"
                      name="update_cover_colaboracion_video">
                      <i class="fa-solid fa-floppy-disk"></i>
                      Actualizar
                    </button>
                </div>
              </div>
            </form>
            <p class="text-center">- O -</p>
            <form action="php/indexController.php" method="post" name="update_info_colaboracion_video">
                <!-- id_colaboracion -->
                <input type="hidden" name="id_colaboracion" value="<?php echo $row['id_colaboracion'];?>">
              <span class="fs-5 fw-bold">
                <div class="mb-4">
                  <label class="form-label" for="example-text-input">Titulo:</label>
                  <input type="text" class="form-control" id="example-text-input" name="titulo" 
                    placeholder="Ej: <?php echo $row['titulo'];?>" value="<?php echo $row['titulo'];?>"
                    maxlength="50">
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <label class="form-label">Lugar:</label>
                        <input type="text" class="form-control" name="lugar" value="<?php echo $row['lugar'];?>"
                            placeholder="<?php echo $row['lugar'];?>">
                    </div>
                    <div class="col-6">
                        <label class="form-label">Fecha:</label>
                        <input type="text" class="form-control" name="fecha" value="<?php echo $row['fecha'];?>"
                            placeholder="<?php echo $row['fecha'];?>">
                    </div>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="example-text-input">Url:</label>
                  <input type="text" class="form-control text-primary" id="example-text-input" name="url" 
                    placeholder="<?php echo $row['url'];?>" value="<?php echo $row['url'];?>">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary me-1" name="update_info_colaboracion_video">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Actualizar
                    </button>
                </div>
            </form>
          </div>
          <br>
          <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
              Cancelar
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>