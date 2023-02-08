<?php
	require 'php/connection.php';

	if(isset($_POST['login'])) {
		$errMsg = '';

		// Get data from FORM
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == '')
			$errMsg = 'Debes escribir tu usuario';
		if($password == '')
			$errMsg = 'Debes escribir tu contraseña';

		if($errMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT id_user, name, username, password, pin FROM user WHERE username = :username');
				$stmt->execute(array(
					':username' => $username
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false){
					$errMsg = "Usuario $username no existe.";
				}
				else {
					if($password == $data['password']) {
            $_SESSION['id_user'] = $data['id_user'];
						$_SESSION['name'] = $data['name'];
						$_SESSION['username'] = $data['username'];
						$_SESSION['password'] = $data['password'];
						$_SESSION['secretpin'] = $data['pin'];

						header('Location: bogar_index.php');
						exit;
					}
					else
						$errMsg = 'Contraseña incorrecta.';
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>

<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-gd-dusk">
  <div class="hero-static content content-full bg-body-extra-light">
    <!-- Header -->
    <div class="py-4 px-1 text-center mb-4">
      <a class="link-fx fw-bold" href="index.php">
        <i class="fa fa-fire"></i>
        <span class="fs-4 text-body-color">code</span><span class="fs-4">base</span>
      </a>
      <h1 class="h3 fw-bold mt-5 mb-2">Bienvenido a su panel de Administración</h1>
      <h2 class="h5 fw-medium text-muted mb-0">Por favor, ingrese</h2>
    </div>
    <!-- END Header -->

    <!-- Sign In Form -->
    <div class="row justify-content-center px-1">
      <div class="col-sm-8 col-md-6 col-xl-5">
        <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js -->
        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
        <form class="js-validation-signin" action="" method="POST">
          <div class="form-floating mb-4">
            <input type="text" class="form-control" id="login-username" name="username" placeholder="Escribe tu usuario..">
            <label class="form-label" for="login-username">Nombre de usuario</label>
          </div>
          <div class="form-floating mb-4">
            <input type="password" class="form-control" id="login-password" name="password" placeholder="Escribe tu contraseña..">
            <label class="form-label" for="login-password">Contraseña</label>
          </div>
          <div class="row g-sm mb-4">
            <div class="col-12 mb-2">
              <input type="submit" class="btn btn-lg btn-alt-primary w-100 py-3 fw-semibold" 
                  name='login' value="Ingresar" class='submit'/>
            </div>
            <div class="col-sm-6 mb-1">
              <a class="btn btn-alt-secondary w-100" href="op_auth_signup.php">
                Olvide mi contraseña
              </a>
            </div>
            <div class="col-sm-6 mb-1">
              <a class="btn btn-alt-secondary w-100" href="../src/bogar_index.php">
                Ver portafolio
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- END Sign In Form -->
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Select2 + jQuery Validation plugins) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/op_auth_signin.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>