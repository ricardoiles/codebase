<?php
	require 'connection.php';

	if(empty($_SESSION['name']))
	header('Location: bogar_login.php');

    // update logo_hero
    if(isset($_POST['update_logo_hero'])){
        $id_user = 1;
        $logo_hero = $_FILES['logo_hero']['name'];

        if(isset($logo_hero) && $logo_hero != ""){
            $tipo = $_FILES['logo_hero']['type'];
            $temp  = $_FILES['logo_hero']['tmp_name'];
    
           if( !((strpos($tipo,'jpg') || strpos($tipo,'png') || strpos($tipo,'jpeg') || strpos($tipo,'webp')))){
              $_SESSION['message'] = 'solo se permite archivos jpeg, jpg, png, webp';
              $_SESSION['message_type'] = 'danger';
              header('Location: ../bogar_index.php');
           }else{
            try {
                // Define database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "cesaupfy_bogar";

                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
                $resultado = "UPDATE hero_index SET logo_hero = '$logo_hero' WHERE id_user = ".$id_user;
              
                // Prepare statement
                $stmt = $conn->prepare($resultado);
              
                // execute the query
                $stmt->execute();
              
                // echo a message to say the UPDATE succeeded
                echo $stmt->rowCount() . " records UPDATED successfully";
              } catch(PDOException $e) {
                echo $resultado . "<br>" . $e->getMessage();
              }
              
              $conn = null;

            //  $resultado = mysqli_query($connect,$query);
             if($stmt){
                move_uploaded_file($temp,'../assets/media/hero_index/'.$logo_hero);   

                $_SESSION['title'] = '¡Yupi! Todo ha salido bien';
                $_SESSION['message'] = 'Se ha actualizado la imagen correctamente';
                $_SESSION['icon'] = 'fa-solid fa-circle-check';
                $_SESSION['message_type'] = 'success';

                header('Location: ../bogar_index.php');
             }else{
                $_SESSION['title'] = '¡Ouch! Algo salio mal';
                $_SESSION['message'] = 'No se pudo cargar tu imagen, hazlo de nuevo';
                $_SESSION['icon'] = 'fa-solid fa-circle-xmark';
                $_SESSION['message_type'] = 'danger';

                header('Location: ../bogar_index.php');
             }
           }
        }else{
            $_SESSION['title'] = '¡Hey! Checa este mensaje';
            $_SESSION['message'] = 'Debes cargar una imagen';
            $_SESSION['icon'] = 'fa-solid fa-circle-exclamation';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../bogar_index.php');
        }
    }    
    
    // update logo_hero
    if(isset($_POST['update_foto_cover_hero'])){
        $id_user = 1;
        $foto_cover_hero = $_FILES['foto_cover_hero']['name'];

        if(isset($foto_cover_hero) && $foto_cover_hero != ""){
            $tipo = $_FILES['foto_cover_hero']['type'];
            $temp  = $_FILES['foto_cover_hero']['tmp_name'];
    
           if( !((strpos($tipo,'jpg') || strpos($tipo,'png') || strpos($tipo,'jpeg') || strpos($tipo,'webp')))){
            $_SESSION['title'] = '¡Hey! Checa este mensaje';
            $_SESSION['message'] = 'Solo se permite archivos jpeg, jpg, png, webp';
            $_SESSION['icon'] = 'fa-solid fa-circle-exclamation';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../bogar_index.php');
           }else{
            try {
                // Define database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "cesaupfy_bogar";

                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
                $resultado = "UPDATE hero_index SET foto_cover_hero = '$foto_cover_hero' WHERE id_user = ".$id_user;
              
                // Prepare statement
                $stmt = $conn->prepare($resultado);
              
                // execute the query
                $stmt->execute();
              
                // echo a message to say the UPDATE succeeded
                echo $stmt->rowCount() . " records UPDATED successfully";
              } catch(PDOException $e) {
                echo $resultado . "<br>" . $e->getMessage();
              }
              
              $conn = null;

            //  $resultado = mysqli_query($connect,$query);
             if($stmt){
                move_uploaded_file($temp,'../assets/media/hero_index/'.$foto_cover_hero);   

                $_SESSION['title'] = '¡Yupi! Todo ha salido bien';
                $_SESSION['message'] = 'Se ha actualizado la imagen correctamente';
                $_SESSION['icon'] = 'fa-solid fa-circle-check';
                $_SESSION['message_type'] = 'success';

                header('Location: ../bogar_index.php');
             }else{
                $_SESSION['title'] = '¡Ouch! Algo salio mal';
                $_SESSION['message'] = 'No se pudo cargar tu imagen, hazlo de nuevo';
                $_SESSION['icon'] = 'fa-solid fa-circle-xmark';
                $_SESSION['message_type'] = 'danger';

                header('Location: ../bogar_index.php');
             }
           }
        }else{
            $_SESSION['title'] = '¡Hey! Checa este mensaje';
            $_SESSION['message'] = 'Debes cargar una imagen';
            $_SESSION['icon'] = 'fa-solid fa-circle-exclamation';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../bogar_index.php');
        }
    } 
    
    // update hero info
    if(isset($_POST['update_hero_info'])){
        $id_user = 1;
        $fullname = $_POST['fullname'];
        $profesion = $_POST['profesion'];
        $lema = $_POST['lema'];
        try {
            // Define database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cesaupfy_bogar";

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $resultado = "UPDATE hero_index SET fullname = '$fullname', profesion = '$profesion', lema = '$lema'
                        WHERE id_user = ".$id_user;
            
            // Prepare statement
            $stmt = $conn->prepare($resultado);
            
            // execute the query
            $stmt->execute();
            
            // echo a message to say the UPDATE succeeded
            // echo $stmt->rowCount() . " records UPDATED successfully";

            $_SESSION['title'] = '¡Yupi! Todo ha salido bien';
            $_SESSION['message'] = 'Se ha actualizado la información correctamente';
            $_SESSION['icon'] = 'fa-solid fa-circle-check';
            $_SESSION['message_type'] = 'success';
            header('Location: ../bogar_index.php');
        }catch(PDOException $e) {
            echo $resultado . "<br>" . $e->getMessage();
        }
        $conn = null;  
    }

    // update foto_index
    if(isset($_POST['update_foto_index'])){
        $id_user = 1;
        $foto_index = $_FILES['foto_index']['name'];

        if(isset($foto_index) && $foto_index != ""){
            $tipo = $_FILES['foto_index']['type'];
            $temp  = $_FILES['foto_index']['tmp_name'];
    
           if( !((strpos($tipo,'jpg') || strpos($tipo,'png') || strpos($tipo,'jpeg') || strpos($tipo,'webp')))){
            $_SESSION['title'] = '¡Hey! Checa este mensaje';
            $_SESSION['message'] = 'Solo se permite archivos jpeg, jpg, png, webp';
            $_SESSION['icon'] = 'fa-solid fa-circle-exclamation';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../bogar_index.php#infoindex');
           }else{
            try {
                // Define database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "cesaupfy_bogar";

                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
                $resultado = "UPDATE info_bogar_index SET foto_index = '$foto_index' WHERE id_user = ".$id_user;
              
                // Prepare statement
                $stmt = $conn->prepare($resultado);
              
                // execute the query
                $stmt->execute();
              
                // echo a message to say the UPDATE succeeded
                echo $stmt->rowCount() . " records UPDATED successfully";
              } catch(PDOException $e) {
                echo $resultado . "<br>" . $e->getMessage();
              }
              
              $conn = null;

            //  $resultado = mysqli_query($connect,$query);
             if($stmt){
                move_uploaded_file($temp,'../assets/media/hero_index/'.$foto_index);   

                $_SESSION['title'] = '¡Yupi! Todo ha salido bien';
                $_SESSION['message'] = 'Se ha actualizado la imagen correctamente';
                $_SESSION['icon'] = 'fa-solid fa-circle-check';
                $_SESSION['message_type'] = 'success';

                header('Location: ../bogar_index.php#infoindex');
             }else{
                $_SESSION['title'] = '¡Ouch! Algo salio mal';
                $_SESSION['message'] = 'No se pudo cargar tu imagen, hazlo de nuevo';
                $_SESSION['icon'] = 'fa-solid fa-circle-xmark';
                $_SESSION['message_type'] = 'danger';

                header('Location: ../bogar_index.php#infoindex');
             }
           }
        }else{
            $_SESSION['title'] = '¡Hey! Checa este mensaje';
            $_SESSION['message'] = 'Debes cargar una imagen';
            $_SESSION['icon'] = 'fa-solid fa-circle-exclamation';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../bogar_index.php#infoindex');
        }
    } 

    // update update_info_bogar_index
    if(isset($_POST['update_info_bogar_index'])){
        $id_user = 1;
        $fullname = $_POST['fullname'];
        $descripcion = $_POST['descripcion'];
        try {
            // Define database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cesaupfy_bogar";

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $resultado = "UPDATE info_bogar_index SET fullname = '$fullname', descripcion = '$descripcion'
                        WHERE id_user = ".$id_user;
            
            // Prepare statement
            $stmt = $conn->prepare($resultado);
            
            // execute the query
            $stmt->execute();
            
            // echo a message to say the UPDATE succeeded
            // echo $stmt->rowCount() . " records UPDATED successfully";

            $_SESSION['title'] = '¡Yupi! Todo ha salido bien';
            $_SESSION['message'] = 'Se ha actualizado la información correctamente';
            $_SESSION['icon'] = 'fa-solid fa-circle-check';
            $_SESSION['message_type'] = 'success';
            header('Location: ../bogar_index.php#infoindex');
        }catch(PDOException $e) {
            echo $resultado . "<br>" . $e->getMessage();
        }
        $conn = null;  
    }

    // update foto portada cover_colaboracion_video
    if(isset($_POST['update_cover_colaboracion_video'])){
        $id_user = 1;
        $id_colaboracion = $_POST['id_colaboracion'];
        $cover_colaboracion = $_FILES['cover_colaboracion']['name'];

        if(isset($cover_colaboracion) && $cover_colaboracion != ""){
            $tipo = $_FILES['cover_colaboracion']['type'];
            $temp  = $_FILES['cover_colaboracion']['tmp_name'];
    
           if( !((strpos($tipo,'jpg') || strpos($tipo,'png') || strpos($tipo,'jpeg') || strpos($tipo,'webp')))){
            $_SESSION['title'] = '¡Hey! Checa este mensaje';
            $_SESSION['message'] = 'Solo se permite archivos jpeg, jpg, png, webp';
            $_SESSION['icon'] = 'fa-solid fa-circle-exclamation';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../bogar_index.php#colaboracionVideo');
           }else{
            try {
                // Define database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "cesaupfy_bogar";

                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
                $resultado = "UPDATE colaboraciones_video SET bg_image = '$cover_colaboracion' WHERE id_colaboracion = ".$id_colaboracion;
              
                // Prepare statement
                $stmt = $conn->prepare($resultado);
              
                // execute the query
                $stmt->execute();
              
                // echo a message to say the UPDATE succeeded
                echo $stmt->rowCount() . " records UPDATED successfully";
              } catch(PDOException $e) {
                echo $resultado . "<br>" . $e->getMessage();
              }
              
              $conn = null;

            //  $resultado = mysqli_query($connect,$query);
             if($stmt){
                move_uploaded_file($temp,'../assets/media/colaboraciones_video/'.$cover_colaboracion);   

                $_SESSION['title'] = '¡Yupi! Todo ha salido bien';
                $_SESSION['message'] = 'Se ha actualizado la imagen correctamente';
                $_SESSION['icon'] = 'fa-solid fa-circle-check';
                $_SESSION['message_type'] = 'success';

                header('Location: ../bogar_index.php#colaboracionVideo');
             }else{
                $_SESSION['title'] = '¡Ouch! Algo salio mal';
                $_SESSION['message'] = 'No se pudo cargar tu imagen, hazlo de nuevo';
                $_SESSION['icon'] = 'fa-solid fa-circle-xmark';
                $_SESSION['message_type'] = 'danger';

                header('Location: ../bogar_index.php#colaboracionVideo');
             }
           }
        }else{
            $_SESSION['title'] = '¡Hey! Checa este mensaje';
            $_SESSION['message'] = 'Debes cargar una imagen';
            $_SESSION['icon'] = 'fa-solid fa-circle-exclamation';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../bogar_index.php#colaboracionVideo');
        }
    }

    // Modal --> update_info_colaboracion_video
    if(isset($_POST['update_info_colaboracion_video'])){
        $id_user = 1;
        $id_colaboracion = $_POST['id_colaboracion'];
        $titulo = $_POST['titulo'];
        $lugar = $_POST['lugar'];
        $fecha = $_POST['fecha'];
        $url = $_POST['url'];
        try {
            // Define database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cesaupfy_bogar";

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $resultado = "UPDATE colaboraciones_video SET titulo = '$titulo', lugar = '$lugar', 
                        fecha = '$fecha', url = '$url'
                        WHERE id_colaboracion = ".$id_colaboracion;
            
            // Prepare statement
            $stmt = $conn->prepare($resultado);
            
            // execute the query
            $stmt->execute();
            
            // echo a message to say the UPDATE succeeded
            // echo $stmt->rowCount() . " records UPDATED successfully";

            $_SESSION['title'] = '¡Yupi! Todo ha salido bien';
            $_SESSION['message'] = 'Se ha actualizado la colaboracion correctamente';
            $_SESSION['icon'] = 'fa-solid fa-circle-check';
            $_SESSION['message_type'] = 'success';
            header('Location: ../bogar_index.php#colaboracionVideo');
        }catch(PDOException $e) {
            echo $resultado . "<br>" . $e->getMessage();
        }
        $conn = null;  
    }

    // Modal --> add_colaboracion_video
    if(isset($_POST['add_colaboracion_video'])){
        $id_user = 1;
        $titulo = $_POST['titulo'];
        $lugar = $_POST['lugar'];
        $fecha = $_POST['fecha'];
        $url = $_POST['url'];
        $bg_image = $_FILES['bg_image']['name'];

        if(isset($bg_image) && $bg_image != ""){
            $tipo = $_FILES['bg_image']['type'];
            $temp  = $_FILES['bg_image']['tmp_name'];
    
           if( !((strpos($tipo,'jpg') || strpos($tipo,'png') || strpos($tipo,'jpeg') || strpos($tipo,'webp')))){
            $_SESSION['title'] = '¡Hey! Checa este mensaje';
            $_SESSION['message'] = 'Solo se permite archivos jpeg, jpg, png, webp';
            $_SESSION['icon'] = 'fa-solid fa-circle-exclamation';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../bogar_index.php#colaboracionVideo');
           }else{
            try {
                // Define database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "cesaupfy_bogar";

                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
                $resultado = "INSERT INTO colaboraciones_video (id_user, bg_image, titulo, lugar, fecha, url) 
                    VALUES ('$id_user', '$bg_image', '$titulo', '$lugar', '$fecha', '$url')";
              
                // Prepare statement
                $stmt = $conn->prepare($resultado);
              
                // execute the query
                $stmt->execute();
              
                // echo a message to say the UPDATE succeeded
                echo $stmt->rowCount() . " records UPDATED successfully";
              } catch(PDOException $e) {
                echo $resultado . "<br>" . $e->getMessage();
              }
              
              $conn = null;

            //  $resultado = mysqli_query($connect,$query);
             if($stmt){
                move_uploaded_file($temp,'../assets/media/colaboraciones_video/'.$bg_image);   

                $_SESSION['title'] = '¡Yupi! Todo ha salido bien';
                $_SESSION['message'] = 'Se añadió una nueva colaboracion correctamente';
                $_SESSION['icon'] = 'fa-solid fa-circle-check';
                $_SESSION['message_type'] = 'success';

                header('Location: ../bogar_index.php#colaboracionVideo');
             }else{
                $_SESSION['title'] = '¡Ouch! Algo salio mal';
                $_SESSION['message'] = 'No se pudo añadir la colaboración, hazlo de nuevo';
                $_SESSION['icon'] = 'fa-solid fa-circle-xmark';
                $_SESSION['message_type'] = 'danger';

                header('Location: ../bogar_index.php#colaboracionVideo');
             }
           }
        }else{
            $_SESSION['title'] = '¡Hey! Checa este mensaje';
            $_SESSION['message'] = 'Debes cargar una imagen';
            $_SESSION['icon'] = 'fa-solid fa-circle-exclamation';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../bogar_index.php#colaboracionVideo');
        }
    }

    // delete colaboracion_video
    if(isset($_GET['colaboracion'])){
        $id_colaboracion = $_GET['colaboracion'];

        try {
            // Define database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cesaupfy_bogar";

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $resultado = "DELETE FROM colaboraciones_video WHERE id_colaboracion = ".$id_colaboracion;
            
            // Prepare statement
            $stmt = $conn->prepare($resultado);
            
            // execute the query
            $stmt->execute();
            
            // echo a message to say the UPDATE succeeded
            echo $stmt->rowCount() . " records UPDATED successfully";
        }catch(PDOException $e) {
            echo $resultado . "<br>" . $e->getMessage();
            }
        $conn = null;
        //  $resultado = mysqli_query($connect,$query);
            if($stmt){
                

            $_SESSION['title'] = '¡Yupi! Todo ha salido bien';
            $_SESSION['message'] = 'Se ha eliminado la colaboración correctamente';
            $_SESSION['icon'] = 'fa-solid fa-circle-check';
            $_SESSION['message_type'] = 'success';

            header('Location: ../bogar_index.php#colaboracionVideo');
            }else{
            $_SESSION['title'] = '¡Ouch! Algo salio mal';
            $_SESSION['message'] = 'No se pudo eliminar la colaboración, hazlo de nuevo';
            $_SESSION['icon'] = 'fa-solid fa-circle-xmark';
            $_SESSION['message_type'] = 'danger';

            header('Location: ../bogar_index.php#colaboracionVideo');
            }
    }

    // Modal --> add_musica
    if(isset($_POST['add_musica'])){
        $id_user = 1;
        $titulo = $_POST['titulo'];
        $fecha = $_POST['fecha'];
        $descripcion = $_POST['descripcion'];
        $cancion = $_FILES['cancion']['name'];

        if(isset($cancion) && $cancion != ""){
            $tipo = $_FILES['cancion']['type'];
            $temp  = $_FILES['cancion']['tmp_name'];
    
           
            try {
                // Define database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "cesaupfy_bogar";

                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
                $resultado = "INSERT INTO musica (id_user, titulo, fecha, descripcion, cancion) 
                    VALUES ('$id_user', '$titulo', '$fecha', '$descripcion', '$cancion')";
              
                // Prepare statement
                $stmt = $conn->prepare($resultado);
              
                // execute the query
                $stmt->execute();
              
                // echo a message to say the UPDATE succeeded
                echo $stmt->rowCount() . " records UPDATED successfully";
            }catch(PDOException $e) {
                echo $resultado . "<br>" . $e->getMessage();
            }
              
              $conn = null;

            //  $resultado = mysqli_query($connect,$query);
             if($stmt){
                move_uploaded_file($temp,'../assets/media/musica/'.$cancion);   

                $_SESSION['title'] = '¡Yupi! Todo ha salido bien';
                $_SESSION['message'] = 'Se añadió una nueva canción correctamente';
                $_SESSION['icon'] = 'fa-solid fa-circle-check';
                $_SESSION['message_type'] = 'success';

                header('Location: ../bogar_index.php#musica');
             }else{
                $_SESSION['title'] = '¡Ouch! Algo salio mal';
                $_SESSION['message'] = 'No se pudo añadir la canción, hazlo de nuevo';
                $_SESSION['icon'] = 'fa-solid fa-circle-xmark';
                $_SESSION['message_type'] = 'danger';

                header('Location: ../bogar_index.php#musica');
             }
           
        }else{
            $_SESSION['title'] = '¡Hey! Checa este mensaje';
            $_SESSION['message'] = 'Debes cargar una canción';
            $_SESSION['icon'] = 'fa-solid fa-circle-exclamation';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../bogar_index.php#musica');
        }
    }

    // update_cancion
    if(isset($_POST['update_cancion'])){
        $id_user = 1;
        $id_musica = $_POST['id_musica'];
        $cancion = $_FILES['cancion']['name'];

        if(isset($cancion) && $cancion != ""){
            $tipo = $_FILES['cancion']['type'];
            $temp  = $_FILES['cancion']['tmp_name'];
    
           
            try {
                // Define database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "cesaupfy_bogar";

                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
                $resultado = "UPDATE musica SET cancion = '$cancion' 
                            WHERE id_musica = ".$id_musica;
              
                // Prepare statement
                $stmt = $conn->prepare($resultado);
              
                // execute the query
                $stmt->execute();
              
                // echo a message to say the UPDATE succeeded
                echo $stmt->rowCount() . " records UPDATED successfully";
            }catch(PDOException $e) {
                echo $resultado . "<br>" . $e->getMessage();
            }
              
              $conn = null;

            //  $resultado = mysqli_query($connect,$query);
             if($stmt){
                move_uploaded_file($temp,'../assets/media/musica/'.$cancion);   

                $_SESSION['title'] = '¡Yupi! Todo ha salido bien';
                $_SESSION['message'] = 'Se Actualizo la canción correctamente';
                $_SESSION['icon'] = 'fa-solid fa-circle-check';
                $_SESSION['message_type'] = 'success';

                header('Location: ../bogar_index.php#musica');
             }else{
                $_SESSION['title'] = '¡Ouch! Algo salio mal';
                $_SESSION['message'] = 'No se pudo actualizar la canción, hazlo de nuevo';
                $_SESSION['icon'] = 'fa-solid fa-circle-xmark';
                $_SESSION['message_type'] = 'danger';

                header('Location: ../bogar_index.php#musica');
             }
           
        }else{
            $_SESSION['title'] = '¡Hey! Checa este mensaje';
            $_SESSION['message'] = 'Debes cargar una canción';
            $_SESSION['icon'] = 'fa-solid fa-circle-exclamation';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../bogar_index.php#musica');
        }
    }

    // Modal --> update_musica
    if(isset($_POST['update_musica'])){
        $id_musica = $_POST['id_musica'];
        $titulo = $_POST['titulo'];
        $fecha = $_POST['fecha'];
        $descripcion = $_POST['descripcion'];
           
        try {
            // Define database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cesaupfy_bogar";

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $resultado = "UPDATE musica SET titulo = '$titulo', fecha = '$fecha', descripcion = '$descripcion' 
                        WHERE id_musica = ".$id_musica;
            
            // Prepare statement
            $stmt = $conn->prepare($resultado);
            
            // execute the query
            $stmt->execute();
            
            // echo a message to say the UPDATE succeeded
            echo $stmt->rowCount() . " records UPDATED successfully";
        }catch(PDOException $e) {
            echo $resultado . "<br>" . $e->getMessage();
        }
        $conn = null;
        //  $resultado = mysqli_query($connect,$query);
        if($stmt){
            $_SESSION['title'] = '¡Yupi! Todo ha salido bien';
            $_SESSION['message'] = 'Se actualizo la información de la canción correctamente';
            $_SESSION['icon'] = 'fa-solid fa-circle-check';
            $_SESSION['message_type'] = 'success';

            header('Location: ../bogar_index.php#musica');
        }else{
            $_SESSION['title'] = '¡Ouch! Algo salio mal';
            $_SESSION['message'] = 'No se pudo actualizar la información de la canción, hazlo de nuevo';
            $_SESSION['icon'] = 'fa-solid fa-circle-xmark';
            $_SESSION['message_type'] = 'danger';

            header('Location: ../bogar_index.php#musica');
        }
           
        
    }

    // Delete musica
    if(isset($_GET['cancion'])){
        $id_musica = $_GET['cancion'];
           
        try {
            // Define database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cesaupfy_bogar";

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $resultado = "DELETE FROM musica WHERE id_musica = ".$id_musica;
            
            // Prepare statement
            $stmt = $conn->prepare($resultado);
            
            // execute the query
            $stmt->execute();
            
            // echo a message to say the UPDATE succeeded
            echo $stmt->rowCount() . " records UPDATED successfully";
        }catch(PDOException $e) {
            echo $resultado . "<br>" . $e->getMessage();
        }
        $conn = null;
        //  $resultado = mysqli_query($connect,$query);
        if($stmt){
            $_SESSION['title'] = '¡Yupi! Todo ha salido bien';
            $_SESSION['message'] = 'Se elimino la canción correctamente';
            $_SESSION['icon'] = 'fa-solid fa-circle-check';
            $_SESSION['message_type'] = 'success';

            header('Location: ../bogar_index.php#musica');
        }else{
            $_SESSION['title'] = '¡Ouch! Algo salio mal';
            $_SESSION['message'] = 'No se pudo eliminar la canción, hazlo de nuevo';
            $_SESSION['icon'] = 'fa-solid fa-circle-xmark';
            $_SESSION['message_type'] = 'danger';

            header('Location: ../bogar_index.php#musica');
        }
           
        
    }

?>