<div class="modal" id="modal-add-musica" tabindex="-1" aria-labelledby="modal-large" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Añadir canción </h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <form action="php/indexController.php" method="post" name="add_musica" 
              enctype="multipart/form-data">
              <span class="fs-5 fw-bold">
                <div class="mb-4">
                  <label class="form-label" for="example-text-input">Subir canción: </label>
                  <input type="file" class="form-control" id="inputGroupFile04" 
                    aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                    name="cancion" accept="audio/mp3" required>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="example-text-input">Titulo:</label>
                  <input type="text" class="form-control" id="example-text-input" name="titulo" 
                    placeholder="Escribe el titulo de la canción" maxlength="50" required>
                </div>
                <div class="mb-4">
                  <label class="form-label">Fecha:</label>
                  <input type="text" class="form-control" name="fecha"
                      placeholder="Fecha Ej: 04 Feb. 2023" required maxlength="100">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="example-text-input">Descripción:</label>
                  <textarea name="descripcion" id="" cols="30" rows="6" class="form-control" id="example-text-input"
                    placeholder="Escribe la descripción de la canción" required></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary me-1" name="add_musica">
                        <i class="fa-solid fa-plus"></i>
                        Añadir
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