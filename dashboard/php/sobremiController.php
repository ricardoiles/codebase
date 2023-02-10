<?php
	require 'connection.php';

	if(empty($_SESSION['name']))
	header('Location: bogar_login.php');

    // Define database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cesaupfy_bogar";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // update hero info
    if(isset($_POST['update_hero_sobre_mi'])){
        $id_sobre_mi = 1;
        $titulo = $_POST['titulo'];
        $subtitulo = $_POST['subtitulo'];

        try {
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $resultado = "UPDATE hero_sobre_mi SET titulo = '$titulo', subtitulo = '$subtitulo'
                        WHERE id_sobre_mi = ".$id_sobre_mi;
            
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
            header('Location: ../bogar_sobre_mi.php');
        }catch(PDOException $e) {
            echo $resultado . "<br> mal" . $e->getMessage();
        }
        $conn = null;  
    }

    // update update_info_sobre_mi
    if(isset($_POST['update_info_sobre_mi'])){
        $id_sobre_mi = 1;
        $subtitulo = $_POST['subtitulo'];
        $descripcion = $_POST['descripcion'];
        
        try {
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $resultado = "UPDATE sobre_mi SET subtitulo = '$subtitulo', descripcion = '$descripcion'
                        WHERE id_sobre_mi = ".$id_sobre_mi;
            
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
            header('Location: ../bogar_sobre_mi.php#sobremi');
        }catch(PDOException $e) {
            echo $resultado . "<br>" . $e->getMessage();
        }
        $conn = null;  
    }

    // update foto_sobre_mi
    if(isset($_POST['update_foto_sobre_mi'])){
        $id_sobre_mi = 1;
        $foto = $_FILES['foto']['name'];

        if(isset($foto) && $foto != ""){
            $tipo = $_FILES['foto']['type'];
            $temp  = $_FILES['foto']['tmp_name'];
    
           if( !((strpos($tipo,'jpg') || strpos($tipo,'png') || strpos($tipo,'jpeg') || strpos($tipo,'webp')))){
            $_SESSION['title'] = '¡Hey! Checa este mensaje';
            $_SESSION['message'] = 'Solo se permite archivos jpeg, jpg, png, webp';
            $_SESSION['icon'] = 'fa-solid fa-circle-exclamation';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../bogar_sobre_mi.php#sobremi');
           }else{
            try {
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
                $resultado = "UPDATE sobre_mi SET foto = '$foto' WHERE id_sobre_mi = ".$id_sobre_mi;
              
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
                move_uploaded_file($temp,'../assets/media/sobre_mi/'.$foto);   

                $_SESSION['title'] = '¡Yupi! Todo ha salido bien';
                $_SESSION['message'] = 'Se ha actualizado la imagen correctamente';
                $_SESSION['icon'] = 'fa-solid fa-circle-check';
                $_SESSION['message_type'] = 'success';

                header('Location: ../bogar_sobre_mi.php#sobremi');
             }else{
                $_SESSION['title'] = '¡Ouch! Algo salio mal';
                $_SESSION['message'] = 'No se pudo cargar tu imagen, hazlo de nuevo';
                $_SESSION['icon'] = 'fa-solid fa-circle-xmark';
                $_SESSION['message_type'] = 'danger';

                header('Location: ../bogar_sobre_mi.php#sobremi');
             }
           }
        }else{
            $_SESSION['title'] = '¡Hey! Checa este mensaje';
            $_SESSION['message'] = 'Debes cargar una imagen';
            $_SESSION['icon'] = 'fa-solid fa-circle-exclamation';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../bogar_sobre_mi.php#sobremi');
        }
    } 

    // update update_foto_historia
    if(isset($_POST['update_foto_historia'])){
        $id_historia = 1;
        $foto = $_FILES['foto']['name'];

        if(isset($foto) && $foto != ""){
            $tipo = $_FILES['foto']['type'];
            $temp  = $_FILES['foto']['tmp_name'];
    
           if( !((strpos($tipo,'jpg') || strpos($tipo,'png') || strpos($tipo,'jpeg') || strpos($tipo,'webp')))){
            $_SESSION['title'] = '¡Hey! Checa este mensaje';
            $_SESSION['message'] = 'Solo se permite archivos jpeg, jpg, png, webp';
            $_SESSION['icon'] = 'fa-solid fa-circle-exclamation';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../bogar_sobre_mi.php#mihistoria');
           }else{
            try {
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
                $resultado = "UPDATE mi_historia SET foto = '$foto' WHERE id_historia = ".$id_historia;
              
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
                move_uploaded_file($temp,'../assets/media/mi_historia/'.$foto);   

                $_SESSION['title'] = '¡Yupi! Todo ha salido bien';
                $_SESSION['message'] = 'Se ha actualizado la imagen correctamente';
                $_SESSION['icon'] = 'fa-solid fa-circle-check';
                $_SESSION['message_type'] = 'success';

                header('Location: ../bogar_sobre_mi.php#mihistoria');
             }else{
                $_SESSION['title'] = '¡Ouch! Algo salio mal';
                $_SESSION['message'] = 'No se pudo cargar tu imagen, hazlo de nuevo';
                $_SESSION['icon'] = 'fa-solid fa-circle-xmark';
                $_SESSION['message_type'] = 'danger';

                header('Location: ../bogar_sobre_mi.php#mihistoria');
             }
           }
        }else{
            $_SESSION['title'] = '¡Hey! Checa este mensaje';
            $_SESSION['message'] = 'Debes cargar una imagen';
            $_SESSION['icon'] = 'fa-solid fa-circle-exclamation';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../bogar_sobre_mi.php#mihistoria');
        }
    } 

     // update update_mi_historia
     if(isset($_POST['update_mi_historia'])){
        $id_historia = 1;
        $descripcion = $_POST['descripcion'];
        
        try {
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $resultado = "UPDATE mi_historia SET descripcion = '$descripcion'
                        WHERE id_historia = ".$id_historia;
            
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
            header('Location: ../bogar_sobre_mi.php#mihistoria');
        }catch(PDOException $e) {
            echo $resultado . "<br>" . $e->getMessage();
        }
        $conn = null;  
    }
?>