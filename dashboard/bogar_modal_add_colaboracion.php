<div class="modal" id="modal-add-colaboracion" tabindex="-1" aria-labelledby="modal-large" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Añadir video colaboración</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <form action="php/indexController.php" method="post" name="add_colaboracion_video" 
              enctype="multipart/form-data">
              <span class="fs-5 fw-bold">
                <div class="mb-4">
                  <label class="form-label" for="example-text-input">Foto de portada:</label>
                  <input type="file" class="form-control" id="inputGroupFile04" 
                    aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                    name="bg_image" accept="image/*" required>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="example-text-input">Titulo:</label>
                  <input type="text" class="form-control" id="example-text-input" name="titulo" 
                    placeholder="Escribe el titulo del video" maxlength="50" required>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <label class="form-label">Lugar:</label>
                        <input type="text" class="form-control" name="lugar"
                            placeholder="Escribe el lugar donde se grabo" required>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Fecha:</label>
                        <input type="text" class="form-control" name="fecha"
                            placeholder="Fecha Ej: 02 Feb. 2023" required>
                    </div>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="example-text-input">Url:</label>
                  <input type="text" class="form-control text-primary" id="example-text-input" name="url" 
                    placeholder="Pega la url del video" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary me-1" name="add_colaboracion_video">
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