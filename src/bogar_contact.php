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
        <h1 class="fw-bold text-white mb-2">Ponte en contacto conmigo</h1>
        <h2 class="h4 fw-normal text-white-75">¿Tienes alguna pregunta?</h2>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Contact Form -->
<!-- Contact Form Validation functionality is initialized in js/pages/be_pages_generic_contact.min.js which was auto compiled from _js/pages/be_pages_generic_contact.js -->
<!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
<div class="content content-full">
  <div class="row justify-content-center py-4">
    <div class="col-lg-8 col-xl-6">
      <form class="js-validation-be-contact" action="be_pages_generic_contact.php" method="POST">
        <div class="mb-4">
          <label class="form-label" for="be-contact-name">Nombres</label>
          <input type="text" class="form-control form-control-lg" id="be-contact-name" name="be-contact-name" placeholder="Escribe tus nombres..">
        </div>
        <div class="mb-4">
          <label class="form-label" for="be-contact-email">Correo electrónico</label>
          <input type="email" class="form-control form-control-lg" id="be-contact-email" name="be-contact-email" placeholder="Escribe tu email..">
        </div>
        <div class="mb-4">
          <label class="form-label" for="be-contact-number">WhatsApp</label>
          <input type="email" class="form-control form-control-lg" id="be-contact-number" name="be-contact-email" placeholder="Escribe tu numero..">
        </div>
        <div class="mb-4">
          <label class="form-label" for="be-contact-message">Mensaje</label>
          <textarea class="form-control form-control-lg" id="be-contact-message" name="be-contact-message" rows="10" placeholder="Escribe tu mensaje.."></textarea>
        </div>
        <div class="mb-4 d-grid gap-2">
          <button type="submit" class="btn btn-alt-primary ">
            <i class="fa fa-paper-plane opacity-50 me-1"></i> Enviar mensaje
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END Contact Form -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Slick Slider plugin) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/slick-carousel/slick.min.js'); ?>

<!-- Page JS Helpers (Slick Slider Plugin) -->
<script>Codebase.helpersOnLoad(['jq-slick']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>