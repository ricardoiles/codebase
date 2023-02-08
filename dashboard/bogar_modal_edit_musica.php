<div class="modal" id="modal-edit-musica<?php echo $row['id_musica'];?>" tabindex="-1" aria-labelledby="modal-large" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Editar canción </h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <h4>
                <i class="fa fa-music opacity-50 me-1"></i>
                <b><?php echo $row['titulo'];?></b>
            </h4>
            <form action="php/indexController.php" method="post" name="update_cancion"
              enctype="multipart/form-data">
              <!-- id_colaboracion -->
              <input type="hidden" name="id_musica" value="<?php echo $row['id_musica'];?>">
              <div class="mb-3">
                <label class="form-label" for="example-text-input">Subir canción:</label> (Canción actual:  
                <a download="" href="assets/media/musica/<?php echo $row['cancion'];?>">
                    <?php echo $row['cancion'];?>
                    <i class="fa fa-download opacity-50 me-1"></i>
                </a>)
                <div class="input-group">
                  <input type="file" class="form-control" id="inputGroupFile04" 
                    aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                    name="cancion" accept="audio/mp3">
                    <button class="btn btn-primary" type="submit" id="inputGroupFileAddon04"
                      name="update_cancion">
                      <i class="fa-solid fa-floppy-disk"></i>
                      Actualizar
                    </button>
                </div>
              </div>
            </form>
            <p class="text-center">- O -</p>
            <form action="php/indexController.php" method="post" name="update_musica" 
              enctype="multipart/form-data">
              <input type="hidden" name="id_musica" value="<?php echo $row['id_musica'];?>">
              <span class="fs-5 fw-bold">
                <div class="mb-4">
                  <label class="form-label" for="example-text-input">Titulo:</label>
                  <input type="text" class="form-control" id="example-text-input" name="titulo" 
                    placeholder="Escribe el titulo de la canción" maxlength="50" required 
                    value="<?php echo $row['titulo'];?>">
                </div>
                <div class="mb-4">
                  <label class="form-label">Fecha:</label>
                  <input type="text" class="form-control" name="fecha"
                      placeholder="Fecha Ej: 04 Feb. 2023" required maxlength="100"
                      value="<?php echo $row['fecha'];?>">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="example-text-input">Descripción:</label>
                  <textarea name="descripcion" id="" cols="30" rows="6" class="form-control" id="example-text-input"
                    placeholder="Escribe la descripción de la canción" required><?php echo $row['descripcion'];?></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary me-1" name="update_musica">
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